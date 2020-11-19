<?php

namespace App\Http\Middleware;

use Closure;
use Cookie;

class SetLanguage
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
        \App::setLocale(Cookie::get('language') ?: $request->language);

        return $next($request);
    }
}