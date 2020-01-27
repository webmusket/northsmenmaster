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

// Route::get('/endpoint', function (Request $request) {
//     //
// });

Route::get('/get-activities/{resourceName}/{resourceId}', function ($resourceName,$resourceId) {
	// $getfabrics = App\Rawmaterial::get();
	
	switch ($resourceName) {
		case 'orders':
			$events = App\ActivityLog::where('model_type','App\Order')->where('model_id',$resourceId)->get();
			break;

		case 'orders':
			# code...
			break;

		case 'orders':
			# code...
			break;
		
		default:
			# code...
			break;
	}


    return response()->json([
	    'events' => $events,
	    'type' => $resourceName
	]);
});
