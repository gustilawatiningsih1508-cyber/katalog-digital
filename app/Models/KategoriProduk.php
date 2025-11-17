<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    protected $table = 'kategori_produk';
    protected $primaryKey = 'id_kategori';
    public $timestamps = false;

    protected $fillable = [
        'id_pelaku_usaha',
        'id_produk',
        'nama_produk',
        'id_admin',
        'harga',
        'deskripsi',
        'status',
        'kategori'
    ];

    public function pelakuUsaha()
    {
        return $this->belongsTo(PelakuUsaha::class, 'id_pelaku_usaha');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin');
    }
}
