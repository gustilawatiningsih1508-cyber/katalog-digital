<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // PERBAIKAN: Gunakan firstOrCreate untuk menghindari duplikasi
        User::firstOrCreate(
            ['email' => 'test@example.com'], // Cek berdasarkan email
            [
                'username' => 'Test User',
                'password' => Hash::make('password'), // Tambahkan password
                'email_verified_at' => now(), // Tambahkan email_verified_at
            ]
        );

        // Tambahkan seeder untuk pelaku usaha
        $this->call([
            PelakuUsahaSeeder::class,
        ]);
    }
}