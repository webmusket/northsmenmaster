<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Tool API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your tool. These routes
| are loaded by the ServiceProvider of your tool. You're free to add
| as many additional routes to this file as your tool may require.
|
*/

Route::post('/coupon-settings', function (Request $request) {
	// return $request->all();
	try {
	    $coupon = App\Coupon::find($request->coupon_id);
	    $coupon->amount = $request->amount;
	    $coupon->amount_type = $request->amount_type;
	    $coupon->couponcategories = $request->couponcategories;
	    $coupon->couponemail = $request->couponemail;
	    $coupon->couponemails = $request->couponemails;
	    $coupon->couponproducts = $request->couponproducts;
	    $coupon->excludecouponcategories = $request->excludecouponcategories;
	    $coupon->excludecouponproducts = $request->excludecouponproducts;
	    $coupon->individual = $request->individual;
	    $coupon->max_uses = $request->max_uses;
	    $coupon->max_uses_user = $request->max_uses_user;
	    $coupon->minimumspent = $request->minimumspent;
	    $coupon->save();
	} catch (\Exception $e) {

        $error = $e->getMessage();

        return $error;
    }

});


Route::get('/loaddata/{id}', function ($id) {
	try {
	    $coupon = App\Coupon::find($id);
	    return $coupon;
	} catch (\Exception $e) {

        $error = $e->getMessage();

        return $error;
    }
});

Route::get('/readymade-products', function () {
    return App\Readymadeproduct::orderBy('id','desc')->pluck('title');
});

Route::get('/categories', function () {
    return App\Category::orderBy('id','desc')->pluck('name');
});

Route::get('/emails', function () {
    return App\User::orderBy('id','desc')->pluck('email');
});