<?php
// app/Models/User.php

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
        'google_id',
        'avatar',
        'phone',
        'address',
        'birth_date',
        'gender',
        'bio',
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
            'birth_date' => 'date',
            'hak_akses' => 'integer',
        ];
    }

    public function isAdmin()
    {
        return $this->hak_akses === 1;
    }

    public function isPenjual()
    {
        return $this->hak_akses === 2;
    }

    public function getAvatarUrlAttribute()
    {
        if ($this->avatar) {
            // Jika avatar dari Google (URL lengkap)
            if (filter_var($this->avatar, FILTER_VALIDATE_URL)) {
                return $this->avatar;
            }
            // Jika avatar dari storage
            return asset('storage/' . $this->avatar);
        }
        // Default avatar
        return asset('assets/admin/images/default-avatar.png');
    }

    public function getAgeAttribute()
    {
        if ($this->birth_date) {
            return $this->birth_date->age;
        }
        return null;
    }
}