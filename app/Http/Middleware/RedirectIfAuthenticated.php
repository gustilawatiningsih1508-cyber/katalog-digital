<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     * 
     * Fungsi: Jika user sudah login, tidak boleh akses halaman login/register
     * Redirect otomatis ke dashboard
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        // Tentukan guard yang digunakan (default = web)
        $guards = empty($guards) ? [null] : $guards;

        // Loop untuk cek setiap guard
        foreach ($guards as $guard) {
            // Cek apakah user sudah authenticated
            if (Auth::guard($guard)->check()) {
                // Periksa apakah user sedang mencoba mengakses halaman login/register
                $currentRoute = $request->route()->getName();
                $authRoutes = ['signIn', 'login', 'register', 'signUp'];
                
                if (in_array($currentRoute, $authRoutes)) {
                    // Hanya redirect jika mencoba akses halaman auth
                    return redirect()->route('dashboard')
                        ->with('info', 'Anda sudah login sebelumnya');
                }
            }
        }

        // Jika belum login atau bukan akses ke halaman auth, lanjutkan request
        return $next($request);
    }
}