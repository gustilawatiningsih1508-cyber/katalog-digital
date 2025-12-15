<?php
// app/Http/Controllers/ProfileController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{
    /**
     * Display user profile
     */
    public function show()
    {
        $user = Auth::user();
        return view('profile.show', compact('user'));
    }

    /**
     * Show edit profile form
     */
    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    /**
     * Update profile information
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:500',
            'birth_date' => 'nullable|date|before:today',
            'gender' => 'nullable|in:male,female',
            'bio' => 'nullable|string|max:500',
        ], [
            'username.required' => 'Username wajib diisi',
            'username.unique' => 'Username sudah digunakan',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'birth_date.before' => 'Tanggal lahir harus sebelum hari ini',
        ]);

        try {
            $user->update($validated);

            Log::info('Profile updated successfully', ['user_id' => $user->id]);

            return redirect()->route('profile.show')
                ->with('success', 'Profile berhasil diperbarui!');

        } catch (\Exception $e) {
            Log::error('Profile update failed: ' . $e->getMessage());
            
            return back()
                ->withErrors(['error' => 'Gagal memperbarui profile'])
                ->withInput();
        }
    }

    /**
     * Update avatar
     */
    public function updateAvatar(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'avatar.required' => 'Pilih foto terlebih dahulu',
            'avatar.image' => 'File harus berupa gambar',
            'avatar.mimes' => 'Format gambar: jpeg, png, jpg, atau gif',
            'avatar.max' => 'Ukuran gambar maksimal 2MB',
        ]);

        try {
            // Hapus avatar lama jika ada dan bukan dari Google
            if ($user->avatar && !filter_var($user->avatar, FILTER_VALIDATE_URL)) {
                Storage::disk('public')->delete($user->avatar);
            }

            // Upload avatar baru
            $file = $request->file('avatar');
            $filename = 'avatar_' . $user->id . '_' . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('avatars', $filename, 'public');

            $user->avatar = $path;
            $user->save();

            Log::info('Avatar updated successfully', ['user_id' => $user->id]);

            return back()->with('success', 'Foto profile berhasil diperbarui!');

        } catch (\Exception $e) {
            Log::error('Avatar update failed: ' . $e->getMessage());
            
            return back()->withErrors(['error' => 'Gagal mengupload foto']);
        }
    }

    /**
     * Show change password form
     */
    public function showChangePassword()
    {
        return view('profile.change-password');
    }

    /**
     * Change password
     */
    public function changePassword(Request $request)
    {
        $user = Auth::user();

        // Skip validation password lama jika user login dengan Google dan belum set password
        if ($user->password) {
            $request->validate([
                'current_password' => 'required',
                'new_password' => 'required|min:6|confirmed',
            ], [
                'current_password.required' => 'Password lama wajib diisi',
                'new_password.required' => 'Password baru wajib diisi',
                'new_password.min' => 'Password baru minimal 6 karakter',
                'new_password.confirmed' => 'Konfirmasi password tidak cocok',
            ]);

            // Cek password lama
            if (!Hash::check($request->current_password, $user->password)) {
                return back()->withErrors(['current_password' => 'Password lama tidak sesuai']);
            }
        } else {
            // Jika user dari Google dan belum set password, hanya validate password baru
            $request->validate([
                'new_password' => 'required|min:6|confirmed',
            ], [
                'new_password.required' => 'Password baru wajib diisi',
                'new_password.min' => 'Password baru minimal 6 karakter',
                'new_password.confirmed' => 'Konfirmasi password tidak cocok',
            ]);
        }

        try {
            $user->password = Hash::make($request->new_password);
            $user->save();

            Log::info('Password changed successfully', ['user_id' => $user->id]);

            return redirect()->route('profile.show')
                ->with('success', 'Password berhasil diubah!');

        } catch (\Exception $e) {
            Log::error('Password change failed: ' . $e->getMessage());
            
            return back()->withErrors(['error' => 'Gagal mengubah password']);
        }
    }

    /**
     * Delete avatar
     */
    public function deleteAvatar()
    {
        $user = Auth::user();

        try {
            // Hapus avatar jika ada dan bukan dari Google
            if ($user->avatar && !filter_var($user->avatar, FILTER_VALIDATE_URL)) {
                Storage::disk('public')->delete($user->avatar);
            }

            $user->avatar = null;
            $user->save();

            Log::info('Avatar deleted successfully', ['user_id' => $user->id]);

            return back()->with('success', 'Foto profile berhasil dihapus!');

        } catch (\Exception $e) {
            Log::error('Avatar delete failed: ' . $e->getMessage());
            
            return back()->withErrors(['error' => 'Gagal menghapus foto']);
        }
    }
}