<?php

namespace App\Http\Controllers;

use App\Models\Promosi;
use App\Models\PelakuUsaha;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PromosiController extends Controller
{
    public function index()
    {
        $promos = Promosi::with(['pelakuUsaha', 'admin'])->get();
        $pelakuUsaha = PelakuUsaha::all();
        $admins = Admin::all();
        
        return view('admin.promosi-admin', compact('promos', 'pelakuUsaha', 'admins'));
    }

    public function create()
    {
        $pelakuUsaha = PelakuUsaha::all();
        $admins = Admin::all();
        
        // Kirim ke view yang sama dengan mode create
        $promos = Promosi::with(['pelakuUsaha', 'admin'])->get();
        return view('admin.promosi-admin', compact('promos', 'pelakuUsaha', 'admins'));
    }

    public function store(Request $request)
    {
        Log::info('Store method dipanggil untuk Promosi');
        Log::info('Data request:', $request->all());

        // PERBAIKAN 1: Ubah validasi tipe data id_pelaku_usaha
        $validated = $request->validate([
            'id_pelaku_usaha' => 'required|exists:pelaku_usaha,id_pelaku_usaha',
            'judul_promosi' => 'required|string|max:100',
            'deskripsi_promosi' => 'required|string',
            'id_admin' => 'nullable|exists:admin,id_admin',
        ], [
            // PERBAIKAN 2: Tambahkan pesan error custom
            'id_pelaku_usaha.required' => 'Pilih pelaku usaha terlebih dahulu.',
            'id_pelaku_usaha.exists' => 'Pelaku usaha yang dipilih tidak valid.',
            'judul_promosi.required' => 'Judul promosi harus diisi.',
            'deskripsi_promosi.required' => 'Deskripsi promosi harus diisi.',
        ]);

        try {
            Log::info('Mencoba membuat promosi...');

            // PERBAIKAN 3: Pastikan id_admin null jika kosong
            $promosiData = [
                'id_pelaku_usaha' => $validated['id_pelaku_usaha'],
                'judul_promosi' => $validated['judul_promosi'],
                'deskripsi_promosi' => $validated['deskripsi_promosi'],
                'id_admin' => $validated['id_admin'] ?? null,
            ];

            $promosi = Promosi::create($promosiData);

            Log::info('Promosi berhasil dibuat:', $promosi->toArray());

            return redirect()->route('promosi-admin.index')
                ->with('success', 'Promosi berhasil ditambahkan!');

        } catch (\Exception $e) {
            Log::error('Error membuat promosi: ' . $e->getMessage());
            Log::error('Error trace: ' . $e->getTraceAsString());
            
            return redirect()->route('promosi-admin.index')
                ->with('error', 'Gagal menambahkan promosi: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        // Tetap kosong karena tidak digunakan
        return response()->json(['message' => 'Method not used'], 404);
    }

    public function edit($id)
    {
        $promosi = Promosi::findOrFail($id);
        $pelakuUsaha = PelakuUsaha::all();
        $admins = Admin::all();
        
        // Kirim semua data ke view
        $promos = Promosi::with(['pelakuUsaha', 'admin'])->get();
        return view('admin.promosi-admin', compact('promos', 'promosi', 'pelakuUsaha', 'admins'));
    }

    public function update(Request $request, $id)
    {
        Log::info('Update method dipanggil untuk Promosi ID: ' . $id);
        Log::info('Data request:', $request->all());

        $promosi = Promosi::findOrFail($id);

        // PERBAIKAN: Sama seperti store
        $validated = $request->validate([
            'id_pelaku_usaha' => 'required|exists:pelaku_usaha,id_pelaku_usaha',
            'judul_promosi' => 'required|string|max:100',
            'deskripsi_promosi' => 'required|string',
            'id_admin' => 'nullable|exists:admin,id_admin',
        ], [
            'id_pelaku_usaha.required' => 'Pilih pelaku usaha terlebih dahulu.',
            'id_pelaku_usaha.exists' => 'Pelaku usaha yang dipilih tidak valid.',
            'judul_promosi.required' => 'Judul promosi harus diisi.',
            'deskripsi_promosi.required' => 'Deskripsi promosi harus diisi.',
        ]);

        try {
            $updateData = [
                'id_pelaku_usaha' => $validated['id_pelaku_usaha'],
                'judul_promosi' => $validated['judul_promosi'],
                'deskripsi_promosi' => $validated['deskripsi_promosi'],
                'id_admin' => $validated['id_admin'] ?? null,
            ];

            $promosi->update($updateData);

            Log::info('Promosi berhasil diupdate');

            return redirect()->route('promosi-admin.index')
                ->with('success', 'Promosi berhasil diperbarui!');

        } catch (\Exception $e) {
            Log::error('Error update promosi: ' . $e->getMessage());
            Log::error('Error trace: ' . $e->getTraceAsString());
            
            return redirect()->route('promosi-admin.index')
                ->with('error', 'Gagal memperbarui promosi: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        Log::info('Delete method dipanggil untuk Promosi ID: ' . $id);

        try {
            $promosi = Promosi::findOrFail($id);
            $promosi->delete();

            Log::info('Promosi berhasil dihapus');

            return redirect()->route('promosi-admin.index')
                ->with('success', 'Promosi berhasil dihapus!');

        } catch (\Exception $e) {
            Log::error('Error hapus promosi: ' . $e->getMessage());
            Log::error('Error trace: ' . $e->getTraceAsString());
            
            return redirect()->route('promosi-admin.index')
                ->with('error', 'Gagal menghapus promosi: ' . $e->getMessage());
        }
    }
}