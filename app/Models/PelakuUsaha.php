<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PelakuUsaha extends Model
{
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

    public function kategoriProduk()
    {
        return $this->hasMany(KategoriProduk::class, 'id_pelaku_usaha');
    }

    public function promosi()
    {
        return $this->hasMany(Promosi::class, 'id_pelaku_usaha');
    }
}
