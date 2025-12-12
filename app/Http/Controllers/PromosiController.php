<?php
// app/Http/Controllers/PromosiController.php
namespace App\Http\Controllers;

use App\Models\Promosi;
use App\Models\PelakuUsaha;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PromosiController extends Controller
{
    public function index()
    {
        try {
            $promos = Promosi::with(['pelakuUsaha', 'admin'])->get();
            $pelakuUsaha = PelakuUsaha::all();
            $admins = User::where('hak_akses', 1)->get(); // Ambil user dengan hak_akses = 1
            
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
            'id_admin' => 'nullable|exists:users,id', // Validasi ke tabel users
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
                'id_admin' => $validated['id_admin'] ?? auth()->id(), // Default ke user yang login
            ];

            Promosi::create($promosiData);

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
        } catch (\Exception $e) {
            return redirect()->route('promosi-admin.index')
                ->with('error', 'Promosi tidak ditemukan');
        }

        $validated = $request->validate([
            'id_pelaku_usaha' => 'required|exists:pelaku_usaha,id_pelaku_usaha',
            'judul_promosi' => 'required|string|max:100',
            'deskripsi_promosi' => 'required|string',
            'id_admin' => 'nullable|exists:users,id',
        ]);

        try {
            $promosi->update([
                'id_pelaku_usaha' => $validated['id_pelaku_usaha'],
                'judul_promosi' => $validated['judul_promosi'],
                'deskripsi_promosi' => $validated['deskripsi_promosi'],
                'id_admin' => $validated['id_admin'] ?? $promosi->id_admin,
            ]);

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

            return redirect()->route('promosi-admin.index')
                ->with('success', 'Promosi berhasil dihapus!');

        } catch (\Exception $e) {
            Log::error('Error hapus promosi: ' . $e->getMessage());
            
            return redirect()->route('promosi-admin.index')
                ->with('error', 'Gagal menghapus promosi: ' . $e->getMessage());
        }
    }
}