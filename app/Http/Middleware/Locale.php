<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Session\Session;
use App;
class Locale
{
    public function handle($request, Closure $next)
    {
        if($language=$request->session()->get('lang')){
            \App::setLocale($language);
        }
        return $next($request);
    }
}
