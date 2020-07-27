<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class StoreReferralCode
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
        $response = $next($request);

        if ($request->has('ref')){
            $referral = User::where('user_referer_code',$request->get('ref'))->first();
            // $response->cookie('ref', $referral->id);
            setcookie('ref',$referral->id, time() + (86400 * 30), "/login-register");
        }

        return  $response;
    }
}
