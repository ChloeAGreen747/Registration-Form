<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        //Throws an error message if the user trying to access a page that requires a login is not logged in.
        if (! $request->expectsJson()) {
            return abort(403, 'Unauthorized Access. Login to view');
        }
    }
}
