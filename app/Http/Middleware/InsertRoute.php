<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;
use DB;
class InsertRoute
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
        $url = url()->current();
        $routeName = Route::currentRouteName();
        DB::table('route_lists')->updateOrInsert([
            'route_name'=>$routeName
        ],
        [
            'route_url'=>$url,
            'route_name'=>$routeName
        ]);
        return $next($request);
    }
}
