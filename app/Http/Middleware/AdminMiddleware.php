<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle(Request $request, Closure $next)
    // {
    //     // Verifica si el usuario está autenticado y es un administrador
    //     if (Auth::check() && Auth::user()->role !== 'admin') {
    //         return redirect('home'); // Redirige si no es admin
    //     }

    //     return $next($request);
    // }

    public function handle($request, Closure $next)
{
    // ✅ Esto debería detener el flujo si entra aquí
    dd(Auth::check(), Auth::user(), Auth::user()->is_admin);

    if (Auth::check() && Auth::user()->is_admin) {
        return $next($request);
    }

    abort(403, 'Unauthorized action.');
}

}
