<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelakuUsaha extends Model
{
    use HasFactory;

    protected $table = 'pelaku_usaha';
    protected $primaryKey = 'id_pelaku_usaha';
    public $timestamps = false;

    protected $fillable = [
        'nama_usaha',
        'nama_pemilik', 
        'email',
        'password',
        'no_hp',
        'deskripsi_usaha',
        'hak_akses'
    ];

    public function promosi()
    {
        return $this->hasMany(Promosi::class, 'id_pelaku_usaha');
    }
}