<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PromosiController;
use App\Http\Controllers\AuthController;



/* ---------------------------------------------
|   PUBLIC ROUTES
--------------------------------------------- */
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/menu', [PageController::class, 'menu'])->name('menu');
Route::get('/promosi', [PageController::class, 'promosi'])->name('promosi');
Route::get('/tentangkami', [PageController::class, 'tentangkami'])->name('tentangkami');


/* ---------------------------------------------
|   DASHBOARD
--------------------------------------------- */
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/search', [PageController::class, 'search'])->name('search');


/* ---------------------------------------------
|   AUTH PAGE (SIGN IN & SIGN UP)
--------------------------------------------- */
Route::get('/sign-in', [PageController::class, 'signIn'])->name('signIn');
Route::get('/sign-up', [PageController::class, 'signUp'])->name('signUp');

// PROCESS
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/register', [AuthController::class, 'register'])->name('register.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


/* ---------------------------------------------
|   PRODUCTS ROUTES
--------------------------------------------- */
Route::resource('products', ProductController::class);


/* ---------------------------------------------
|   ADMIN ROUTES
--------------------------------------------- */
Route::resource('users', AdminController::class);

// Manual Admin (tetap dipertahankan)
Route::get('/admins', [AdminController::class, 'index'])->name('admins.index');
Route::post('/admins', [AdminController::class, 'store'])->name('admins.store');
Route::put('/admins/{id}', [AdminController::class, 'update'])->name('admins.update');
Route::delete('/admins/{id}', [AdminController::class, 'destroy'])->name('admins.destroy');


/* ---------------------------------------------
|   PROMOSI ADMIN (TIDAK DIHAPUS)
--------------------------------------------- */

// Halaman admin (page)
Route::get('/promosi-admin-page', [PageController::class, 'promosiAdmin'])
    ->name('promosiAdmin');

// CRUD (resource)
Route::resource('promosi-admin', PromosiController::class);


/* ---------------------------------------------
|   LAPAK ROUTES (Perbaikan duplikat)
--------------------------------------------- */

// Route detail lapak → dipakai yang ini
Route::get('/lapak/{id}', [PageController::class, 'lapakDetail'])
    ->name('lapak.detail');

// Menu lapak
Route::get('/lapak/{id}/menu', [PageController::class, 'menuLapak'])
    ->name('lapak.menu');

// DUPLIKAT DIPERBAIKI → ubah name saja agar tidak tabrakan
Route::get('/lapak/{id}', [PageController::class, 'lapakDetail'])
    ->name('lapak.show');  // tetap ada tapi tidak mengacaukan route utama


/* ---------------------------------------------
|   STATIC PAGES
--------------------------------------------- */
Route::get('/about', function () {
    return view('user.about');
})->name('about');

