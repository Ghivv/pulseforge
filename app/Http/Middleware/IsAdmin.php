<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

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
        if (!auth()->guard()->check() || !auth()->guard()->user()->is_admin) {
            abort(403, 'Akses ditolak. Anda tidak memiliki hak akses admin.');
        }

        return $next($request);
    }
    }
