<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LangAuto
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    public function handle(Request $request, Closure $next)
    {
        if (!empty(session('lang'))) {
            App::setLocale(session('lang'));
        }else{
            $lang = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
            $lang = ($lang=='pt')?'pt-BR':$lang;
            App::setLocale($lang);
            session(['lang' => $lang]);
        }
        return $next($request);
    }
}
