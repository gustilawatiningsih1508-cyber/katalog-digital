<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;
use Exception;

class AuthController extends Controller
{
    // Show login form
    public function showLogin()
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->hak_akses == 1) {
                return redirect()->route('admin.dashboard');
            }
            return redirect()->route('dashboard');
        }

        return view('admin.sign-in');
    }

    // Show register form
    public function showRegister()
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->hak_akses == 1) {
                return redirect()->route('admin.dashboard');
            }
            return redirect()->route('dashboard');
        }

        return view('admin.sign-up');
    }

    // Process login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password wajib diisi'
        ]);

        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            $user = Auth::user();
            $user->waktu_aktivitas = now();
            $user->save();

            Log::info('User logged in successfully', [
                'user_id' => $user->id,
                'email' => $user->email,
                'hak_akses' => $user->hak_akses
            ]);

            if ($user->hak_akses == 1) {
                return redirect()->route('admin.dashboard')
                    ->with('success', 'Selamat datang, Admin ' . $user->username . '!');
            } else {
                return redirect()->route('dashboard')
                    ->with('success', 'Selamat datang, ' . $user->username . '!');
            }
        }

        Log::warning('Login failed', ['email' => $request->email]);

        return back()
            ->withErrors(['email' => 'Email atau password salah!'])
            ->withInput($request->only('email'));
    }

    // Process register dengan OTP
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed'
        ], [
            'username.required' => 'Username wajib diisi',
            'username.unique' => 'Username sudah digunakan',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 6 karakter',
            'password.confirmed' => 'Konfirmasi password tidak cocok'
        ]);

        try {
            // Simpan data registrasi ke session
            session([
                'registration_data' => [
                    'username' => $request->username,
                    'email' => $request->email,
                    'password' => $request->password,
                ]
            ]);

            // Kirim OTP
            $otpService = new \App\Services\OtpService();
            $result = $otpService->sendOtp($request->email, 'register');

            if ($result['success']) {
                return redirect()->route('otp.verify')
                    ->with('success', 'Kode OTP telah dikirim ke email Anda. Silakan cek inbox atau spam folder.');
            } else {
                return back()
                    ->withErrors(['error' => $result['message']])
                    ->withInput($request->except('password', 'password_confirmation'));
            }

        } catch (\Exception $e) {
            Log::error('Registration failed: ' . $e->getMessage());

            return back()
                ->withErrors(['error' => 'Registrasi gagal. Silakan coba lagi.'])
                ->withInput($request->except('password', 'password_confirmation'));
        }
    }

    // Show OTP verification form
    public function showOtpVerification()
    {
        if (!session('registration_data')) {
            return redirect()->route('signUp')
                ->with('error', 'Silakan isi form registrasi terlebih dahulu');
        }

        return view('admin.verify-otp');
    }

    // Verify OTP
    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|string|size:6'
        ], [
            'otp.required' => 'Kode OTP wajib diisi',
            'otp.size' => 'Kode OTP harus 6 digit'
        ]);

        $registrationData = session('registration_data');

        if (!$registrationData) {
            return redirect()->route('signUp')
                ->with('error', 'Sesi registrasi telah berakhir. Silakan daftar ulang.');
        }

        try {
            // Verifikasi OTP
            $otpService = new \App\Services\OtpService();
            $result = $otpService->verifyOtp($registrationData['email'], $request->otp, 'register');

            if (!$result['success']) {
                return back()
                    ->withErrors(['otp' => $result['message']])
                    ->withInput();
            }

            // OTP valid, buat user baru
            $user = User::create([
                'username' => $registrationData['username'],
                'email' => $registrationData['email'],
                'password' => Hash::make($registrationData['password']),
                'hak_akses' => 2,
                'email_verified_at' => now(), // Langsung verified karena sudah verifikasi OTP
                'waktu_aktivitas' => now()
            ]);

            Log::info('User registered successfully with OTP', [
                'user_id' => $user->id,
                'username' => $user->username,
                'email' => $user->email
            ]);

            // Hapus session registration data
            session()->forget('registration_data');

            // Auto login
            Auth::login($user);

            return redirect()->route('dashboard')
                ->with('success', 'Akun berhasil dibuat! Selamat datang, ' . $user->username . '!');

        } catch (\Exception $e) {
            Log::error('OTP verification failed: ' . $e->getMessage());

            return back()
                ->withErrors(['error' => 'Verifikasi OTP gagal. Silakan coba lagi.'])
                ->withInput();
        }
    }

    // Resend OTP
    public function resendOtp(Request $request)
    {
        $registrationData = session('registration_data');

        if (!$registrationData) {
            return response()->json([
                'success' => false,
                'message' => 'Sesi registrasi telah berakhir'
            ]);
        }

        try {
            $otpService = new \App\Services\OtpService();
            $result = $otpService->resendOtp($registrationData['email'], 'register');

            return response()->json($result);

        } catch (\Exception $e) {
            Log::error('Resend OTP failed: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Gagal mengirim ulang OTP'
            ]);
        }
    }

    // Logout
    public function logout(Request $request)
    {
        $username = Auth::user()->username ?? 'User';

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        Log::info('User logged out', ['username' => $username]);

        return redirect()->route('home')
            ->with('success', 'Logout berhasil! Sampai jumpa, ' . $username . '!');
    }

    /**
     * Redirect ke Google OAuth
     */
    public function redirectToGoogle()
    {
        try {
            Log::info('Redirecting to Google OAuth');
            
            return Socialite::driver('google')
                ->with(['prompt' => 'select_account'])
                ->redirect();
        } catch (Exception $e) {
            Log::error('Google redirect error: ' . $e->getMessage());
            return redirect()->route('signIn')
                ->with('error', 'Tidak dapat terhubung ke Google. Silakan coba lagi.');
        }
    }

    /**
     * Handle callback dari Google
     */
    public function handleGoogleCallback(Request $request)
    {
        try {
            Log::info('Google callback received', [
                'url' => $request->fullUrl(),
                'has_code' => $request->has('code'),
                'has_state' => $request->has('state')
            ]);

            // Cek jika ada error dari Google
            if ($request->has('error')) {
                Log::warning('Google OAuth error', ['error' => $request->get('error')]);
                return redirect()->route('signIn')
                    ->with('error', 'Login dengan Google dibatalkan.');
            }

            // Ambil data user dari Google
            $googleUser = Socialite::driver('google')->stateless()->user();

            Log::info('Google user data received', [
                'google_id' => $googleUser->getId(),
                'email' => $googleUser->getEmail(),
                'name' => $googleUser->getName()
            ]);

            // Cari user berdasarkan Google ID
            $user = User::where('google_id', $googleUser->getId())->first();
            
            // Flag untuk mendeteksi apakah ini registrasi baru
            $isNewRegistration = false;

            if ($user) {
                // CASE 1: User sudah ada dengan Google ID - LOGIN
                $user->update([
                    'avatar' => $googleUser->getAvatar(),
                    'email_verified_at' => now(),
                    'waktu_aktivitas' => now(),
                ]);

                Log::info('Existing Google user logged in', ['user_id' => $user->id]);
            } else {
                // Cek apakah email sudah terdaftar tanpa Google ID
                $existingUser = User::where('email', $googleUser->getEmail())->first();

                if ($existingUser) {
                    // CASE 2: Link akun yang sudah ada dengan Google - LOGIN
                    $existingUser->update([
                        'google_id' => $googleUser->getId(),
                        'avatar' => $googleUser->getAvatar(),
                        'email_verified_at' => now(),
                        'waktu_aktivitas' => now(),
                    ]);

                    $user = $existingUser;
                    Log::info('Linked existing user with Google and logged in', ['user_id' => $user->id]);
                } else {
                    // CASE 3: User baru - SIGNUP
                    $username = $this->generateUniqueUsername($googleUser->getName());

                    $user = User::create([
                        'username' => $username,
                        'email' => $googleUser->getEmail(),
                        'google_id' => $googleUser->getId(),
                        'avatar' => $googleUser->getAvatar(),
                        'hak_akses' => 2, // Default sebagai penjual
                        'email_verified_at' => now(),
                        'waktu_aktivitas' => now(),
                        'password' => null, // Password null untuk login Google
                    ]);

                    $isNewRegistration = true;
                    Log::info('New user registered via Google', [
                        'user_id' => $user->id,
                        'email' => $user->email,
                        'is_new' => $isNewRegistration
                    ]);
                }
            }

            // Tentukan redirect berdasarkan kondisi
            if ($isNewRegistration) {
                // SIGNUP: User baru, tidak langsung login, redirect ke sign-in dengan pesan
                Log::info('New user via Google - redirecting to sign-in', ['user_id' => $user->id]);
                
                return redirect()->route('signIn')
                    ->with('success', 'Akun berhasil dibuat dengan Google! Silakan login untuk melanjutkan.')
                    ->with('google_email', $user->email); // Simpan email untuk autofill
            } else {
                // LOGIN: User sudah ada, langsung login
                Auth::login($user, true);
                
                // Regenerate session untuk keamanan
                $request->session()->regenerate();

                Log::info('User logged in via Google successfully', [
                    'user_id' => $user->id,
                    'email' => $user->email,
                    'hak_akses' => $user->hak_akses
                ]);

                // Redirect ke dashboard berdasarkan hak akses
                if ($user->hak_akses == 1) {
                    return redirect()->intended(route('admin.dashboard'))
                        ->with('success', 'Selamat datang kembali, Admin ' . $user->username . '!');
                } else {
                    return redirect()->intended(route('dashboard'))
                        ->with('success', 'Selamat datang kembali, ' . $user->username . '!');
                }
            }

        } catch (\Laravel\Socialite\Two\InvalidStateException $e) {
            Log::error('Google OAuth Invalid State', [
                'message' => $e->getMessage()
            ]);

            return redirect()->route('signIn')
                ->with('error', 'Sesi login telah habis. Silakan coba lagi.');

        } catch (Exception $e) {
            Log::error('Google Login Error', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString()
            ]);

            return redirect()->route('signIn')
                ->with('error', 'Terjadi kesalahan saat login dengan Google. Silakan coba lagi atau gunakan metode login lainnya.');
        }
    }

    /**
     * Generate unique username dari nama Google
     */
    private function generateUniqueUsername($name)
    {
        // Bersihkan nama dan buat username
        $username = strtolower(str_replace(' ', '_', $name));
        $username = preg_replace('/[^a-z0-9_]/', '', $username);

        // Jika username kosong, gunakan default
        if (empty($username)) {
            $username = 'user';
        }

        // Cek apakah username sudah ada
        $originalUsername = $username;
        $counter = 1;

        while (User::where('username', $username)->exists()) {
            $username = $originalUsername . '_' . $counter;
            $counter++;
        }

        return $username;
    }
}