<?php

use App\Product;
/*
use App\Category;
use App\Order;
use App\Page;
use App\User;
use App\Notifications\TemplateEmail;

*/


use Illuminate\Http\Request;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
     // currency()->setUserCurrency('EUR');
    // echo currency()->getUserCurrency();

    // $ip = \Request::ip();
    // $ipdata = trim(file_get_contents("http://ipinfo.io/php/{$ip}"));

    // $ipdata = json_decode($ipdata, TRUE);

    // return $ipdata;
    // $products = Product::all();
    return view('front.index');
});

Route::post('newsletter','NewsletterController@store');

Route::get('/customization', function () {

    return view('front.cus');
});
Route::get('/pdf', function () {

    return view('invoices.order');
});


// Route::get('/usercart',function(){
//     $session_id = Session::get('session_id');

//     $q = Cart::orderBy('created_at', 'desc')

//         ->groupBy(DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d')"))
//         ->get(array(
//               DB::raw('Date(created_at) as date'),
//               DB::raw('COUNT(*) as "views"')
//           ));

//     // return $q;
// });


Route::get('/usercart', 'HomeController@userCart');

Route::get('/profileinfo', 'HomeController@profileInfo');

Route::get('/profilemeasurement', 'HomeController@profileMeasurement');

Route::get('/showmeasurement/{id}', 'HomeController@showMeasurement');
// Route::get('/shipment', function () {
//     Shippo::setApiKey('shippo_test_a764a17b2e3bb8305e11f345827ec9e35600d5c9');


Route::get('localization/{locale}','LocalizationController@index');

Route::get('/lang/{locale}', 'HomeController@lang'); 

Route::get('/currency/{curr}', 'HomeController@Currency'); 
    
// });

// Route::get('/cart', 'ShippingController@index');//cart
// Route::post('/cart', 'ShippingController@store');//cart
// Route::get('/checkout', 'ShippingController@index');//ship 
// Route::post('/checkout', 'ShippingController@store');
// Route::get('/checkout/thanks', 'ShippingController@show');

Route::get('/subscribe', function () {

    Newsletter::subscribe('rincewind@discworld.com');

    
});

Route::get('/measurement', function () {

    // $products = Product::all();
    return view('front.measurement');
});

Route::get('/startwizard', function () {

    // $products = Product::all();
    return view('front.wizard');
});

Route::get('/editmeasurement', function () {

    // $products = Product::all();
    return view('front.editwizard');
});


Route::post('/measrementdata', function (Request $request) {

    $data = $request->all();
    $measurement = new App\Measurement;
    $measurement->chest = $request->chest;
    $measurement->hips = $request->hips;
    $measurement->stomach = $request->stomach;
    $measurement->waist = $request->waist;
    $measurement->jacket_length = $request->jacket_length;
    $measurement->soulder_size = $request->soulder_size;
    $measurement->sleeve_length = $request->sleeve_length;
    $measurement->bicest = $request->bicest;
    $measurement->pant_length = $request->pant_length;
    $measurement->rise = $request->rise;
    $measurement->thigh = $request->thigh;
    $measurement->knees = $request->knees;
    $measurement->neck = $request->neck;
    $measurement->wrists = $request->wrists;

    $measurement->save();
});

Route::get('/progress', function () {

    // $products = Product::all();
    return view('front.progress');
});

Route::get('/getorderstatus', function () {

    $order = App\Order::where('user_id',Auth::user()->id)->first();

    return $order->order_status;

});

Route::get('/data',function(){


    //$data = Readymadeproduct::where('category',11)->get();
   // $products = App\Readymadeproduct::orderBy('id', 'DESC')->whereJsonContains('category', 11)->paginate(5);

    
   //  echo "<pre>"; print_r($products); die;
    
    
    
});




//

// Route::get('/report', function () {

//     return response()->json([
//         'data' => 'Hello'
//     ], 200);
// });


// Route::get('/test', function () {

//     $products = Product::whereIn('color',['red'])->get();
//     echo "<pre>"; print_r($products); die;
// });


