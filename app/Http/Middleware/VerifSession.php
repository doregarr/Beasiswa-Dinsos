<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class VerifSession
{
    public function handle(Request $request, Closure $next)
    {
        // Periksa apakah pengguna telah login
        if (Auth::user() && Auth::user()->role=='user') {
            // Pengguna telah login, lanjutkan ke URL yang diminta
            return $next($request);
        }
        if (Auth::user()&&Auth::user()->role=='admin') {
            // Pengguna telah login, lanjutkan ke URL yang diminta
            return $next($request);
        } else {
            // Pengguna belum login, redirect ke halaman login
            return redirect('/login');
        }
    }
}
