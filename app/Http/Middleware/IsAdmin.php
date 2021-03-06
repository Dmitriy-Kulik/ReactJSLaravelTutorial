<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Klisl\Locale\LocaleMiddleware;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user() &&  Auth::user()->isAdmin == 1) {
            return $next($request);
        }

        //return redirect('error');
        //return redirect()->route('error');

        return redirect('/home/protected/user');
    }
}
