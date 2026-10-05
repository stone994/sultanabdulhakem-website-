<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Override;
use Symfony\Component\HttpFoundation\Response;

class AdminAuthenticate extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    #[Override]
    protected function redirectTo(Request $request)
    {
        if (! $request->expectsJson()) {
            return route('admin.login');
        }
    }
    #[Override]
    protected function authenticate($request, array $guards)
    {
          if ($this->auth->guard('admin')->check()) {
                return $this->auth->shouldUse('admin');
            }
        $this->unauthenticated($request,['admin']);
    }
}
