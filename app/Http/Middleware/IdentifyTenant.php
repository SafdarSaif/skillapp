<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Stancl\Tenancy\Database\Models\Tenant;


class IdentifyTenant
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }
    public function handle($request, Closure $next)
    {
        $host = $request->getHost();
        $tenant = Tenant::where('domain', $host)->first();

        if ($tenant) {
            tenancy()->initialize($tenant);
        } else {
            abort(404, 'Tenant not found');
        }

        return $next($request);
    }
}
