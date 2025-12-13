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
   AUTH ROUTES (Guest Only - Belum Login)
============================================ */
Route::middleware('guest')->group(function () {
    // Views
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::get('/sign-in', [AuthController::class, 'showLogin'])->name('signIn');
    Route::get('/sign-up', [AuthController::class, 'showRegister'])->name('signUp');
    
    // Process
    Route::post('/login', [AuthController::class, 'login'])->name('login.process');
    Route::post('/register', [AuthController::class, 'register'])->name('register.process');
});

/* ============================================
   PENJUAL ROUTES (Hak Akses = 2)
============================================ */
Route::middleware(['auth', 'hak_akses:2'])->group(function () {
    // Dashboard Penjual
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    
    // Products CRUD (Penjual hanya bisa kelola produk sendiri)
    Route::resource('products', ProductController::class)->except(['index', 'show']);
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    
    // Promosi View Only (Penjual bisa lihat)
    Route::get('/promosi-admin', [PromosiController::class, 'index'])->name('promosi-admin.index');
    Route::get('/promosi-admin/{id}', [PromosiController::class, 'show'])->name('promosi-admin.show');
});

/* ============================================
   ADMIN ROUTES (Hak Akses = 1) - FULL ACCESS
============================================ */
Route::middleware(['auth', 'hak_akses:1'])->group(function () {
    // Admin Dashboard - ROUTE BERBEDA
    Route::get('/admin/dashboard', [PageController::class, 'adminDashboard'])
        ->name('admin.dashboard');
    
    // Admin Settings
    Route::get('/admin/settings', [PageController::class, 'adminSettings'])
        ->name('admin.settings');
    
    // Users Management (Hanya Admin)
    Route::get('/users/search', [UsersController::class, 'search'])->name('users.search');
    Route::resource('users', UsersController::class);
    
    // Products Management Full (Admin bisa kelola semua)
    Route::resource('products', ProductController::class);
    
    // Promosi Management Full (Admin full CRUD)
    Route::resource('promosi-admin', PromosiController::class);
    
    // Search
    Route::get('/search', [PageController::class, 'search'])->name('search');
});

/* ============================================
   LOGOUT ROUTE (Semua User yang Login)
============================================ */
Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
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