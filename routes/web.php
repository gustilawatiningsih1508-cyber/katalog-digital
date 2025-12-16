<?php
// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PromosiController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProfileController;

/* ============================================
   PUBLIC ROUTES (Tanpa Login)
============================================ */
Route::get('/', [PageController::class, 'home'])->name('home');

// ROUTES DINAMIS - Dari Database
Route::get('/menu', [ProductController::class, 'publicMenu'])->name('menu');
Route::get('/promosi', [PromosiController::class, 'publicPromosi'])->name('promosi');

Route::get('/tentangkami', [PageController::class, 'tentangkami'])->name('tentangkami');
Route::view('/about', 'user.about')->name('about');

// Lapak Public
Route::get('/lapak/{id}', [PageController::class, 'lapakDetail'])->name('lapak.detail');
Route::get('/lapak/{id}/menu', [PageController::class, 'menuLapak'])->name('lapak.menu');

/* ============================================
   GOOGLE OAUTH ROUTES
============================================ */
Route::get('/auth/google', [AuthController::class, 'redirectToGoogle'])
    ->middleware('guest')
    ->name('auth.google');

Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback'])
    ->name('auth.google.callback');

/* ============================================
   AUTH ROUTES (Guest Only - Belum Login)
============================================ */
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::get('/sign-in', [AuthController::class, 'showLogin'])->name('signIn');
    Route::get('/sign-up', [AuthController::class, 'showRegister'])->name('signUp');

    Route::post('/login', [AuthController::class, 'login'])->name('login.process');
    Route::post('/register', [AuthController::class, 'register'])->name('register.process');

    // OTP Routes
    Route::get('/verify-otp', [AuthController::class, 'showOtpVerification'])->name('otp.verify');
    Route::post('/verify-otp', [AuthController::class, 'verifyOtp'])->name('otp.verify.process');
    Route::post('/resend-otp', [AuthController::class, 'resendOtp'])->name('otp.resend');
});

/* ============================================
   SHARED ROUTES (Admin & Penjual) - HARUS SEBELUM ADMIN ONLY ROUTES
============================================ */
Route::middleware(['auth'])->group(function () {
    // Dashboard - redirect berdasarkan role
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'show'])
        ->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])
        ->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');
    Route::post('/profile/avatar', [ProfileController::class, 'updateAvatar'])
        ->name('profile.update-avatar');
    Route::delete('/profile/avatar', [ProfileController::class, 'deleteAvatar'])
        ->name('profile.delete-avatar');
    Route::get('/profile/change-password', [ProfileController::class, 'showChangePassword'])
        ->name('profile.change-password');
    Route::post('/profile/change-password', [ProfileController::class, 'changePassword'])
        ->name('profile.change-password.process');

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

/* ============================================
   ADMIN & PENJUAL ROUTES (Hak Akses 1 & 2) - CRUD LENGKAP
============================================ */
Route::middleware(['auth'])->group(function () {
    // Products - Accessible by Admin (1) and Penjual (2)
    Route::resource('products', ProductController::class);

    // Promosi - Accessible by Admin (1) and Penjual (2)
    Route::resource('promosi-admin', PromosiController::class)->parameters([
        'promosi-admin' => 'id'
    ]);

    // Alternative routes untuk Promosi
    Route::get('/promosi-admin', [PromosiController::class, 'index'])->name('promosi-admin.index');
    Route::get('/promosi-admin/create', [PromosiController::class, 'create'])->name('promosi-admin.create');
    Route::post('/promosi-admin', [PromosiController::class, 'store'])->name('promosi-admin.store');
    Route::get('/promosi-admin/{id}/edit', [PromosiController::class, 'edit'])->name('promosi-admin.edit');
    Route::put('/promosi-admin/{id}', [PromosiController::class, 'update'])->name('promosi-admin.update');
    Route::delete('/promosi-admin/{id}', [PromosiController::class, 'destroy'])->name('promosi-admin.destroy');
    Route::get('/promosi-admin/{id}', [PromosiController::class, 'show'])->name('promosi-admin.show');
});

/* ============================================
   ADMIN ONLY ROUTES (Hak Akses = 1)
============================================ */
Route::middleware(['auth', 'hak_akses:1'])->group(function () {
    // Admin Dashboard
    Route::get('/admin/dashboard', [PageController::class, 'adminDashboard'])
        ->name('admin.dashboard');

    Route::get('/admin/settings', [PageController::class, 'adminSettings'])
        ->name('admin.settings');

    // Users Management (HANYA ADMIN)
    Route::get('/users/search', [UsersController::class, 'search'])->name('users.search');
    Route::resource('users', UsersController::class);

    // Search (HANYA ADMIN)
    Route::get('/search', [PageController::class, 'search'])->name('search');
});

/* ============================================
   FALLBACK ROUTE
============================================ */
Route::fallback(function () {
    if (\Illuminate\Support\Facades\Auth::check()) {
        $user = \Illuminate\Support\Facades\Auth::user();
        if ($user->hak_akses == 1) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('dashboard');
    }
    return redirect()->route('home');
});