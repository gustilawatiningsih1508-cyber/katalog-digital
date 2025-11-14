<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Menampilkan halaman home
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Menampilkan halaman menu
     */
    public function menu()
    {
        return view('menu');
    }

    /**
     * Menampilkan halaman about
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Menampilkan halaman book table
     */
    public function book()
    {
        return view('book');
    }

    /**
     * Dashboard
     */
    public function dashboard()
    {
        return view('dashboard');
    }

    /**
     * Manajemen Users
     */
    public function users()
    {
        return view('users');
    }

    /**
     * Manajemen Products
     */
    public function products()
    {
        return view('products');
    }
}