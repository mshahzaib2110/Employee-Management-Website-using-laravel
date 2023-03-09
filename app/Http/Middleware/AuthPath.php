<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthPath
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
        if($request->path()=='admin_login' && $request->session()->has('Admin_Id')){
      return redirect('admin_home');
        }
        if($request->path()=='/' && $request->session()->has('Emp_Id')){
        return redirect('emp_home');
          }
        return $next($request);
    }
    
}
