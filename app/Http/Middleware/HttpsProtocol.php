<?php

namespace App\Http\Middleware;

use App;
use Closure;
use Illuminate\Http\Request;

class HttpsProtocol
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->secure() && App::environment() === 'development') {
            return redirect()->secure($request->getRequestUri());
        }

        return $next($request);
    }
}
