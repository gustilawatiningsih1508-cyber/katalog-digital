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
        return view('admin.promosi-admin', compact('pelakuUsaha', 'admins'));
    }

    public function store(Request $request)
    {
        Log::info('Store method dipanggil untuk Promosi');
        Log::info('Data request:', $request->all());

        $validated = $request->validate([
            'id_pelaku_usaha' => 'required|integer|exists:pelaku_usaha,id_pelaku_usaha',
            'judul_promosi' => 'required|string|max:100',
            'deskripsi_promosi' => 'required|string',
            'id_admin' => 'nullable|integer|exists:admin,id_admin',
        ]);

        try {
            Log::info('Mencoba membuat promosi...');

            $promosi = Promosi::create([
                'id_pelaku_usaha' => $validated['id_pelaku_usaha'],
                'judul_promosi' => $validated['judul_promosi'],
                'deskripsi_promosi' => $validated['deskripsi_promosi'],
                'id_admin' => $validated['id_admin'] ?? null,
            ]);

            Log::info('Promosi berhasil dibuat:', $promosi->toArray());

            return redirect()->route('promosi-admin.index')
                ->with('success', 'Promosi berhasil ditambahkan!');

        } catch (\Exception $e) {
            Log::error('Error membuat promosi: ' . $e->getMessage());
            
            return redirect()->route('promosi-admin.index')
                ->with('error', 'Gagal menambahkan promosi: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        // Tidak digunakan untuk sekarang
    }

    public function edit($id)
    {
        $promosi = Promosi::findOrFail($id);
        $pelakuUsaha = PelakuUsaha::all();
        $admins = Admin::all();
        
        // Kembalikan ke view yang sama, tapi dengan data $promosi untuk edit
        $promos = Promosi::with(['pelakuUsaha', 'admin'])->get();
        return view('admin.promosi-admin', compact('promos', 'promosi', 'pelakuUsaha', 'admins'));
    }

    public function update(Request $request, $id)
    {
        Log::info('Update method dipanggil untuk Promosi ID: ' . $id);
        Log::info('Data request:', $request->all());

        $promosi = Promosi::findOrFail($id);

        $validated = $request->validate([
            'id_pelaku_usaha' => 'required|integer|exists:pelaku_usaha,id_pelaku_usaha',
            'judul_promosi' => 'required|string|max:100',
            'deskripsi_promosi' => 'required|string',
            'id_admin' => 'nullable|integer|exists:admin,id_admin',
        ]);

        try {
            $promosi->update([
                'id_pelaku_usaha' => $validated['id_pelaku_usaha'],
                'judul_promosi' => $validated['judul_promosi'],
                'deskripsi_promosi' => $validated['deskripsi_promosi'],
                'id_admin' => $validated['id_admin'] ?? null,
            ]);

            Log::info('Promosi berhasil diupdate');

            return redirect()->route('promosi-admin.index')
                ->with('success', 'Promosi berhasil diperbarui!');

        } catch (\Exception $e) {
            Log::error('Error update promosi: ' . $e->getMessage());
            
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
            
            return redirect()->route('promosi-admin.index')
                ->with('error', 'Gagal menghapus promosi: ' . $e->getMessage());
        }
    }
}