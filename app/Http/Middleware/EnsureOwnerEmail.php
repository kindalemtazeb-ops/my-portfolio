<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureOwnerEmail
{
    public function handle(Request $request, Closure $next): Response
    {
        $allowedEmail = 'kindalemtazeb@gmail.com';
        $user = $request->user();

        if (! $user || strtolower(trim($user->email)) !== strtolower(trim($allowedEmail))) {
            abort(403, 'Unauthorized access.');
        }

        return $next($request);
    }
}