<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Authenticate
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
    if (!Auth::User()) return redirect()->route('login');
    return $next($request);
  }
}