/*
Route::get('/email', function () {

    $user = new User();
    $user->email = 'sultanasad8@gmail.com';   // This is the email you want to send to.
    $user->notify(new TemplateEmail());
});
*/
/*
 Route::get('/test', function() {
    try {
         echo "<pre>";
        echo  print_r(Salesforce::describeLayout('Account'), true);
    } catch (Exception $e) {
        
        echo $e->getMessage();
        echo $e->getTraceAsString();
    }
});
*/




Route::get('/getfilterid','CategoryController@getFilterId');

Route::get('/getcategories','CategoryController@getcategories');

Route::post('/update-category','CategoryController@updatecategory');

//Route::get('/','BlueknotController@indexpage');

Route::get('/activate','HomeController@activate');

Route::post('/subscribe','MailchimpController@store');


Route::get('/page/{url}','BlueknotController@page');
//page controller



Route::post('/sendemail/send','SendEmailController@send');




//Product Controller



Route::get('/virtual-products/{url}','ProductsController@getproducts');

Route::get('/readymade-products/{url}','ProductsController@getproducts')->name('readymade.url');

Route::match(['get', 'post'],'/getreadymadeproducts/{url}','ProductsController@viewReadymadeProbycat');

Route::match(['get', 'post'],'/getvirtualproducts/{url}','ProductsController@viewVirtualProbycat');

//Route::match(['get','post'],'/products/{url}/{slug}','ProductsController@viewProductsbycat');

Route::get('/products/{url}/{slug}/{pro}','ProductsController@viewProduct');

// Route::any('/{url}/{slug}',[
//     'uses' => 'ProductsController@viewProduct',
//     'as' => 'product-filter'
// ]);

Route::match(['get', 'post'],'/getreadymadefilterproduct/{url}/{filter}','FilterproController@getreadymadefilterproduct');
Route::match(['get', 'post'],'/getvirtualfilterproduct/{url}/{filter}','FilterproController@getvirtualfilterproduct');


//shipping level
Route::get('/getshippinglevel/{id}','ShippingController@getshippinglevel');
// Cart Page
Route::match(['get', 'post'],'/cart','CartController@cart');

Route::get('/gotocart','CartController@gotocart');

// Add to Cart Route
Route::match(['get', 'post'], '/add-cart', 'CartController@addtocart');

// Delete Product from Cart Route
Route::get('/cart/delete-product/{id}','CartController@deleteCartProduct');

// Update Product Quantity from Cart
Route::get('/cart/update-quantity/{id}/{quantity}','CartController@updateCartQuantity');

// Get Product Attribute Price
Route::any('/get-product-price','CartController@getProductPrice');

// Apply Coupon
Route::post('/cart/apply-coupon','CartController@applyCoupon');

Route::match(['get','post'],'checkout','CartController@checkout');
// Order Review Page
Route::match(['get','post'],'/order-review','CartController@orderReview');
// Place Order
Route::match(['get','post'],'/place-order','CartController@placeOrder');
// Thanks Page
Route::get('/thanks','CartController@thanks');
// Paypal Page
Route::get('/paypal','CartController@paypal');
// Users Orders Page
Route::get('/orders','CartController@userOrders');
// User Ordered Products Page
Route::get('/orders/{id}','CartController@userOrderDetails');
// Paypal Thanks Page
Route::get('/paypal/thanks','CartController@thanksPaypal');
// Paypal Cancel Page
Route::get('/paypal/cancel','CartController@cancelPaypal');

 Route::get('laravel-send-email', 'EmailController@sendEMail');

 //courior functionality
Route::get('/courior','ShippingController@shipping');



//social login


Route::get('/redirect/{provider}', 'SocialAuthController@redirect');
Route::get('/callback/{provider}', 'SocialAuthController@callback');

Route::get('/referral', 'UserController@referral')->name('referral');
Route::get('/referrer', 'HomeController@referrer');
Route::get('/referrals', 'HomeController@referrals');




//Geocontroller controller for location of user
 Route::get('mylocation', 'GeolocationController@index');



// after
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')
    ->name('home')
    ->middleware('verified');
    
    
Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');
