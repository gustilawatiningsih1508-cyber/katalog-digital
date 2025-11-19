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