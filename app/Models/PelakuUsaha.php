<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; // ← JIKA BUTUH AUTH

class PelakuUsaha extends Authenticatable // ← atau extends Model
{
    use HasFactory;

    protected $table = 'pelaku_usaha';
    protected $primaryKey = 'id_pelaku_usaha'; // ← TENTUKAN PRIMARY KEY
    public $incrementing = true;
    public $timestamps = true;
    
    protected $fillable = [
        'nama_usaha',
        'nama_pemilik',
        'email',
        'password',
        'no_hp',
        'deskripsi_usaha',
        'hak_akses'
    ];
    
    protected $hidden = [
        'password'
    ];
}