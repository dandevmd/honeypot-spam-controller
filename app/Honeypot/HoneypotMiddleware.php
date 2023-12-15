<?php

namespace App\Honeypot;

use Closure;
use Illuminate\Http\Request;

class HoneypotMiddleware
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
        if (!config('honeypot.enabled')) {
            return $next($request);
        }
        if (!request()->has(config('honeypot.field_name'))) {
            abort(422, 'spam  detected');
        }

        if (!empty(request(config('honeypot.field_name')))) {
            abort(422, 'spam bot detected');
        }

        if (microtime(true) - request(config('honeypot.fill_time')) < config('honeypot.time_limit')) {
            abort(422, 'slow down');
        }

        return $next($request);
    }
}