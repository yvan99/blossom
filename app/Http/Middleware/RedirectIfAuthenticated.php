<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
  public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {

            if ($guard == "admin" && Auth::guard($guard)->check()) {
              return redirect()->route('homeadmin');
            }
            elseif ($guard == "student" && Auth::guard($guard)->check()) {
                return redirect()->route('homestudent');
              }

              elseif ($guard == "counselor" && Auth::guard($guard)->check()) {
                return redirect()->route('homecounsellor');
              }
            
           
           
        }

        return $next($request);
    }

    // public function handle($request, Closure $next, $guard = null)
    // {
    //   // if (Auth::guard('accountant')->check()) {
    //   //   Auth::guard('accountant')->logout();
    //   //   return route('login');
    //   // }
      
 
    //     switch ($guard) {
    //         case 'accountant':
    //           if (Auth::guard($guard)->check()) {
    //             return redirect()->route('homeaccountant');
    //           }
             
    //         default:
    //           if (!Auth::guard($guard)->check()) {
    //               return redirect('/');
    //           }
    //           break;
    //       }
    //       return $next($request);
          
    // }
}
