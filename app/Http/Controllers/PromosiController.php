<?php
// app/Http/Controllers/PromosiController.php

namespace App\Http\Controllers;

use App\Models\Promosi;
use App\Models\PelakuUsaha;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class PromosiController extends Controller
{
    // Method untuk menampilkan promosi di halaman publik
    public function publicPromosi()
    {
        $promos = Promosi::with(['pelakuUsaha', 'admin'])
            ->orderBy('created_at', 'desc')
            ->get();
        
        return view('user.promosi', compact('promos'));
    }

    // Method untuk admin/penjual - PENTING: Filter berdasarkan id_pelaku_usaha
    public function index()
    {
        try {
            $user = auth()->user();
            
            if ($user->hak_akses == 1) {
                // Admin bisa lihat semua promosi
                $promos = Promosi::with(['pelakuUsaha', 'admin'])
                    ->orderBy('created_at', 'desc')
                    ->get();
            } else {
                // Penjual hanya lihat promosinya sendiri
                // PENTING: Filter menggunakan id_pelaku_usaha, bukan id user
                $promos = Promosi::with(['pelakuUsaha', 'admin'])
                    ->where('id_pelaku_usaha', $user->id)
                    ->orderBy('created_at', 'desc')
                    ->get();
            }
            
            $pelakuUsaha = PelakuUsaha::all();
            $admins = User::where('hak_akses', 1)->get();

            return view('admin.promosi-admin', compact('promos', 'pelakuUsaha', 'admins'));
        } catch (\Exception $e) {
            Log::error('Error di index promosi: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function create()
    {
        $pelakuUsaha = PelakuUsaha::all();
        $admins = User::where('hak_akses', 1)->get();
        return view('admin.promosi-create', compact('pelakuUsaha', 'admins'));
    }

    public function store(Request $request)
    {
        Log::info('Store method dipanggil untuk Promosi');
        Log::info('Data request:', $request->all());

        $validated = $request->validate([
            'id_pelaku_usaha' => 'required|exists:pelaku_usaha,id_pelaku_usaha',
            'judul_promosi' => 'required|string|max:100',
            'deskripsi_promosi' => 'required|string',
            'id_admin' => 'nullable|exists:users,id',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'id_pelaku_usaha.required' => 'Pilih pelaku usaha terlebih dahulu.',
            'id_pelaku_usaha.exists' => 'Pelaku usaha yang dipilih tidak valid.',
            'judul_promosi.required' => 'Judul promosi harus diisi.',
            'deskripsi_promosi.required' => 'Deskripsi promosi harus diisi.',
            'id_admin.exists' => 'Admin yang dipilih tidak valid.',
        ]);

        try {
            $promosiData = [
                'id_pelaku_usaha' => $validated['id_pelaku_usaha'],
                'judul_promosi' => $validated['judul_promosi'],
                'deskripsi_promosi' => $validated['deskripsi_promosi'],
                'id_admin' => $validated['id_admin'] ?? auth()->id(),
            ];

            // Handle upload gambar
            if ($request->hasFile('gambar')) {
                $file = $request->file('gambar');
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('promosi', $filename, 'public');
                $promosiData['gambar'] = $path;
            }

            Promosi::create($promosiData);

            Log::info('Promosi berhasil dibuat');

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
        try {
            $promosi = Promosi::with(['pelakuUsaha', 'admin'])->findOrFail($id);
            return response()->json($promosi);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Promosi tidak ditemukan'], 404);
        }
    }

    public function edit($id)
    {
        try {
            $promosi = Promosi::findOrFail($id);
            
            // PENTING: Cek otorisasi - penjual hanya bisa edit promosi miliknya
            $user = Auth::user();
            if ($user->hak_akses != 1 && $promosi->id_pelaku_usaha != $user->id) {
                abort(403, 'Unauthorized action.');
            }

            $pelakuUsaha = PelakuUsaha::all();
            $admins = User::where('hak_akses', 1)->get();

            return view('admin.promosi-edit', compact('promosi', 'pelakuUsaha', 'admins'));
        } catch (\Exception $e) {
            return redirect()->route('promosi-admin.index')
                ->with('error', 'Promosi tidak ditemukan');
        }
    }

    public function update(Request $request, $id)
    {
        Log::info('Update method dipanggil untuk Promosi ID: ' . $id);
        Log::info('Data request:', $request->all());

        try {
            $promosi = Promosi::findOrFail($id);
            
            // PENTING: Cek otorisasi
            $user = Auth::user();
            if ($user->hak_akses != 1 && $promosi->id_pelaku_usaha != $user->id) {
                abort(403, 'Unauthorized action.');
            }
        } catch (\Exception $e) {
            return redirect()->route('promosi-admin.index')
                ->with('error', 'Promosi tidak ditemukan');
        }

        $validated = $request->validate([
            'id_pelaku_usaha' => 'required|exists:pelaku_usaha,id_pelaku_usaha',
            'judul_promosi' => 'required|string|max:100',
            'deskripsi_promosi' => 'required|string',
            'id_admin' => 'nullable|exists:users,id',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'id_pelaku_usaha.required' => 'Pilih pelaku usaha terlebih dahulu.',
            'id_pelaku_usaha.exists' => 'Pelaku usaha yang dipilih tidak valid.',
            'judul_promosi.required' => 'Judul promosi harus diisi.',
            'deskripsi_promosi.required' => 'Deskripsi promosi harus diisi.',
            'id_admin.exists' => 'Admin yang dipilih tidak valid.',
        ]);

        try {
            $updateData = [
                'id_pelaku_usaha' => $validated['id_pelaku_usaha'],
                'judul_promosi' => $validated['judul_promosi'],
                'deskripsi_promosi' => $validated['deskripsi_promosi'],
                'id_admin' => $validated['id_admin'] ?? $promosi->id_admin,
            ];

            // Handle upload gambar baru
            if ($request->hasFile('gambar')) {
                // Hapus gambar lama jika ada
                if ($promosi->gambar && Storage::disk('public')->exists($promosi->gambar)) {
                    Storage::disk('public')->delete($promosi->gambar);
                }

                $file = $request->file('gambar');
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('promosi', $filename, 'public');
                $updateData['gambar'] = $path;
            }

            $promosi->update($updateData);

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
            
            // PENTING: Cek otorisasi
            $user = Auth::user();
            if ($user->hak_akses != 1 && $promosi->id_pelaku_usaha != $user->id) {
                abort(403, 'Unauthorized action.');
            }
            
            // Hapus gambar jika ada
            if ($promosi->gambar && Storage::disk('public')->exists($promosi->gambar)) {
                Storage::disk('public')->delete($promosi->gambar);
            }
            
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