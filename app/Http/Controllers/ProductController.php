<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products', compact('products'));
    }

    public function create()
    {
        return view('admin.products');
    }

    public function store(Request $request)
    {
        // Debug data yang diterima
        Log::info('Store method dipanggil');
        Log::info('Data request:', $request->all());

        // Validasi
        $validated = $request->validate([
            'id_pelaku_usaha' => 'required|string|max:100',
            'nama_produk' => 'required|string|max:100',
            'harga' => 'required|numeric|min:0',
            'kategori' => 'required|string|max:50',
            'deskripsi' => 'nullable|string',
        ]);

        try {
            Log::info('Mencoba membuat produk...');

            // Create product
            $product = Product::create([
                'id_pelaku_usaha' => $validated['id_pelaku_usaha'],
                'nama_produk' => $validated['nama_produk'],
                'harga' => $validated['harga'],
                'kategori' => $validated['kategori'],
                'deskripsi' => $validated['deskripsi'] ?? '',
                'status' => 'tersedia'
            ]);

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
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        Log::info('Update method dipanggil untuk ID: ' . $id);
        Log::info('Data request:', $request->all());

        $validated = $request->validate([
            'id_pelaku_usaha' => 'required|string|max:100',
            'nama_produk' => 'required|string|max:100',
            'harga' => 'required|numeric|min:0',
            'kategori' => 'required|string|max:50',
            'deskripsi' => 'nullable|string',
        ]);

        try {
            $product = Product::findOrFail($id);
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

        try {
            $product = Product::findOrFail($id);
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