<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckHakAkses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  mixed  ...$hakAkses
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$hakAkses)
    {
        // Cek apakah user sudah login
        if (!Auth::check()) {
            return redirect()->route('signIn')
                ->with('error', 'Silakan login terlebih dahulu.');
        }
        
        $user = Auth::user();
        
        // Convert string ke integer untuk perbandingan
        $allowedRoles = array_map('intval', $hakAkses);
        
        // Cek apakah user memiliki hak akses yang diizinkan
        if (!in_array((int)$user->hak_akses, $allowedRoles)) {
            abort(403, 'Anda tidak memiliki akses ke halaman ini.');
        }
        
        return $next($request);
    }
}