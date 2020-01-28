<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Setting;
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

    $homesettings = Setting::where('type',0)->pluck('value','key');

    return response()->json([
	    'homesettings' => $homesettings,
	]);
});


Route::put('/updatesettings', function (Request $request) {
    Setting::where('key',$request->identifier)->update(['value' => $request->value]);

    return "Updated Sucessfully";

});