<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class hasWriter
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
        if (Sentinel::getUser()->roles()->first()->slug == 'writer') {
            return $next($request);
        } else {
            return redirect()->route('Article.index');
        }
    }
}
