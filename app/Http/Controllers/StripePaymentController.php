<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;


class StripePaymentController extends Controller
{
    public function stripePost(Request $request)
    {
        try {
            Stripe\Stripe::setApiKey('sk_test_2lBBIkeYuKoBiL6Fq4EHRAJK00uqheX1XX');
            $charge = Stripe\Charge::create ([
                    "amount" => 100 * 100,
                    "currency" => "usd",
                    "source" => $request->stripeToken,
                    "description" => "Test payment" 
            ]);
            
            return $charge;
  
            Session::flash('success', 'Payment successful!');
              
            return back();
        } catch (\Exception $ex) {
            return view('templates.exception',[
                'exception' => $ex->getMessage().'<br>'.$ex->getFile().': '.$ex->getLine()
            ]);
        }
    }
}
