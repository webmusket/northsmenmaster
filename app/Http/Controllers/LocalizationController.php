<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Session;

class LocalizationController extends Controller
{
    public function index(Request $request,$locale) {
      try {
      //set’s application’s locale
        app()->setLocale($locale);
        
        //Gets the translated message and displays it
        echo trans('lang.msg');
      }catch (\Exception $e) {
            $error = $e->getMessage();
            return view('error.404')->with('error');
        }
   }


   public function lang($locale)
   {
      try {
         App::setLocale($locale);
         session()->put('locale', $locale);
         return redirect()->back();
       }catch (\Exception $e) {
            $error = $e->getMessage();
            return view('error.404')->with('error');
        }
   }

   public function Currency($curr)
   {
      try {
       // currency()->setUserCurrency('EUR');
       session()->put('currency', $curr);
       return redirect()->back();
      }catch (\Exception $e) {
            $error = $e->getMessage();
            return view('error.404')->with('error');
        }
   }
}
