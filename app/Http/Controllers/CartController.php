<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Readymadeproduct;
use App\Virtualproduct;
use Session;
use App\User;
use App\Country;
use App\DeliveryAddress;
use App\OrdersProduct;
use App\Order;
use App\Coupon;
use Mail;
use PDF;
use App\Invoicer;
use Carbon\Carbon;


class CartController extends Controller
{

    public function __construct()
    {
        
    }

    public function gotocart(){
        return view('front.cart');
    }
    public function addtocart(Request $request){

        Session::forget('CouponAmount');
        Session::forget('CouponCode');

        $data = $request->all();
        //echo "<pre>"; print_r($data); die;
        if(empty(Auth::user()->email)){
            $data['user_email'] = '';    
        }else{
            $data['user_email'] = Auth::user()->email;
        }

        $session_id = Session::get('session_id');
        if(!isset($session_id)){
            $session_id = str_random(40);
            Session::put('session_id',$session_id);
        }

        $countProducts = DB::table('cart')->where(['product_id' => $data['product_id'],'product_type' => $data['product_type'],'session_id' => $session_id])->count();
        if($countProducts>0){
            return redirect()->back()->with('flash_message_error','Product already exist in Cart!');
        }

        $time = Carbon::now();
        
                
        DB::table('cart')
        ->insert(['product_id' => $data['product_id'],'product_name' => $data['product_name'],
            'product_type' => $data['product_type'],'product_code' => $data['product_code'],
            'price' => $data['price'],'quantity' => 1,'image' => $data['image'],'user_email' => $data['user_email'],'session_id' => $session_id,'created_at'=> $time]);

        return redirect('gotocart')->with('flash_message_success','Product has been added in Cart!');

    }    

    public function cart(){           
        if(Auth::check()){
            $user_email = Auth::user()->email;
            $userCart = DB::table('cart')->where(['user_email' => $user_email])->get();     
        }else{
            $session_id = Session::get('session_id');
            $userCart = DB::table('cart')->where(['session_id' => $session_id])->get();    
        }
        
        foreach($userCart as $key => $product){
            $productDetails = '';

            if ($product->product_type == 'readymade_product') {
                $productDetails = Readymadeproduct::where('id',$product->product_id)->first();
            }else{
                $productDetails = Virtualproduct::where('id',$product->product_id)->first();
            }
            // echo "<pre>"; print_r($productDetails->image); die;
            
            // $userCart[$key]->image = $productDetails->image;
        }
        /*echo "<pre>"; print_r($userCart); die;*/
        // return view('front.cart1')->with(compact('userCart'));

        return $userCart;
    }



    public function deleteCartProduct($id=null){
        Session::forget('CouponAmount');
        Session::forget('CouponCode');
        DB::table('cart')->where('id',$id)->delete();
        return redirect('cart')->with('flash_message_success','Product has been deleted in Cart!');
    }

