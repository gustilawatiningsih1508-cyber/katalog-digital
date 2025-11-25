<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PromosiController;

// Public Routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/menu', [PageController::class, 'menu'])->name('menu');
Route::get('/promosi', [PageController::class, 'promosi'])->name('promosi');
Route::get('/tentangkami', [PageController::class, 'tentangkami'])->name('tentangkami');

// Dashboard Routes
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/search', [PageController::class, 'search'])->name('search');
Route::get('/sign-in', [PageController::class, 'signIn'])->name('signIn');
Route::get('/sign-up', [PageController::class, 'signUp'])->name('signUp');
Route::get('/promosi-admin', [PageController::class, 'promosiAdmin'])->name('promosiAdmin');

// Products Routes
Route::resource('products', ProductController::class);

// Admin Routes - PASTIKAN INI ADA
Route::resource('users', AdminController::class);

// ATAU JIKA MASIH ERROR, COBA ROUTE MANUAL:
Route::get('/admins', [AdminController::class, 'index'])->name('admins.index');
Route::post('/admins', [AdminController::class, 'store'])->name('admins.store');
Route::put('/admins/{id}', [AdminController::class, 'update'])->name('admins.update');
Route::delete('/admins/{id}', [AdminController::class, 'destroy'])->name('admins.destroy');

Route::resource('promosi-admin', PromosiController::class);