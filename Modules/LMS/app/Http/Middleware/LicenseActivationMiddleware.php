<?php

namespace Modules\LMS\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LicenseActivationMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Bypass license check
        return $next($request);
    }
}
