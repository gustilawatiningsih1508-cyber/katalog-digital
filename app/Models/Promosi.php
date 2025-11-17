<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promosi extends Model
{
    protected $table = 'promosi';
    protected $primaryKey = 'id_promosi';
    public $timestamps = false;

    protected $fillable = [
        'id_pelaku_usaha',
        'judul_promosi',
        'deskripsi_promosi',
        'id_admin'
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
