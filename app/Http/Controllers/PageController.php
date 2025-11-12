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
     * Menangani form booking (jika diperlukan)
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

        // Di sini Anda bisa:
        // 1. Simpan ke database
        // 2. Kirim email notifikasi
        // 3. Proses data lainnya

        // Redirect dengan pesan sukses
        return redirect()->route('book')->with('success', 'Booking berhasil dibuat!');
    }
}