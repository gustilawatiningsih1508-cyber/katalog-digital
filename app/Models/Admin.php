<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'id_admin';
    public $timestamps = false;

    protected $fillable = [
        'username',
        'email',
        'password',
        'hak_akses',
        'laporan_aktifitas',
        'waktu_aktivitas'
    ];

    public function kategoriProduk()
    {
        return $this->hasMany(KategoriProduk::class, 'id_admin');
    }

    public function promosi()
    {
        return $this->hasMany(Promosi::class, 'id_admin');
    }
}
