<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App;
use Session;
use App\Cart;
use Carbon\Carbon; 
use App\Measurement;  

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        return view('home')->with(compact('user'));
    }


    

    public function userCart(){

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

        return $data;





        
        // // $date = json_decode(json_encode($date), true);

        // // //return $databyday;

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
        
    }

    public function profileInfo(){
       return Auth::user();
    }

    public function profileMeasurement(){
        $measurement = Measurement::select('id','own', 'measurement_name','height', 'weight')
                        ->where('user_id',Auth::user()->id)
                        ->get();
        return view('profile.measurement')->with('measurement');
    }

    public function showMeasurement($id){
        $measurement = Measurement::where('id',$id)->first();
        return $measurement;
    }

    public function wishlist(){
        return view('profile.wishlist');
    }

    public function pendingcarts(){
        return view('profile.pendingcarts');
    }

    public function invitefriends(){
        return view('profile.invitefriends');
    }

    public function address(){
        return view('profile.address');
    }

    public function userorder(){
        return view('profile.orderrecords');
    }

    

    
    
}
