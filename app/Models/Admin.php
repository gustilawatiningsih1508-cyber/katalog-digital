<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admin';
    protected $primaryKey = 'id_admin';
    public $timestamps = false; // Nonaktifkan timestamps

    protected $fillable = [
        'username',
        'email',
        'password',
        'hak_akses',
        'laporan_aktifitas',
        'waktu_aktivitas'
    ];

    protected $casts = [
        'waktu_aktivitas' => 'datetime'
    ];
}