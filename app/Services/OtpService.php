<?php

namespace App\Services;

use App\Models\OtpVerification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class OtpService
{
    /**
     * Generate dan kirim OTP ke email
     */
    public function sendOtp($email, $type = 'register')
    {
        try {
            // Hapus OTP lama yang belum terverifikasi
            OtpVerification::deleteOldOtpForEmail($email, $type);

            // Generate OTP baru
            $otp = OtpVerification::generateOTP();

            // Simpan ke database
            $otpRecord = OtpVerification::create([
                'email' => $email,
                'otp' => $otp,
                'type' => $type,
                'expires_at' => Carbon::now()->addMinutes(10), // Valid 10 menit
                'is_verified' => false
            ]);

            // Kirim email OTP
            $this->sendOtpEmail($email, $otp, $type);

            Log::info('OTP sent successfully', [
                'email' => $email,
                'type' => $type,
                'expires_at' => $otpRecord->expires_at
            ]);

            return [
                'success' => true,
                'message' => 'Kode OTP telah dikirim ke email Anda',
                'expires_at' => $otpRecord->expires_at
            ];

        } catch (\Exception $e) {
            Log::error('Failed to send OTP', [
                'email' => $email,
                'error' => $e->getMessage()
            ]);

            return [
                'success' => false,
                'message' => 'Gagal mengirim OTP: ' . $e->getMessage()
            ];
        }
    }

    /**
     * Verifikasi OTP
     */
    public function verifyOtp($email, $otp, $type = 'register')
    {
        // Cari OTP yang valid
        $otpRecord = OtpVerification::where('email', $email)
            ->where('otp', $otp)
            ->where('type', $type)
            ->where('is_verified', false)
            ->where('expires_at', '>', now())
            ->first();

        if (!$otpRecord) {
            return [
                'success' => false,
                'message' => 'Kode OTP tidak valid atau sudah kadaluarsa'
            ];
        }

        // Tandai sebagai terverifikasi
        $otpRecord->markAsVerified();

        Log::info('OTP verified successfully', [
            'email' => $email,
            'type' => $type
        ]);

        return [
            'success' => true,
            'message' => 'Kode OTP berhasil diverifikasi'
        ];
    }

    /**
     * Kirim email OTP
     */
    private function sendOtpEmail($email, $otp, $type)
    {
        $subject = $this->getEmailSubject($type);
        $message = $this->getEmailMessage($otp, $type);

        // Kirim email menggunakan Mail facade
        Mail::send([], [], function ($mail) use ($email, $subject, $message) {
            $mail->to($email)
                ->subject($subject)
                ->html($message);
        });
    }

    /**
     * Get email subject based on type
     */
    private function getEmailSubject($type)
    {
        return match($type) {
            'register' => 'Kode Verifikasi Registrasi - LapakGo',
            'login' => 'Kode Verifikasi Login - LapakGo',
            'reset_password' => 'Kode Reset Password - LapakGo',
            default => 'Kode Verifikasi - LapakGo'
        };
    }

    /**
     * Get email message template
     */
    private function getEmailMessage($otp, $type)
    {
        $typeText = match($type) {
            'register' => 'registrasi akun',
            'login' => 'login',
            'reset_password' => 'reset password',
            default => 'verifikasi'
        };

        return "
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset='utf-8'>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%); color: white; padding: 30px; text-align: center; border-radius: 10px 10px 0 0; }
                .content { background: #f8f9fa; padding: 30px; border-radius: 0 0 10px 10px; }
                .otp-box { background: white; border: 2px dashed #0ea5e9; padding: 20px; text-align: center; margin: 20px 0; border-radius: 10px; }
                .otp-code { font-size: 32px; font-weight: bold; color: #0ea5e9; letter-spacing: 5px; }
                .warning { background: #fff3cd; border-left: 4px solid #ffc107; padding: 15px; margin: 20px 0; }
                .footer { text-align: center; margin-top: 20px; color: #666; font-size: 12px; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h1>LapakGo</h1>
                    <p>Verifikasi Akun Anda</p>
                </div>
                <div class='content'>
                    <h2>Halo!</h2>
                    <p>Kami menerima permintaan untuk {$typeText} di LapakGo. Gunakan kode OTP di bawah ini:</p>
                    
                    <div class='otp-box'>
                        <p style='margin: 0; font-size: 14px; color: #666;'>Kode Verifikasi Anda</p>
                        <div class='otp-code'>{$otp}</div>
                        <p style='margin: 10px 0 0 0; font-size: 12px; color: #999;'>Kode ini berlaku selama 10 menit</p>
                    </div>
                    
                    <div class='warning'>
                        <strong>⚠️ Perhatian:</strong> Jangan bagikan kode ini kepada siapapun, termasuk tim LapakGo. Kami tidak akan pernah meminta kode OTP Anda.
                    </div>
                    
                    <p>Jika Anda tidak melakukan permintaan ini, abaikan email ini atau hubungi kami jika Anda khawatir tentang keamanan akun Anda.</p>
                    
                    <div class='footer'>
                        <p>&copy; 2024 LapakGo. Semua hak dilindungi.</p>
                        <p>Email otomatis, mohon tidak membalas email ini.</p>
                    </div>
                </div>
            </div>
        </body>
        </html>
        ";
    }

    /**
     * Resend OTP
     */
    public function resendOtp($email, $type = 'register')
    {
        // Cek apakah ada OTP yang baru saja dikirim (cooldown 1 menit)
        $recentOtp = OtpVerification::where('email', $email)
            ->where('type', $type)
            ->where('created_at', '>', Carbon::now()->subMinute())
            ->first();

        if ($recentOtp) {
            $waitTime = 60 - Carbon::now()->diffInSeconds($recentOtp->created_at);
            return [
                'success' => false,
                'message' => "Mohon tunggu {$waitTime} detik sebelum mengirim ulang OTP"
            ];
        }

        return $this->sendOtp($email, $type);
    }
}