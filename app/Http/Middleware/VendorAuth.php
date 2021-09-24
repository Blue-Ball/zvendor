<?php

namespace App\Http\Middleware; 
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



use Illuminate\Auth\Middleware\Authenticate as Middleware;

class VendorAuth extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards)
    {
        $user=Auth::user();

        if($user==null){
            return redirect('/');
        }
        else if($user->otp_verified==0)
        { 
            return redirect('/vendor/verify-phone');
        }
        elseif($user->store_name==null){
 
            return redirect('/vendor/store-info');
        }
        elseif($user->url==null){

            return redirect('/vendor/store-url');
        }

        else return $next($request);
    }
}
