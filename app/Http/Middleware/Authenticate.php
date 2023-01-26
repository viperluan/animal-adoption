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
        if (!$request->expectsJson()) {
            if (str_contains($request->path(), 'user')) {
                return route('user.login');
            }

            if (str_contains($request->path(), 'institution')) {
                return route('institution.login');
            }

            /**
             * In case the user/institution try to access any route
             * without autenthicated, redirect to home.
             */
            return route('home');
        }
    }
}
