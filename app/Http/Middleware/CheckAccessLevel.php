<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAccessLevel
{
    public function handle(Request $request, Closure $next, $level)
    {
        if (!auth()->check() || auth()->user()->nivel_acesso !== $level) {
            abort(403, 'Unauthorized access');
        }

        return $next($request);
    }
}