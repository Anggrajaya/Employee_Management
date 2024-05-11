<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        $user = Auth::user();
        foreach ($roles as $role) {
            if (strtolower($user->role) === strtolower($role)) {
                return $next($request);
            }
        }

        return redirect('dashboard')->with('error', "Anda tidak memiliki akses ke halaman ini.");
    }
}