<?php

namespace App\Http\Middleware;

use Closure;
use Auth;


class IsAdmin
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
       if (Auth::user() &&  Auth::user()->id_role == 2) {
        return $next($request);
    }
    return redirect(route('loginAdmin'))->with('status','Tài khoản không có quyền admin');
    }
}
