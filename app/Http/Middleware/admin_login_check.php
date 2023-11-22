<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class admin_login_check
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $req, Closure $next)
    {
        if($req->session()->has('admin_login'))
        {
            return $next($req);
        }
        else
        {
            return redirect('/admin/index');
        }
    }
}
