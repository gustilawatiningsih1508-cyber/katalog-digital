<?php
// app/Models/Product.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id_produk';
    public $timestamps = true;

    protected $fillable = [
        'id_pelaku_usaha',
        'nama_produk',
        'harga',
        'kategori',
        'deskripsi',
        'status',
        'gambar'
    ];

    // Relasi ke Pelaku Usaha
    public function pelakuUsaha()
    {
        return $this->belongsTo(PelakuUsaha::class, 'id_pelaku_usaha', 'id_pelaku_usaha');
    }
}