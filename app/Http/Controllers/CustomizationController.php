<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productstyle;

class CustomizationController extends Controller
{
    public function store(Request $request){
        return $request->all();
    }
    
    public function getlinearts(){
       
    	$jacketstyles = Productstyle::with('styleoptions')->where('type','jacket')->where('cus_type','style')->get();
        return response()->json([
    	    'jacketstyles' => $jacketstyles,
    	]);

    }
}
