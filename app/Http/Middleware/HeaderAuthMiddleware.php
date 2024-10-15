<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HeaderAuthMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $header = $request->header('Authorization');

        if (!$header || $header !== config('app.header_key')) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        return $next($request);
    }

}
