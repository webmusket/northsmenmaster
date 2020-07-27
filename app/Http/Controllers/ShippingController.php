<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShippingController extends Controller
{
    public function __construct()
    {
        \Shippo::setApiKey('shippo_test_a764a17b2e3bb8305e11f345827ec9e35600d5c9');
    }

    public function shipping(){
    	try {
    		return view('courior.courior');
    	}catch (\Exception $e) {
            $error = $e->getMessage();
            return view('error.404')->with('error');
        }
    }

    public function getshippinglevel($id = null){
    	try { 
	    	$transaction = \Shippo_Transaction::create( array( 
			    'rate' => $id, 
			    'label_file_type' => "PDF", 
			    'async' => false ) );

	    	return $transaction;
	    }catch (\Exception $e) {
            $error = $e->getMessage();
            return view('error.404')->with('error');
        }
    }

    public function getshippingdata($userdata){
    	$fromAddress = array(
		    'name' => 'Shawn Ippotle',
		    'street1' => '215 Clayton St.',
		    'city' => 'San Francisco',
		    'state' => 'CA',
		    'zip' => '94117',
		    'country' => 'US'
		);

		$toAddress = array(
		    'name' => 'Mr Hippo"',
		    'street1' => 'Broadway 1',
		    'city' => 'New York',
		    'state' => 'NY',
		    'zip' => '10007',
		    'country' => 'US',
		    'phone' => '+1 555 341 9393'
		);

		$parcel = array(
		    'length'=> '5',
		    'width'=> '5',
		    'height'=> '5',
		    'distance_unit'=> 'in',
		    'weight'=> '2',
		    'mass_unit'=> 'lb',
		);
    }
}
