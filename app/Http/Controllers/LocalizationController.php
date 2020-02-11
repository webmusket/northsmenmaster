<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Session;

class LocalizationController extends Controller
{
    public function index(Request $request,$locale) {
      //set’s application’s locale
      app()->setLocale($locale);
      
      //Gets the translated message and displays it
      echo trans('lang.msg');
   }


   public function lang($locale)
   {
       App::setLocale($locale);
       session()->put('locale', $locale);
       return redirect()->back();
   }

   public function Currency($curr)
   {
       // currency()->setUserCurrency('EUR');
       session()->put('currency', $curr);
       return redirect()->back();
   }
}
