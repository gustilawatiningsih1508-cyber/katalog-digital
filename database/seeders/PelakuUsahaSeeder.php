<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PelakuUsahaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pelaku_usaha')->insert([
            [
                'nama_usaha' => 'Miloku',
                'nama_pemilik' => 'Pemilik Miloku',
                'email' => 'miloku@email.com',
                'password' => Hash::make('password123'),
                'no_hp' => '081234567891',
                'deskripsi_usaha' => 'Toko miloku menyediakan berbagai produk makanan dan minuman',
                'hak_akses' => 2
            ],
            [
                'nama_usaha' => 'Ngemil Yuk',
                'nama_pemilik' => 'Pemilik Ngemil Yuk',
                'email' => 'ngemilyuk@email.com',
                'password' => Hash::make('password123'),
                'no_hp' => '081234567892',
                'deskripsi_usaha' => 'Tempat ngemil yang menyenangkan dengan berbagai snack lezat',
                'hak_akses' => 2
            ],
            [
                'nama_usaha' => 'Warung Mangan Limo Putri',
                'nama_pemilik' => 'Pemilik Warung Mangan',
                'email' => 'warungmangan@email.com',
                'password' => Hash::make('password123'),
                'no_hp' => '081234567893',
                'deskripsi_usaha' => 'Warung makan dengan masakan rumahan yang nikmat',
                'hak_akses' => 2
            ]
        ]);
    }
}