<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    /* ============================================
       PUBLIC PAGES (Tidak perlu login)
    ============================================ */
    
    public function home()
    {
        return view('user.home');
    }

    public function menu()
    {
        return view('user.menu');
    }

    public function promosi()
    {
        return view('user.promosi');
    }

    public function tentangkami()
    {
        return view('user.tentangkami');
    }

    /* ============================================
       USER DASHBOARD (Setelah Login - HAK AKSES 2)
    ============================================ */
    
    public function dashboard()
    {
        // PENTING: Cek dulu apakah user sudah login
        if (!Auth::check()) {
            return redirect()->route('signIn')
                ->with('error', 'Silakan login terlebih dahulu');
        }

        $user = Auth::user();
        
        // Redirect admin ke dashboard admin
        if ($user->hak_akses == 1) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.dashboard');
    }

    /* ============================================
       ADMIN PAGES (Hak Akses = 1)
    ============================================ */
    
    public function adminDashboard()
    {
        // PENTING: Cek dulu apakah user sudah login
        if (!Auth::check()) {
            return redirect()->route('signIn')
                ->with('error', 'Silakan login terlebih dahulu');
        }

        $user = Auth::user();
        
        // Hanya admin yang bisa akses
        if ($user->hak_akses != 1) {
            return redirect()->route('dashboard')
                ->with('error', 'Anda tidak memiliki akses admin');
        }

        return view('admin.dashboard');
    }

    public function adminSettings()
    {
        if (!Auth::check()) {
            return redirect()->route('signIn');
        }

        return view('admin.settings');
    }

    public function users()
    {
        if (!Auth::check()) {
            return redirect()->route('signIn');
        }

        return view('admin.users');
    }

    public function products()
    {
        if (!Auth::check()) {
            return redirect()->route('signIn');
        }

        return view('admin.products');
    }

    public function promosiAdmin()
    {
        if (!Auth::check()) {
            return redirect()->route('signIn');
        }

        return view('admin.promosi-admin');
    }

    /* ============================================
       SEARCH FUNCTIONALITY
    ============================================ */
    
    public function search(Request $request)
    {
        $query = $request->input('query');

        if (empty($query) || strlen($query) < 2) {
            return redirect()->back()->with('message', 'Masukkan minimal 2 karakter untuk mencari');
        }

        $results = \DB::table('produk')
            ->where('nama_produk', 'LIKE', '%' . $query . '%')
            ->orWhere('deskripsi', 'LIKE', '%' . $query . '%')
            ->orWhere('kategori', 'LIKE', '%' . $query . '%')
            ->get();

        return view('search-results', [
            'results' => $results,
            'query'   => $query
        ]);
    }

    /* ============================================
       LAPAK (TOKO) - STATIC DATA
    ============================================ */

    public function lapakDetail($id)
    {
        // Semua data lapak
        $semuaLapak = [
            1 => [
                'id'        => 1,
                'nama'      => 'Miloku',
                'owner'     => 'Merianti',
                'gambar'    => asset('assets/user/images/milo1.jpg'),
                'deskripsi' => 'Miloku adalah usaha minuman kekinian dengan rasa Milo premium yang ada di Bengkalis.',
                'wa'        => '081234567890',
                'alamat'    => 'Jl. Ahmad Yani No. 45, Bengkalis',
                'menu'      => [
                    ['nama' => 'Milo Malaysia', 'harga' => 10000],
                    ['nama' => 'Kopi Milo', 'harga' => 12000],
                    ['nama' => 'Milo Latte', 'harga' => 15000],
                    ['nama' => 'Milk Tea Mutiara Cincau', 'harga' => 15000],
                    ['nama' => 'Es Teh Jumbo', 'harga' => 15000],
                    ['nama' => 'Sirup Marjan Grenadine', 'harga' => 15000],
                    ['nama' => 'Sirup Marjan Melon', 'harga' => 15000],
                ],
            ],

            2 => [
                'id'        => 2,
                'nama'      => 'Ngemil Yuk',
                'owner'     => 'Lilis Sari',
                'gambar'    => asset('assets/user/images/ngemil.jpg'),
                'deskripsi' => 'Ngemil Yuk menyediakan aneka camilan crispy, manis, dan pedas.',
                'wa'        => '081298765432',
                'alamat'    => 'Jl. Bantan No. 12, Bengkalis',
                'menu'      => [
                    ['nama' => 'Kentang Crispy', 'harga' => 8000],
                    ['nama' => 'Tahu Pedas', 'harga' => 7000],
                    ['nama' => 'Cilor Ori', 'harga' => 5000],
                ],
            ],

            3 => [
                'id'        => 3,
                'nama'      => 'Warung Mangan Limo Putri',
                'owner'     => 'Siti Aminah',
                'gambar'    => asset('assets/user/images/mangan.jpg'),
                'deskripsi' => 'Warung makan rumahan dengan menu favorit harian khas Bengkalis.',
                'wa'        => '081377112233',
                'alamat'    => 'Jl. Kelapapati No. 88, Bengkalis',
                'menu'      => [
                    ['nama' => 'Nasi Ayam Geprek', 'harga' => 13000],
                    ['nama' => 'Nasi Ikan Asam Pedas', 'harga' => 15000],
                    ['nama' => 'Nasi Goreng Kampung', 'harga' => 12000],
                ],
            ],
        ];

        // Cek jika ID tidak ada
        if (!isset($semuaLapak[$id])) {
            abort(404);
        }

        // Ambil data lapak + menu-nya
        $lapak = $semuaLapak[$id];
        $menu  = $lapak['menu'];

        return view('layouts.lapak.lapak-detail', compact('lapak', 'menu'));
    }

    public function menuLapak($id)
    {
        // Implementasi untuk menampilkan menu lapak
        // Bisa berupa API atau view
        return view('layouts.lapak.lapak-menu', ['lapakId' => $id]);
    }
}