<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    // Show login form
    public function showLogin()
    {
        // Jika sudah login, redirect ke dashboard masing-masing
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
        // Jika sudah login, redirect ke dashboard
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
        // Validasi input
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

        // Coba login
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            
            // Update waktu aktivitas
            $user = Auth::user();
            $user->waktu_aktivitas = now();
            $user->save();

            Log::info('User logged in successfully', [
                'user_id' => $user->id, 
                'email' => $user->email,
                'hak_akses' => $user->hak_akses
            ]);

            // Redirect berdasarkan hak akses
            if ($user->hak_akses == 1) {
                // Admin ke admin dashboard
                return redirect()->route('admin.dashboard')
                    ->with('success', 'Selamat datang, Admin ' . $user->username . '!');
            } else {
                // Penjual ke user dashboard
                return redirect()->route('dashboard')
                    ->with('success', 'Selamat datang, ' . $user->username . '!');
            }
        }

        // Login gagal
        Log::warning('Login failed', ['email' => $request->email]);
        
        return back()
            ->withErrors(['email' => 'Email atau password salah!'])
            ->withInput($request->only('email'));
    }

    // Process register
    public function register(Request $request)
    {
        // Validasi input
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
            // Buat user baru
            $user = User::create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'hak_akses' => 2, // Default sebagai penjual
                'waktu_aktivitas' => now()
            ]);

            Log::info('User registered successfully', [
                'user_id' => $user->id, 
                'username' => $user->username,
                'email' => $user->email
            ]);

            // Auto login setelah register
            Auth::login($user);
            
            // Redirect ke dashboard penjual
            return redirect()->route('dashboard')
                ->with('success', 'Akun berhasil dibuat! Selamat datang, ' . $user->username . '!');

        } catch (\Exception $e) {
            Log::error('Registration failed: ' . $e->getMessage());
            
            return back()
                ->withErrors(['error' => 'Registrasi gagal. Silakan coba lagi.'])
                ->withInput($request->except('password', 'password_confirmation'));
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
}