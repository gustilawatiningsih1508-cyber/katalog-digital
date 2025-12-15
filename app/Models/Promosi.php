<?php
// app/Models/Promosi.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promosi extends Model
{
    use HasFactory;

    protected $table = 'promosi';
    protected $primaryKey = 'id_promosi';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'id_pelaku_usaha',
        'judul_promosi',
        'deskripsi_promosi',
        'id_admin',
        'gambar'
    ];

    // Relasi ke pelaku usaha
    public function pelakuUsaha()
    {
        return $this->belongsTo(PelakuUsaha::class, 'id_pelaku_usaha', 'id_pelaku_usaha');
    }

    // Relasi ke admin
    public function admin()
    {
        return $this->belongsTo(User::class, 'id_admin', 'id');
    }
}