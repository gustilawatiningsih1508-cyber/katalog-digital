<?php

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
        'status'
    ];
}