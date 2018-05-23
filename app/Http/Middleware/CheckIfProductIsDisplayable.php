<?php

namespace App\Http\Middleware;

use Closure;

class CheckIfProductIsDisplayable
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
        if ( ! $request->product->categories()->pluck('id')->contains($request->category->id) ) {
            abort(404);
        }
        return $next($request);
    }
}
