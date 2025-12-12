<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = [
        'username',
        'email',
        'password',
        'hak_akses',
        'laporan_aktifitas',
        'waktu_aktivitas',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'waktu_aktivitas' => 'datetime',
            'hak_akses' => 'integer',
        ];
    }

    // Scope untuk search
    public function scopeSearch($query, $term)
    {
        return $query->where('username', 'LIKE', '%' . $term . '%')
            ->orWhere('email', 'LIKE', '%' . $term . '%');
    }

    // Mutator untuk mengupdate waktu aktivitas
    public function updateLastActivity()
    {
        $this->update(['waktu_aktivitas' => now()]);
    }
}