<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Menampilkan halaman home
     */
    public function home()
    {
        return view('user.home');
    }

    /**
     * Menampilkan halaman menu
     */
    public function menu()
    {
        return view('user.menu');
    }

    /**
     * Menampilkan halaman about
     */
    public function promosi()
    {
        return view('user.promosi');
    }

    /**
     * Menampilkan halaman book table
     */
    public function Tentangkami()
    {
        return view('user.tentangkami');
    }

    /**
     * Dashboard
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    /**
     * Manajemen Users
     */
    public function users()
    {
        return view('admin.users');
    }

    /**
     * Manajemen Products
     */
    public function products()
    {
        return view('admin.products');
    }

    /**
     * Menampilkan halaman sign-in
     */
    public function signIn()
    {
        return view('admin.sign-in');
    }

    
    /**
     * Menampilkan halaman sign-up
     */
    public function signUp()
    {
        return view('admin.sign-up');
    }

    public function promosiAdmin()
    {
        return view('admin.promosi-admin');
    }

    /**
     * Fitur Search Produk
     */
    public function search(Request $request)
    {
        $query = $request->input('query');
        
        // Validasi input
        if (empty($query) || strlen($query) < 2) {
            return redirect()->back()->with('message', 'Masukkan minimal 2 karakter untuk mencari');
        }
    
        // Search di database - SESUAI KOLOM ASLI
        $results = \DB::table('produk')
            ->where('nama_produk', 'LIKE', '%' . $query . '%')
            ->orWhere('deskripsi', 'LIKE', '%' . $query . '%')
            ->orWhere('kategori', 'LIKE', '%' . $query . '%')
            ->get();

        return view('search-results', [
            'results' => $results,
            'query' => $query
        ]);
    }
}