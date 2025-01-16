<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::guard('sanctum')->check() && Auth::guard('sanctum')->user()->user_role === '1') {
            return $next($request);
        }

        abort(403, 'Unauthorized');
    }
}
