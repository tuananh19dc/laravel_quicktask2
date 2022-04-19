<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App as FacadesApp;

class Language
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
        if (session()->has('language')) {
            $language = session()->get('language');
            \App::setLocale($language);
        }

        return $next($request);
    }
}
