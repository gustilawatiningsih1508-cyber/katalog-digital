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
   AUTH ROUTES
============================================ */
// Views
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::get('/sign-in', [AuthController::class, 'showLogin'])->name('signIn');
Route::get('/sign-up', [AuthController::class, 'showRegister'])->name('signUp');

// Process
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/register', [AuthController::class, 'register'])->name('register.process');

/* ============================================
   PROTECTED ROUTES (Perlu Login)
============================================ */
Route::middleware(['auth'])->group(function () {
    // Dashboard User
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    
    // Search
    Route::get('/search', [PageController::class, 'search'])->name('search');
    
    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    // Products CRUD
    Route::resource('products', ProductController::class);
    
    // Promosi Admin Page (View saja)
    Route::get('/promosi-admin-page', [PageController::class, 'promosiAdmin'])->name('promosiAdmin');
    
    // Users Search (harus di atas Route::resource)
    Route::get('users/search', [UsersController::class, 'search'])->name('users.search');
    
    // Users CRUD
    Route::resource('users', UsersController::class);
});

/* ============================================
   ADMIN ROUTES (Hak Akses = 1)
============================================ */
Route::middleware(['auth', 'hak_akses:1'])->group(function () {
    // Admin Dashboard
    Route::get('/admin/dashboard', [PageController::class, 'dashboard'])
        ->name('admin.dashboard');
    
    // Admin Settings
    Route::get('/admin/settings', [PageController::class, 'adminSettings'])
        ->name('admin.settings');
    
    // CRUD Promosi (khusus admin)
    Route::resource('promosi-admin', PromosiController::class);
});

/* ============================================
   FALLBACK ROUTE
============================================ */
Route::fallback(function () {
    return redirect()->route('home');
});