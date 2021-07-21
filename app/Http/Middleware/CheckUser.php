<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUser
{
    public function handle(Request $request, Closure $next)
    {
       $user = Auth::user()->role;

       if ($user == 2) {
            return $next($request);
        }

        return redirect('/dashboard');

    }
}