    public function applyCoupon(Request $request){


        Session::forget('CouponAmount');
        Session::forget('CouponCode');


        $data = $request->all();

        $coupondata = [];

        if ($data['coupon_code'] == null) {
             $coupondata['err'] = "No coupon code in the input box";
             return $coupondata;
        }

        //return $coupondata;
        
        $couponCount = Coupon::where('coupon_code',$data['coupon_code'])->count();
        if($couponCount == 0){
             $coupondata['err'] = "This coupon does not exists!";
            return $coupondata;
        }else{
            // with perform other checks like Active/Inactive, Expiry date..

            // Get Coupon Details
            $couponDetails = Coupon::where('coupon_code',$data['coupon_code'])->first();
            //echo "<pre>"; print_r($couponDetails->max_uses); die;
            // If coupon is Inactive
            if($couponDetails->status==0){
                $coupondata['err'] = 'This coupon is not active!';
                return $coupondata;
            }
            
            $user_id = Auth::user()->id;
            $user_email = Auth::user()->email;
            $coupon_id = $couponDetails->id;

            $countCoupons = DB::table('user_coupon')->where(['user_id' => $user_id,'coupon_id' => $coupon_id])->count();

            //echo "<pre>"; print_r($countCoupons); die;
/*
            if ($countCoupons > $couponDetails->max_user_uses) {
                return redirect()->back()->with('flash_message_error','This coupon has been used!');
            }

*/






            $uses = DB::table('user_coupon')->where('coupon_id',$coupon_id)->count();
            //echo "<pre>"; print_r($uses); die;
            if ($uses > $couponDetails->max_uses) {
                $coupondata['err'] = 'This coupon crossed uses limit!';
                return $coupondata;
            }
            

            $user_max_use = DB::table('user_coupon')->where('coupon_id',$coupon_id)->where('user_id',$user_id)->count();

            //echo "<pre>"; print_r($couponDetails->max_uses_user); die;

            if ($user_max_use > $couponDetails->max_uses_user) {
                $coupondata['err'] = 'This coupon crossed uses limit for you!';
                return $coupondata;
            }

            
            

            // If coupon is Expired
            $expiry_time = $couponDetails->expiry_time;
            $current_date = date('Y-m-d');
            if($expiry_time < $current_date){
                $coupondata['err'] = 'This coupon is expired!';
                return $coupondata;
            }

            //coupon uses is valid



            // Coupon is Valid for Discount

            // Get Cart Total Amount
            if(Auth::check()){
                $user_email = Auth::user()->email;
                $userCart = DB::table('cart')->where(['user_email' => $user_email])->get();     
            }else{
                $session_id = Session::get('session_id');
                $userCart = DB::table('cart')->where(['session_id' => $session_id])->get();    
            }

            $total_amount = 0;
            foreach($userCart as $item){
               $total_amount = $total_amount + ($item->price * $item->quantity);
            }

            // Check if amount type is Fixed or Percentage
            if($couponDetails->amount_type=="Fixed"){
                $couponAmount = $couponDetails->amount;
            }else{
                $couponAmount = $total_amount * ($couponDetails->amount/100);
            }


/*
            $user_use_coupon_for_product = DB::table('user_coupon')->where('user_id' =>Auth::user()->id )->count();

            echo "<pre>"; print_r($user_use_coupon_for_product); die;

            if ($user_coupons == 0) {
                echo Auth::user()->name."have already used this coupon for this product";
            }
*/
            DB::table('user_coupon')->insert(
                 array(
                        'user_id'     =>   $user_id, 
                        'coupon_id'   =>   $couponDetails->id
                 )
            );
       
        
            // Add Coupon Code & Amount in Session
            Session::put('CouponAmount',$couponAmount);
            Session::put('CouponCode',$data['coupon_code']);

            $amount = Session::get('CouponAmount');

            //array_push($coupondata, $amount);

            $coupondata['amount'] = $amount;

            return $coupondata;

        }
    }

    public function checkout(Request $request){
        $user_id = Auth::user()->id;
        $user_email = Auth::user()->email;
        $userDetails = User::find($user_id);
        $countries = Country::get();

        //echo "<pre>"; print_r($user_id); die;

        //Check if Shipping Address exists
        $shippingCount = DeliveryAddress::where('user_id',$user_id)->count();

        //echo "<pre>"; print_r($shippingCount); die;
        $shippingDetails = array();


        if($shippingCount>0){
            $shippingDetails = DeliveryAddress::where('user_id',$user_id)->first();

        }


        // Update cart table with user email
        $session_id = Session::get('session_id');
        DB::table('cart')->where(['session_id'=>$session_id])->update(['user_email'=>$user_email]);
        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            // Return to Checkout page if any of the field is empty
            if(empty($data['billing_name']) || empty($data['billing_address']) || empty($data['billing_city']) || empty($data['billing_state']) || empty($data['billing_country']) || empty($data['billing_pincode']) || empty($data['billing_mobile']) || empty($data['shipping_name']) || empty($data['shipping_address']) || empty($data['shipping_city']) || empty($data['shipping_state']) || empty($data['shipping_country']) || empty($data['shipping_pincode']) || empty($data['shipping_mobile'])){
                    return redirect()->back()->with('flash_message_error','Please fill all fields to Checkout!');
            }

            // Update User details
            User::where('id',$user_id)->update(['name'=>$data['billing_name'],'address'=>$data['billing_address'],'city'=>$data['billing_city'],'state'=>$data['billing_state'],'pincode'=>$data['billing_pincode'],'country'=>$data['billing_country'],'mobile'=>$data['billing_mobile']]);

            if($shippingCount>0){
                // Update Shipping Address
                DeliveryAddress::where('user_id',$user_id)->update(['name'=>$data['shipping_name'],'address'=>$data['shipping_address'],'city'=>$data['shipping_city'],'state'=>$data['shipping_state'],'pincode'=>$data['shipping_pincode'],'country'=>$data['shipping_country'],'mobile'=>$data['shipping_mobile']]);
            }else{

                // Add New Shipping Address
                $shipping = new DeliveryAddress;
                $shipping->user_id = $user_id;
                $shipping->user_email = $user_email;
                $shipping->name = $data['shipping_name'];
                $shipping->address = $data['shipping_address'];
                $shipping->city = $data['shipping_city'];
                $shipping->state = $data['shipping_state'];
                $shipping->pincode = $data['shipping_pincode'];
                $shipping->country = $data['shipping_country'];
                $shipping->mobile = $data['shipping_mobile'];
                \Shippo::setApiKey('shippo_test_a764a17b2e3bb8305e11f345827ec9e35600d5c9');
                $fromAddress = \Shippo_Address::create( array(
                    "name" => $data['shipping_name'],
                    "company" => "Shippo",
                    "street1" => $data['shipping_address'],
                    "city" => $data['shipping_city'],
                    "state" => $data['shipping_state'],
                    "zip" => $data['shipping_pincode'],
                    "country" => $data['shipping_country'],
                    "phone" => $data['shipping_mobile'],
                    "email" => $user_email
                ));

                $result = \Shippo_Address::validate($fromAddress['object_id']);

                if ($result['is_complete'] == true) {
                    $shipping->save();
                }else{
                    return redirect()->back()->with('flash_message_success','Address is not currect!');
                }
                

            }
            return redirect()->action('CartController@orderReview');
        }

