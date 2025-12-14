<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PromosiController;
use App\Http\Controllers\UsersController;

/* ============================================
   PUBLIC ROUTES (Tanpa Login)
============================================ */
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/menu', [PageController::class, 'menu'])->name('menu');
Route::get('/promosi', [PageController::class, 'promosi'])->name('promosi');
Route::get('/tentangkami', [PageController::class, 'tentangkami'])->name('tentangkami');
Route::view('/about', 'user.about')->name('about');

// Lapak Public
Route::get('/lapak/{id}', [PageController::class, 'lapakDetail'])->name('lapak.detail');
Route::get('/lapak/{id}/menu', [PageController::class, 'menuLapak'])->name('lapak.menu');

/* ============================================
   GOOGLE OAUTH ROUTES
   PENTING: Jangan gunakan middleware guest di callback
   karena akan redirect balik ke login
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
   SHARED ROUTES (Admin & Penjual)
============================================ */
Route::middleware(['auth'])->group(function () {
    // Dashboard - redirect berdasarkan role
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    
    // Products - Bisa diakses Admin & Penjual
    Route::resource('products', ProductController::class);
    
    // Promosi - Bisa diakses Admin & Penjual (Read & Create)
    Route::get('/promosi-admin', [PromosiController::class, 'index'])->name('promosi-admin.index');
    Route::get('/promosi-admin/{id}', [PromosiController::class, 'show'])->name('promosi-admin.show');
    Route::post('/promosi-admin', [PromosiController::class, 'store'])->name('promosi-admin.store');
    Route::get('/promosi-admin/create', [PromosiController::class, 'create'])->name('promosi-admin.create');
    
    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
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
    
    // Promosi Full Control (Edit & Delete)
    Route::put('/promosi-admin/{id}', [PromosiController::class, 'update'])->name('promosi-admin.update');
    Route::delete('/promosi-admin/{id}', [PromosiController::class, 'destroy'])->name('promosi-admin.destroy');
    Route::get('/promosi-admin/{id}/edit', [PromosiController::class, 'edit'])->name('promosi-admin.edit');
    
    Route::get('/search', [PageController::class, 'search'])->name('search');
});

/* ============================================
   FALLBACK ROUTE
============================================ */
Route::fallback(function () {
    if (Auth::check()) {
        $user = Auth::user();
        if ($user->hak_akses == 1) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('dashboard');
    }
    return redirect()->route('home');
});