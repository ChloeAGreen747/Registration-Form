<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PreventBackHistory
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
        //Sets the headers for each request that comes to the web application.
        //This middleware will remove the cache and will re-authenticate the user before showing any web page.

        //Passes the request to the next handler.
        $response = $next($request);

        //This means that it won't store a cache of the page and it must revalidate the user before access.
        $response->headers->set('Cache-Control','nocache, no-store, must-revalidate');

        //Older version of the Cache-Control but does the same thing.
        $response->headers->set('Pragma','no-cache');

        $response->headers->set('Expires','Sun, 02 Jan 1990 00:00:00 GMT');

        return $response;
    }
}
