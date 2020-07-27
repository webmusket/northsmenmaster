<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Country;
use Auth;
use Session; 
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Exports\usersExport;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use App;
use App\Cart;
use App\Measurement; 
use Validator;
use Illuminate\Support\Facades\Input;

class UsersController extends Controller
{

    public function userLoginRegister(){
        try {
            $meta_title = "User Login/Register - Ecom Website";
            return view('users.login_register')->with(compact('meta_title'));   
        }catch (\Exception $e) {
            $error = $e->getMessage();
            return view('error.404')->with(compact('error'));
        } 
    }

    public function login(Request $request){
        try {
            if($request->isMethod('post')){
                $data = $request->all();
                /*echo "<pre>"; print_r($data); die;*/
                if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
                    $userStatus = User::where('email',$data['email'])->first();
                    if($userStatus->status == 0){
                        return redirect()->back()->with('flash_message_error','Your account is not activated! Please confirm your email to activate.');    
                    }
                    Session::put('frontSession',$data['email']);

                    if(!empty(Session::get('session_id'))){
                        $session_id = Session::get('session_id');
                        DB::table('cart')->where('session_id',$session_id)->update(['user_email' => $data['email']]);
                    }

                    return redirect('/gotocart');
                }else{
                    return redirect()->back()->with('flash_message_error','Invalid Username or Password!');
                }
            }
        }catch (\Exception $e) {
            $error = $e->getMessage();
            return view('error.404')->with(compact('error'));
        } 
    }

    public function register(Request $request){
        try {
            if($request->isMethod('post')){
                $data = $request->all();
                // echo "<pre>"; print_r($data); die;
                // Check if User already exists
                $usersCount = User::where('email',$data['email'])->count();
                if($usersCount>0){
                    return redirect()->back()->with('flash_message_error','Email already exists!');
                }else{
                    if(empty($data['referrer_id'])){
                        $data['referrer_id'] = null;
                    }

                    $user = new User;
                    $user->name = $data['name'];
                    $user->email = $data['email'];
                    $user->referrer_id = $data['referrer_id'];
                    $user->password = bcrypt($data['password']);
                    date_default_timezone_set('Asia/Kolkata');
                    $user->created_at = date("Y-m-d H:i:s");
                    $user->updated_at = date("Y-m-d H:i:s");
                    $user->save();

                    /*// Send Register Email
                    $email = $data['email'];
                    $messageData = ['email'=>$data['email'],'name'=>$data['name']];
                    Mail::send('emails.register',$messageData,function($message) use($email){
                        $message->to($email)->subject('Registration with Northsmen ');
                    });*/

                    // Send Confirmation Email
                    $email = $data['email'];
                    $messageData = ['email'=>$data['email'],'name'=>$data['name'],'code'=>base64_encode($data['email'])];
                    Mail::send('emails.confirmation',$messageData,function($message) use($email){
                        $message->to($email)->subject('Confirm your Northsmen Account');
                    });

                    return redirect()->back()->with('flash_message_success','Please confirm your email to activate your account!');

                    if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
                        Session::put('frontSession',$data['email']);

                        if(!empty(Session::get('session_id'))){
                            $session_id = Session::get('session_id');
                            DB::table('cart')->where('session_id',$session_id)->update(['user_email' => $data['email']]);
                        }

                        return redirect('/gotocart');
                    }
                }   
            }
        }catch (\Exception $e) {
            $error = $e->getMessage();
            return view('error.404')->with(compact('error'));
        } 

    }

    public function forgotPassword(Request $request){
        try {
            if($request->isMethod('post')){
                $data = $request->all();
                /*echo "<pre>"; print_r($data); die;*/
                $userCount = User::where('email',$data['email'])->count();
                if($userCount == 0){
                    return redirect()->back()->with('flash_message_error','Email does not exists!');
                }

                //Get User Details
                $userDetails = User::where('email',$data['email'])->first();

                //Generate Random Password
                $random_password = str_random(8);

                //Encode/Secure Password
                $new_password = bcrypt($random_password);

                //Update Password
                User::where('email',$data['email'])->update(['password'=>$new_password]);

                //Send Forgot Password Email Code
                $email = $data['email'];
                $name = $userDetails->name;
                $messageData = [
                    'email'=>$email,
                    'name'=>$name,
                    'password'=>$random_password
                ];
                Mail::send('emails.forgotpassword',$messageData,function($message)use($email){
                    $message->to($email)->subject('New Password - Northsmen');
                });

                return redirect('login-register')->with('flash_message_success','Please check your email for new password!');

            }
            return view('users.forgot_password');
        }catch (\Exception $e) {
            $error = $e->getMessage();
            return view('error.404')->with(compact('error'));
        } 
    }

    public function confirmAccount($email){
        try {
            $email = base64_decode($email);
            $userCount = User::where('email',$email)->count();
            if($userCount > 0){
                $userDetails = User::where('email',$email)->first();
                if($userDetails->status == 1){
                    return redirect('login-register')->with('flash_message_success','Your Email account is already activated. You can login now.');
                }else{
                    User::where('email',$email)->update(['status'=>1]);

                    // Send Welcome Email
                    $messageData = ['email'=>$email,'name'=>$userDetails->name];
                    Mail::send('emails.welcome',$messageData,function($message) use($email){
                        $message->to($email)->subject('Welcome to Northsmen');
                    });

                    return redirect('login-register')->with('flash_message_success','Your Email account is activated. You can login now.');
                }
            }else{
                abort(404);
            }
        }catch (\Exception $e) {
            $error = $e->getMessage();
            return view('error.404')->with(compact('error'));
        } 
    }

    // public function account(Request $request){
    // //     try {
    // //         $user_id = Auth::user()->id;
    // //         $userDetails = User::find($user_id);
    // //         $countries = Country::get();

    // //         if($request->isMethod('post')){
    // //             $data = $request->all();
    // //             /*echo "<pre>"; print_r($data); die;*/

    // //             if(empty($data['name'])){
    // //                 return redirect()->back()->with('flash_message_error','Please enter your Name to update your account details!');    
    // //             }

    // //             if(empty($data['address'])){
    // //                 $data['address'] = '';    
    // //             }

    // //             if(empty($data['city'])){
    // //                 $data['city'] = '';    
    // //             }

    // //             if(empty($data['state'])){
    // //                 $data['state'] = '';    
    // //             }

    // //             if(empty($data['country'])){
    // //                 $data['country'] = '';    
    // //             }

    // //             if(empty($data['pincode'])){
    // //                 $data['pincode'] = '';    
    // //             }

    // //             if(empty($data['mobile'])){
    // //                 $data['mobile'] = '';    
    // //             }

    // //             $user = User::find($user_id);
    // //             $user->name = $data['name'];
    // //             $user->address = $data['address'];
    // //             $user->city = $data['city'];
    // //             $user->state = $data['state'];
    // //             $user->country = $data['country'];
    // //             $user->pincode = $data['pincode'];
    // //             $user->mobile = $data['mobile'];
    // //             $user->save();
    // //             return redirect()->back()->with('flash_message_success','Your account details has been successfully updated!');
    // //         }

    // //         return view('users.account')->with(compact('countries','userDetails'));
    // //     }catch (\Exception $e) {
    // //         $error = $e->getMessage();
    // //         return view('error.404')->with('error');
    // //     } 
    // // }

    public function chkUserPassword(Request $request){
        try {
            $data = $request->all();
            /*echo "<pre>"; print_r($data); die;*/
            $current_password = $data['current_pwd'];
            $user_id = Auth::User()->id;
            $check_password = User::where('id',$user_id)->first();
            if(Hash::check($current_password,$check_password->password)){
                echo "true"; die;
            }else{
                echo "false"; die;
            }
        }catch (\Exception $e) {
            $error = $e->getMessage();
            return view('error.404')->with(compact('error'));
        } 
    }

    public function updatePassword(Request $request){
        try {
            if($request->isMethod('post')){
                $data = $request->all();
                /*echo "<pre>"; print_r($data); die;*/
                $old_pwd = User::where('id',Auth::User()->id)->first();
                $current_pwd = $data['current_pwd'];
                if(Hash::check($current_pwd,$old_pwd->password)){
                    // Update password
                    $new_pwd = bcrypt($data['new_pwd']);
                    User::where('id',Auth::User()->id)->update(['password'=>$new_pwd]);
                    return redirect()->back()->with('flash_message_success',' Password updated successfully!');
                }else{
                    return redirect()->back()->with('flash_message_error','Current Password is incorrect!');
                }
            }
        }catch (\Exception $e) {
            $error = $e->getMessage();
            return view('error.404')->with(compact('error'));
        } 
    }

    public function logout(){
        try {
            Auth::logout();
            Session::forget('frontSession');
            Session::forget('session_id');
            return redirect('/');
        }catch (\Exception $e) {
            $error = $e->getMessage();
            return view('error.404')->with(compact('error'));
        }
    }

    public function checkEmail(Request $request){
        try {
            // Check if User already exists
            $data = $request->all();
            $usersCount = User::where('email',$data['email'])->count();
            if($usersCount>0){
                echo "false";
            }else{
                echo "true"; die;
            }   
        }catch (\Exception $e) {
            $error = $e->getMessage();
            return view('error.404')->with(compact('error'));
        }   
    }


    public function index()
    {
        try {
            $user = Auth::user();
            return view('home')->with(compact('user'));
        }catch (\Exception $e) {
            $error = $e->getMessage();
            return view('error.404')->with(compact('error'));
        }   
    }

    public function userCart(){
        try {

            $databyday = Cart::select('id', 'product_name','price', 'created_at')
                        ->orderBy('created_at', 'desc')
                        ->get()
                        ->groupBy(function($date) {
                            //return Carbon::parse($date->created_at)->format('d'); // grouping by years
                            return Carbon::parse($date->created_at)->format('d'); // grouping by months
                        });
                        

            $date = Cart::orderBy('created_at', 'desc')

                ->groupBy(DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d')"))
                ->get(array(
                    DB::raw('Date(created_at) as date'),
                    DB::raw('COUNT(*) as "views"'),
                  ));
            $data = [];

            foreach ($databyday as $key => $value) {
                array_push($data, $databyday[$key]);
            }

            foreach ($date as $key => $value) {
                $data[$key] = json_decode(json_encode($data[$key]), true);
                $data[$key]['data'] = [];
                array_push($data[$key]['data'],$date[$key]);
            }
            $date = json_decode(json_encode($date), true);

          echo "<pre>"; print_r($data); die;





        
        // 

        // return $databyday;

        // // foreach ($databyday as $key => $value) {
        // //     $i = 0;
        // //     if ($key == Carbon::parse($date[1]['date'])->format('d')) {
        // //         array_push($date[1], $databyday[$key]);
        // //         $i = $i + 1;
        // //     }
        // // }

        // // foreach ($date as $key => $value) {
        // //     if (Carbon::parse($date[0]->date)->format('d') == $databyday[0]) {
        // //         # code...
        // //     }
        // // }

        // // foreach ($data as $key => $value) {

        //     // $data = Cart::select('id', 'product_name', 'created_at')
        //     //         ->get()
                    // ->groupBy(function($date) {
                    //     //return Carbon::parse($date->created_at)->format('d'); // grouping by years
                    //     return Carbon::parse($date->created_at)->format('d'); // grouping by months
                    // });



        // //     array_push($data, $data);

        // // }

        // // $data['cart'] = Cart::select('id', 'product_name', 'created_at')
        // //                     ->get()
        // //                     ->groupBy(function($date) {
        // //                         //return Carbon::parse($date->created_at)->format('d'); // grouping by years
        // //                         return Carbon::parse($date->created_at)->format('d'); // grouping by months
        // //                     });


        // // $data = Cart::select('id', 'product_name', 'created_at')
        // //     ->get()
        // //     ->groupBy(function($date) {
        // //         //return Carbon::parse($date->created_at)->format('d'); // grouping by years
        // //         return Carbon::parse($date->created_at)->format('m'); // grouping by months
        // //     });



        // return $cartdata;
        }catch (\Exception $e) {
            $error = $e->getMessage();
            return view('error.404')->with(compact('error'));
        }   
        
    }

    public function profileInfo(){
        try {
            return view('profile.profile_info')->with('user');
        }catch (\Exception $e) {
            $error = $e->getMessage();
            return view('error.404')->with(compact('error'));
        }   
    }

    public function profileMeasurement(){
        try {
            // $measurements = Measurement::select('id','own', 'measurement_name','height')
            //                 ->where('user_id',Auth::user()->id)
            //                 ->get();
            // return $measurement; die;
            return view('profile.measurement')->with('measurements');
        }catch (\Exception $e) {
            $error = $e->getMessage();
            return view('error.404')->with(compact('error'));
        }   
    }

    public function addtowishlist(Request $request){
        try {
            $product_id = $request->product_id;
            if(DB::table('wishlist')->where('user_id', Auth::user()->id)->where('product_id',$request->product_id)->count() == 1){
                return back()->with('error_msg', 'Product already added to wishlist.');
            }
            DB::table('wishlist')->insert(
                 array(
                        'user_id'     =>   Auth::user()->id, 
                        'product_id'   =>   $request->product_id
                 )
            );
            return back()->with('success_msg', 'Product added to wishlist successfully.');
        }catch (\Exception $e) {
            $error = $e->getMessage();
            return view('error.404')->with(compact('error'));
        }   
    }

    public function wishlist(){
        try {
            $results = DB::table('wishlist')
            ->where('user_id', Auth::user()->id)
            ->paginate(3);
            return view('profile.wishlist')->with(compact('results'));
        }catch (\Exception $e) {
            $error = $e->getMessage();
            return view('error.404')->with(compact('error'));
        }   
    }

    public function pendingcarts(){
        try {
            // $databyday = Cart::select('id', 'product_name','price', 'created_at')
            //             ->orderBy('created_at', 'desc')
            //             ->get()
            //             ->groupBy(function($date) {
            //                 //return Carbon::parse($date->created_at)->format('d'); // grouping by years
            //                 return Carbon::parse($date->created_at)->format('d'); // grouping by months
            //             });
                        

            // $date = Cart::orderBy('created_at', 'desc')

            //     ->groupBy(DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d')"))
            //     ->get(array(
            //         DB::raw('Date(created_at) as date'),
            //         DB::raw('COUNT(*) as "views"'),
            //       ));
            // $data = [];

            // foreach ($databyday as $key => $value) {
            //     array_push($data, $databyday[$key]);
            // }

            // foreach ($date as $key => $value) {
            //     $data[$key] = json_decode(json_encode($data[$key]), true);
            //     $data[$key]['data'] = [];
            //     array_push($data[$key]['data'],$date[$key]);
            // }
            // $date = json_decode(json_encode($date), true);
    //         $data = Cart::select([
    //   // This aggregates the data and makes available a 'count' attribute
    //     DB::raw('count(id) as `count`'), 
    //           // This throws away the timestamp portion of the date
    //           DB::raw('DATE(created_at) as day')
    //         // Group these records according to that day
    //         ])->groupBy('day')
    //         ->get();
        
    //     $output = [];
    //     foreach($data as $entry) {
    //         $output[$entry->day] = $entry->count;
    //     }
        
    //     print_r($output); die;
            $output = Cart::where('user_email',Auth::user()->email)->get()->groupBy(function($date) {
                return \Carbon\Carbon::parse($date->created_at)->format('d-M-y');
            });
            // $output = json_decode(json_encode($output), true);
            // echo "<pre>"; print_r($output); die;
            return view('profile.pendingcarts')->with(compact('output'));
        }catch (\Exception $e) {
            $error = $e->getMessage();
            return view('error.404')->with(compact('error'));
        }   
    }

    public function invitefriends(){
        try {
            return view('profile.invitefriends');
        }catch (\Exception $e) {
            $error = $e->getMessage();
            return view('error.404')->with(compact('error'));
        }   
    }

    public function address(){
        try {
            $countries = Country::get();
            $address = App\DeliveryAddress::where('user_id',Auth::user()->id)->get();
            return view('profile.address')->with(compact('address','countries'));
        }catch (\Exception $e) {
            $error = $e->getMessage();
            return view('error.404')->with(compact('error'));
        }   
    }
    
    public function userorder(){
        try {
            $user_id = Auth::user()->id;
            $orders = App\Order::with('orders')->where('user_id',$user_id)->orderBy('id','DESC')->with('readymadeproducts')->get();
            $orders = json_decode(json_encode($orders));
            // echo "<pre>"; print_r($orders); die;
            return view('profile.orderrecords')->with(compact('orders'));
        }catch (\Exception $e) {
            $error = $e->getMessage();
            return view('error.404')->with('error');
        }
    }

    // public function userorder(){
    //     try {
    //         $results = DB::table('orders_products')
    //         ->where('user_id', Auth::user()->id)
    //         ->get();
    //         return view('profile.orderrecords')->with(compact('results'));
    //     }catch (\Exception $e) {
    //         $error = $e->getMessage();
    //         return view('error.404')->with(compact('error'));
    //     }   
    // }

    public function addaddress(Request $request){
        if($request->isMethod('post')){
            $rules = array(
                'name'          => 'required',
                'email'         => 'required|email', 
                'address'       => 'required',
                'state'          => 'required',
                'city'           => 'required',
                'country'          => 'required',
                'pincode'          => 'required',
                'mobile'          => 'required',
            );

            $validator = Validator::make(Input::all(), $rules);

            if ($validator->fails()) {
                $messages = $validator->messages();
                return redirect()->back()->with('flash_message_error',$messages);

            } else {
                $data = Input::all();
                $shipping = new App\DeliveryAddress;
                $shipping->user_id = Auth::user()->id;
                $shipping->user_email = Auth::user()->email;
                $shipping->name = $data['name'];
                $shipping->address = $data['address'];
                $shipping->city = $data['city'];
                $shipping->state = $data['state'];
                $shipping->pincode = $data['pincode'];
                $shipping->country = $data['country'];
                $shipping->mobile = $data['mobile'];
                $shipping->save();

                return redirect()->back()->with('flash_message_error',"successfully added the address");

            }
        }
    }

   




}