        return view('front.checkout')->with(compact('userDetails','countries','shippingDetails'));
    }

    public function orderReview(){
        $user_id = Auth::user()->id;
        $user_email = Auth::user()->email;
        $userDetails = User::where('id',$user_id)->first();
        $shippingDetails = DeliveryAddress::where('user_id',$user_id)->first();

        $shippingDetails = json_decode(json_encode($shippingDetails));
        $userCart = DB::table('cart')->where(['user_email' => $user_email])->get();
        //echo "<pre>"; print_r($userCart); die;


        foreach($userCart as $key => $product){
            if ($product->product_type == 'readymade-products') {
                $productDetails = Readymadeproduct::where('id',$product->product_id)->first();
            }else{
                $productDetails = Virtualproduct::where('id',$product->product_id)->first();
            }
            
            //$userCart[$key]->image = $productDetails->image;
        }
        //echo "<pre>"; print_r($userCart); die;
        return view('front.order_review')->with(compact('userDetails','shippingDetails','userCart'));
    }

    public function placeOrder(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $user_id = Auth::user()->id;
            $user_email = Auth::user()->email;

            // Get Shipping Address of User
            $shippingDetails = DeliveryAddress::where(['user_email' => $user_email])->first();
           
           // echo "<pre>"; print_r($shippingDetails); die;

            if(empty(Session::get('CouponCode'))){
               $coupon_code = ''; 
            }else{
               $coupon_code = Session::get('CouponCode'); 
            }

            if(empty(Session::get('CouponAmount'))){
               $coupon_amount = ''; 
            }else{
               $coupon_amount = Session::get('CouponAmount'); 
            }

            $order = new Order;
            $order->product_id = $data['product_id'];
            $order->user_id = $user_id;
            $order->user_email = $user_email;
            $order->name = $shippingDetails->name;
            $order->address = $shippingDetails->address;
            $order->city = $shippingDetails->city;
            $order->state = $shippingDetails->state;
            $order->pincode = $shippingDetails->pincode;
            $order->country = $shippingDetails->country;
            $order->mobile = $shippingDetails->mobile;
            $order->coupon_code = $coupon_code;
            $order->coupon_amount = $coupon_amount;
            $order->order_status = "New";
            $order->payment_method = $data['payment_method'];
            $order->grand_total = $data['grand_total'];
            $order->save();

            $order_id = DB::getPdo()->lastInsertId();
//echo "<pre>"; print_r($order_id); die;
            $cartProducts = DB::table('cart')->where(['user_email'=>$user_email])->get();
            foreach($cartProducts as $pro){
                $cartPro = new OrdersProduct;
                $cartPro->order_id = $order_id;
                $cartPro->user_id = $user_id;
                $cartPro->product_id = $pro->product_id;
                $cartPro->product_code = $pro->product_code;
                $cartPro->product_name = $pro->product_name;
                //$cartPro->product_color = $pro->product_color;
                //$cartPro->product_size = $pro->size;
                $cartPro->product_price = $pro->price;
                $cartPro->product_qty = $pro->quantity;
                $cartPro->save();
            }

            Session::put('order_id',$order_id);
            Session::put('grand_total',$data['grand_total']);
            
            if($data['payment_method']=="COD"){

                $productDetails = Order::with('orders')->where('id',$order_id)->first();
                $productDetails = json_decode(json_encode($productDetails),true);
                /*echo "<pre>"; print_r($productDetails);*/ /*die;*/

                $userDetails = User::where('id',$user_id)->first();
                $userDetails = json_decode(json_encode($userDetails),true);
                /*echo "<pre>"; print_r($userDetails); die;
*/
  



                /* Code for Order Email Start */              
                $email = $user_email;

                //settings of invoice
                $settings = collect(Invoicer::get())->keyBy('key');

                $settings = $settings->map(function($value, $key){
                    return $value->value;
                });

                // echo "<pre>"; print_r($settings); die;

                //our invoce is processing here
                $pdf = PDF::loadView('invoices.order', compact('productDetails','userDetails','order_id','settings'))
                ->setPaper($settings['paper_size']);

                if ($settings['enable_debug_output'] == 1 && $settings['enable_debug_output'] == 1) {
                    $pdf->setWarnings(true);
                }else{
                    $pdf->setWarnings(false);
                }

                if ($settings['spdf'] == "No") {
                    return false;
                }elseif($settings['spdf'] == "browser-tab"){
                    $pdf->stream('invoice.pdf');
                }else{
                    $pdf->download('invoice.pdf');
                }


                $name =  $order_id . '.' . 'pdf' ;

                // Get our disk to store the PDF in.

                $pdf->save('pdf/'.$name);

                // $pdf->download('invoice.pdf');

                $messageData = [
                    'email' => $email,
                    'name' => $shippingDetails->name,
                    'order_id' => $order_id,
                    'productDetails' => $productDetails,
                    'userDetails' => $userDetails,
                ];

                
                

                Mail::send('emails.order',$messageData,function($message) use($email,$pdf){
                    $message->to($email)->subject('Order Placed - Northsmen')->attachData($pdf->output(), "invoice.pdf");    
                });
                /* Code for Order Email Ends */


                
                
                // COD - Redirect user to thanks page after saving order
                 return redirect('/thanks');
                //return redirect('/courior');
            }else{
                // Paypal - Redirect user to paypal page after saving order
                 return redirect('/paypal');
                //return redirect('/courior');
            }
            

        }
    }



    public function thanks(Request $request){
        $user_email = Auth::user()->email;
        DB::table('cart')->where('user_email',$user_email)->delete();
        return view('orders.thanks');
    }

    public function thanksPaypal(){
        return view('orders.thanks_paypal');
    }

    public function paypal(Request $request){
        $user_email = Auth::user()->email;
        DB::table('cart')->where('user_email',$user_email)->delete();
        return view('orders.paypal');
    }

    public function cancelPaypal(){
        return view('orders.cancel_paypal');
    }

    public function userOrders(){
        $user_id = Auth::user()->id;
        $orders = Order::with('orders')->where('user_id',$user_id)->orderBy('id','DESC')->get();
        /*$orders = json_decode(json_encode($orders));
        echo "<pre>"; print_r($orders); die;*/
        return view('orders.user_orders')->with(compact('orders'));
    }

    public function userOrderDetails($order_id){
        $user_id = Auth::user()->id;
        $orderDetails = Order::with('orders')->where('id',$order_id)->first();
        $orderDetails = json_decode(json_encode($orderDetails));
        /*echo "<pre>"; print_r($orderDetails); die;*/
        return view('orders.user_order_details')->with(compact('orderDetails'));
    }

    public function viewOrders(){
        $orders = Order::with('orders')->orderBy('id','Desc')->get();
        $orders = json_decode(json_encode($orders));
        /*echo "<pre>"; print_r($orders); die;*/
        return view('admin.orders.view_orders')->with(compact('orders'));
    }

    public function viewOrderDetails($order_id){
        $orderDetails = Order::with('orders')->where('id',$order_id)->first();
        $orderDetails = json_decode(json_encode($orderDetails));
        /*echo "<pre>"; print_r($orderDetails); die;*/
        $user_id = $orderDetails->user_id;
        $userDetails = User::where('id',$user_id)->first();
        /*$userDetails = json_decode(json_encode($userDetails));
        echo "<pre>"; print_r($userDetails);*/
        return view('admin.orders.order_details')->with(compact('orderDetails','userDetails'));
    }

    public function updateOrderStatus(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            Order::where('id',$data['order_id'])->update(['order_status'=>$data['order_status']]);
            return redirect()->back()->with('flash_message_success','Order Status has been updated successfully!');
        }
    }
}
