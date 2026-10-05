<?php

namespace App\Http\Middleware;

use Closure;
use App\Providers\AppServiceProvider;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminRedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
if (Auth::guard('admin')->check()) {
    return redirect(route('admin.dashboard'));
    }
    return $next($request);
    }
}
