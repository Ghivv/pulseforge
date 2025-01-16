<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah user sudah login dan memiliki role admin
        if (!Auth::check() || !Auth::user()->is_admin) {
            abort(403, 'Akses ditolak. Anda tidak memiliki hak akses admin.');
        }

        return $next($request);
    }
    }

