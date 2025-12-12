<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckHakAkses
{
    public function handle(Request $request, Closure $next, ...$hakAkses)
    {
        $user = Auth::user();
        
        if (!$user) {
            return redirect()->route('signIn')->with('error', 'Silakan login terlebih dahulu.');
        }
        
        if (!in_array($user->hak_akses, $hakAkses)) {
            abort(403, 'Akses ditolak. Anda tidak memiliki izin untuk mengakses halaman ini.');
        }
        
        return $next($request);
    }
}