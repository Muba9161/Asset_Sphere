<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Manager
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::guard('sanctum')->check() && (Auth::guard('sanctum')->user()->user_role === '1' || Auth::guard('sanctum')->user()->user_role === '2')) {
            return $next($request);
        }

        abort(403, 'Unauthorized');
    }
}
