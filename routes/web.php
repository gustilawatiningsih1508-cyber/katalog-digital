<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Public Routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/menu', [PageController::class, 'menu'])->name('menu');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/book', [PageController::class, 'book'])->name('book');

// Dashboard Routes
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/users', [PageController::class, 'users'])->name('users');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/search', [PageController::class, 'search'])->name('search');

