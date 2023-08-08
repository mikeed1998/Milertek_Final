<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;

class SetDefaultLanguage
{
    public function handle(Request $request, Closure $next)
    {
        // Verificar si el idioma está presente en la URL y si no, establecerlo en la sesión
        if (!$request->route('lang')) {
            $lang = 'esp'; // Establece aquí el idioma predeterminado deseado
            Session::put('lang', $lang);
        }

        return $next($request);
    }
}