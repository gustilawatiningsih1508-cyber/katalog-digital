<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class OtpVerification extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'otp',
        'type',
        'is_verified',
        'expires_at'
    ];

    protected $casts = [
        'expires_at' => 'datetime',
        'is_verified' => 'boolean'
    ];

    /**
     * Generate OTP 6 digit
     */
    public static function generateOTP()
    {
        return str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
    }

    /**
     * Cek apakah OTP masih valid
     */
    public function isValid()
    {
        return !$this->is_verified && $this->expires_at->isFuture();
    }

    /**
     * Tandai OTP sebagai terverifikasi
     */
    public function markAsVerified()
    {
        $this->update(['is_verified' => true]);
    }

    /**
     * Hapus OTP yang sudah kadaluarsa
     */
    public static function deleteExpired()
    {
        return self::where('expires_at', '<', now())->delete();
    }

    /**
     * Hapus OTP lama untuk email tertentu
     */
    public static function deleteOldOtpForEmail($email, $type = 'register')
    {
        return self::where('email', $email)
            ->where('type', $type)
            ->delete();
    }
}