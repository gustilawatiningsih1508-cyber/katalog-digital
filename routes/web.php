<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Public Routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/menu', [PageController::class, 'menu'])->name('menu');
Route::get('/promosi', [PageController::class, 'promosi'])->name('promosi');
Route::get('/tentangkami', [PageController::class, 'tentangkami'])->name('tentangkami');

// Dashboard Routes
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/users', [PageController::class, 'users'])->name('users');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/search', [PageController::class, 'search'])->name('search');
Route::get('/sign-in', [PageController::class, 'signIn'])->name('signIn');
Route::get('/sign-up', [PageController::class, 'signUp'])->name('signUp');

