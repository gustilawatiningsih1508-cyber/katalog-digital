<?php
// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\PelakuUsaha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    // Method untuk menampilkan menu di halaman publik
    public function publicMenu()
    {
        $products = Product::with('pelakuUsaha')
            ->where('status', 'tersedia')
            ->orderBy('created_at', 'desc')
            ->get();
        
        return view('user.menu', compact('products'));
    }

    // Method untuk admin/penjual - PENTING: Filter berdasarkan id_pelaku_usaha
    public function index()
    {
        $user = auth()->user();
        
        if ($user->hak_akses == 1) {
            // Admin bisa lihat semua produk
            $products = Product::with('pelakuUsaha')
                ->orderBy('created_at', 'desc')
                ->get();
        } else {
            // Penjual hanya lihat produk miliknya
            // PENTING: Filter menggunakan id_pelaku_usaha, bukan id user
            $products = Product::with('pelakuUsaha')
                ->where('id_pelaku_usaha', $user->id)
                ->orderBy('created_at', 'desc')
                ->get();
        }
        
        $pelakuUsaha = PelakuUsaha::all();
        return view('admin.products', compact('products', 'pelakuUsaha'));
    }

    public function create()
    {
        $pelakuUsaha = PelakuUsaha::all();
        return view('admin.products', compact('pelakuUsaha'));
    }

    public function store(Request $request)
    {
        Log::info('Store method dipanggil');
        Log::info('Data request:', $request->all());

        $validated = $request->validate([
            'id_pelaku_usaha' => 'required|string|max:100',
            'nama_produk' => 'required|string|max:100',
            'harga' => 'required|numeric|min:0',
            'kategori' => 'required|string|max:50',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            Log::info('Mencoba membuat produk...');

            $productData = [
                'id_pelaku_usaha' => $validated['id_pelaku_usaha'],
                'nama_produk' => $validated['nama_produk'],
                'harga' => $validated['harga'],
                'kategori' => $validated['kategori'],
                'deskripsi' => $validated['deskripsi'] ?? '',
                'status' => 'tersedia'
            ];

            // Handle upload gambar
            if ($request->hasFile('gambar')) {
                $file = $request->file('gambar');
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('products', $filename, 'public');
                $productData['gambar'] = $path;
            }

            $product = Product::create($productData);

            Log::info('Produk berhasil dibuat:', $product->toArray());

            return redirect()->route('products.index')
                ->with('success', 'Produk berhasil ditambahkan!');

        } catch (\Exception $e) {
            Log::error('Error membuat produk: ' . $e->getMessage());
            
            return redirect()->route('products.index')
                ->with('error', 'Gagal menambahkan produk: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        $product = Product::with('pelakuUsaha')->findOrFail($id);
        return view('admin.products-show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        
        // PENTING: Cek otorisasi - penjual hanya bisa edit produk miliknya
        $user = Auth::user();
        if ($user->hak_akses != 1 && $product->id_pelaku_usaha != $user->id) {
            abort(403, 'Unauthorized action.');
        }
        
        $pelakuUsaha = PelakuUsaha::all();
        return view('admin.products-edit', compact('product', 'pelakuUsaha'));
    }

    public function update(Request $request, $id)
    {
        Log::info('Update method dipanggil untuk ID: ' . $id);
        Log::info('Data request:', $request->all());

        $product = Product::findOrFail($id);
        
        // PENTING: Cek otorisasi
        $user = Auth::user();
        if ($user->hak_akses != 1 && $product->id_pelaku_usaha != $user->id) {
            abort(403, 'Unauthorized action.');
        }

        $validated = $request->validate([
            'id_pelaku_usaha' => 'required|string|max:100',
            'nama_produk' => 'required|string|max:100',
            'harga' => 'required|numeric|min:0',
            'kategori' => 'required|string|max:50',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            // Handle upload gambar baru
            if ($request->hasFile('gambar')) {
                // Hapus gambar lama jika ada
                if ($product->gambar && Storage::disk('public')->exists($product->gambar)) {
                    Storage::disk('public')->delete($product->gambar);
                }

                $file = $request->file('gambar');
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('products', $filename, 'public');
                $validated['gambar'] = $path;
            }

            $product->update($validated);

            Log::info('Produk berhasil diupdate');

            return redirect()->route('products.index')
                ->with('success', 'Produk berhasil diperbarui!');

        } catch (\Exception $e) {
            Log::error('Error update produk: ' . $e->getMessage());
            
            return redirect()->route('products.index')
                ->with('error', 'Gagal memperbarui produk: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        Log::info('Delete method dipanggil untuk ID: ' . $id);

        $product = Product::findOrFail($id);
        
        // PENTING: Cek otorisasi
        $user = Auth::user();
        if ($user->hak_akses != 1 && $product->id_pelaku_usaha != $user->id) {
            abort(403, 'Unauthorized action.');
        }

        try {
            // Hapus gambar jika ada
            if ($product->gambar && Storage::disk('public')->exists($product->gambar)) {
                Storage::disk('public')->delete($product->gambar);
            }
            
            $product->delete();

            Log::info('Produk berhasil dihapus');

            return redirect()->route('products.index')
                ->with('success', 'Produk berhasil dihapus!');

        } catch (\Exception $e) {
            Log::error('Error hapus produk: ' . $e->getMessage());
            
            return redirect()->route('products.index')
                ->with('error', 'Gagal menghapus produk: ' . $e->getMessage());
        }
    }
}