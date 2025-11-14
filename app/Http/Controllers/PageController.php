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

    /**
     * Menangani form booking
     */
    public function bookStore(Request $request)
    {
        // Validasi data form
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email',
            'persons' => 'required|numeric',
            'date' => 'required|date',
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('book')->with('success', 'Booking berhasil dibuat!');
    }
}