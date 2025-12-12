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
        return view('admin.sign-in');
    }

    // Show register form
    public function showRegister()
    {
        return view('admin.sign-up');
    }

    // Process login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            
            // Update waktu aktivitas
            $user = Auth::user();
            $user->waktu_aktivitas = now();
            $user->save();

            // Redirect berdasarkan hak akses
            if ($user->hak_akses == 1) {
                return redirect()->route('admin.dashboard')->with('success', 'Login berhasil!');
            } else {
                return redirect()->route('dashboard')->with('success', 'Login berhasil!');
            }
        }

        return back()->withErrors([
            'email' => 'Email atau password salah!',
        ])->withInput();
    }

    // Process register
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed'
        ]);

        try {
            $user = User::create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'hak_akses' => 2, // Default sebagai penjual
                'waktu_aktivitas' => now()
            ]);

            Log::info('User registered successfully', ['user_id' => $user->id]);

            // Option 1: Login otomatis setelah register
            // Auth::login($user);
            // return redirect()->route('dashboard')->with('success', 'Akun berhasil dibuat!');

            // Option 2: Redirect ke login
            return redirect()->route('signIn')->with('success', 'Akun berhasil dibuat! Silakan login.');

        } catch (\Exception $e) {
            Log::error('Registration failed: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Registrasi gagal. Silakan coba lagi.'])->withInput();
        }
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Logout berhasil!');
    }
}