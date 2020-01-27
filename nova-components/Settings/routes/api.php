<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Tool API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your tool. These routes
| are loaded by the ServiceProvider of your tool. They are protected
| by your tool's "Authorize" middleware by default. Now, go build!
|
*/

// Route::get('/endpoint', function (Request $request) {
//     //
// });

Route::get('/default-setting', function () {

    $general = array(
    	'app_name' => config('app.name'),
    	'admin_name' => config('nova.name'),
    	'app_url' => config('app.url'),
    	'admin_url' => config('nova.path'),
    	'pagination' => config('nova.pagination'),
        'mail_driver' => config('mail.driver'),
        'mail_host' => config('mail.host'),
        'mail_port' => config('mail.port'),
        'mail_address' => config('mail.from.address'),
        'mail_name' => config('mail.from.name'),
        'mail_username' => config('mail.username'),
        'mail_password' => config('mail.password'),
        'mail_encription' => config('mail.encryption'),

    );



    return response()->json([
	    'general' => $general,
	]);
});


Route::put('/update-setting', function (Request $request) {


    // putenv('APP_NAME='.$request->general['app_name']);
    config(['mail.from.name' => $request->general['mail_name']]);

    Artisan::call('config:cache');

    return "Updated Successfully";
});