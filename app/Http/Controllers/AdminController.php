<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        return view('admin.users', compact('admins'));
    }

    public function create()
    {
        return view('admin.users');
    }

    public function store(Request $request)
    {
        Log::info('Store method dipanggil untuk Admin');
        Log::info('Data request:', $request->all());

        $validated = $request->validate([
            'username' => 'required|string|max:100|unique:admin',
            'email' => 'required|email|max:100|unique:admin',
            'password' => 'required|string|min:6',
            'hak_akses' => 'required|integer',
            'laporan_aktifitas' => 'nullable|string|max:255',
        ]);

        try {
            Log::info('Mencoba membuat admin...');

            $admin = Admin::create([
                'username' => $validated['username'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'hak_akses' => $validated['hak_akses'],
                'laporan_aktifitas' => $validated['laporan_aktifitas'] ?? null,
                'waktu_aktivitas' => now(),
            ]);

            Log::info('Admin berhasil dibuat:', $admin->toArray());

            return redirect()->route('admins.index')
                ->with('success', 'Admin berhasil ditambahkan!');

        } catch (\Exception $e) {
            Log::error('Error membuat admin: ' . $e->getMessage());
            
            return redirect()->route('admins.index')
                ->with('error', 'Gagal menambahkan admin: ' . $e->getMessage());
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
        Log::info('Update method dipanggil untuk Admin ID: ' . $id);
        Log::info('Data request:', $request->all());

        $admin = Admin::findOrFail($id);

        $validated = $request->validate([
            'username' => 'required|string|max:100|unique:admin,username,' . $id . ',id_admin',
            'email' => 'required|email|max:100|unique:admin,email,' . $id . ',id_admin',
            'hak_akses' => 'required|integer',
            'laporan_aktifitas' => 'nullable|string|max:255',
        ]);

        try {
            $updateData = [
                'username' => $validated['username'],
                'email' => $validated['email'],
                'hak_akses' => $validated['hak_akses'],
                'laporan_aktifitas' => $validated['laporan_aktifitas'] ?? null,
                'waktu_aktivitas' => now(),
            ];

            // Jika password diisi, update password
            if ($request->filled('password')) {
                $updateData['password'] = Hash::make($request->password);
            }

            $admin->update($updateData);

            Log::info('Admin berhasil diupdate');

            return redirect()->route('admins.index')
                ->with('success', 'Admin berhasil diperbarui!');

        } catch (\Exception $e) {
            Log::error('Error update admin: ' . $e->getMessage());
            
            return redirect()->route('admins.index')
                ->with('error', 'Gagal memperbarui admin: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        Log::info('Delete method dipanggil untuk Admin ID: ' . $id);

        try {
            $admin = Admin::findOrFail($id);
            $admin->delete();

            Log::info('Admin berhasil dihapus');

            return redirect()->route('admins.index')
                ->with('success', 'Admin berhasil dihapus!');

        } catch (\Exception $e) {
            Log::error('Error hapus admin: ' . $e->getMessage());
            
            return redirect()->route('admins.index')
                ->with('error', 'Gagal menghapus admin: ' . $e->getMessage());
        }
    }
}