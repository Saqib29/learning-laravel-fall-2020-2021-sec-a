<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class TestMiddleware
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
        $user = User::find(1);
        if($user->email == 'saqib@email.com'){
            return $next($request);
        } else{
            return redirect('/');
        }
    }
}
