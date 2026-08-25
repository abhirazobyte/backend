<?php
namespace App\Http\Middleware;
use Illuminate\Support\Facades\Route;
use Closure;
use Session;
class user
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
        if (empty(Session::has('userSession'))) {
            return redirect()->route('user_login')->with('error', 'Please Login First!!!');
        }
        return $next($request);
    }
}

