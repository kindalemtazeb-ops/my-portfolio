<?php

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureOwnerEmail
{
    public function handle(Request $request, Closure $next): Response
    {
        $allowedEmail = 'YOUR_ADMIN_EMAIL@gmail.com';
        $userEmail = strtolower(trim((string) optional($request->user())->email));

        if ($userEmail === '' || $userEmail !== strtolower(trim($allowedEmail))) {
            abort(403, 'Unauthorized access.');
        }

        return $next($request);
    }
}
