@extends('layouts.master')
@section('content')
<?php use App\Order; ?>
<section id="cart_items">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
			  <li><a href="/">Home</a></li>
			  <li class="active">Courior</li>
			</ol>
		</div>
	</div>
</section>

<section id="do_action">
	<div class="container">
		<div class="heading" align="center">
			<h3>YOUR ORDER HAS BEEN PLACED</h3>
			<p>Your order number is {{ Session::get('order_id') }} and total payable about is $ {{ Session::get('grand_total') }}</p>
			<p>Please make select courior you want to pay</p>
			<?php
			
			$orderDetails = Order::getOrderDetails(Session::get('order_id'));
			$orderDetails = json_decode(json_encode($orderDetails));
			
			$nameArr = explode(' ',$orderDetails->name);
			
			//$getCountryCode = Order::getCountryCode($orderDetails->country);
			?>

			<?php //echo "<pre>"; print_r($orderDetails); die; ?>
			

		</div>
	</div>
</section>





<?php

// \Shippo::setApiKey('shippo_live_b2ad469ba1ffeff05b1d6cdefa8b412135576bc5');
 \Shippo::setApiKey('shippo_test_a764a17b2e3bb8305e11f345827ec9e35600d5c9');
	$fromAddress = array(
	    'name' => 'Shawn Ippotle',
	    'street1' => '215 Clayton St.',
	    'city' => 'San Francisco',
	    'state' => 'CA',
	    'zip' => '94117',
	    'country' => 'US'
	);

	$toAddress = array(
	    'name' => 'Ms Hippo',
	    'company' => 'San Diego Zoo',
	    'street1' => '2920 Zoo Drive',
	    'city' => 'San Diego',
	    'state' => 'CA',
	    'zip' => '92101',
	    'country' => 'US',
	    'phone' => '+1 555 341 9393',
	    'email' => 'ms-hippo@goshipppo.com',
	);


	$parcel = array(
	    'length'=> '5',
	    'width'=> '5',
	    'height'=> '5',
	    'distance_unit'=> 'in',
	    'weight'=> '2',
	    'mass_unit'=> 'lb',
	);

	$shipment = Shippo_Shipment::create( array(
	    'address_from'=> $fromAddress,
	    'address_to'=> $toAddress,
	    'parcels'=> array($parcel),
	    'async'=> false
	    )
	);



// Session::forget('grand_total');
// Session::forget('order_id');
?>

<div id="app">
	<shipping shipment="{{$shipment}}"></shipping>
</div>

<script src="{{ asset('js/app.js') }}" defer></script>
@endsection
