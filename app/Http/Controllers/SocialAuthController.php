<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    public function redirect($service) {
    	try {
        	return Socialite::driver ( $service )->redirect ();
        }catch (\Exception $e) {
            $error = $e->getMessage();
            return view('error.404')->with('error');
        }
    }

    public function callback($service) {
    	try {
	        $user = Socialite::with ( $service )->user ();
	        return view ( 'home' )->withDetails ( $user )->withService ( $service );
        }catch (\Exception $e) {
            $error = $e->getMessage();
            return view('error.404')->with('error');
        }
    }
}
