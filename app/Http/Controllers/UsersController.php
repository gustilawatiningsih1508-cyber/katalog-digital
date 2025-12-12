<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    // Menampilkan daftar semua users
    public function index()
    {
        $users = User::orderBy('id', 'desc')->get();
        return view('admin.users', compact('users')); // Perhatikan: 'admin.users' bukan 'admin.users.index'
    }

    // Menampilkan form create
    public function create()
    {
        return view('admin.users.create');
    }

    // Menyimpan user baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|unique:users|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8|confirmed',
            'hak_akses' => 'required|in:1,2',
            'laporan_aktifitas' => 'nullable|string',
        ]);

        $validated['password'] = Hash::make($validated['password']);
        $validated['waktu_aktivitas'] = now();

        User::create($validated);

        return redirect()->route('users.index')
            ->with('success', 'User berhasil ditambahkan');
    }

    // Menampilkan form edit
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    // Mengupdate user
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'hak_akses' => 'required|in:1,2',
            'laporan_aktifitas' => 'nullable|string',
        ]);

        if ($request->filled('password')) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        $validated['waktu_aktivitas'] = now();

        $user->update($validated);

        return redirect()->route('users.index')
            ->with('success', 'User berhasil diperbarui');
    }

    // Menghapus user
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')
            ->with('success', 'User berhasil dihapus');
    }

    // Search users
    public function search(Request $request)
    {
        $term = $request->input('search');
        
        // Gunakan query builder untuk search
        $users = User::where('username', 'like', '%' . $term . '%')
                    ->orWhere('email', 'like', '%' . $term . '%')
                    ->orWhere('laporan_aktifitas', 'like', '%' . $term . '%')
                    ->orderBy('id', 'desc')
                    ->get();

        return view('admin.users', compact('users')); // Sama: 'admin.users'
    }
}