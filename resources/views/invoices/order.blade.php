<html>
<head>
<title>Invoice</title>
<style type="text/css">
	#page-wrap {
		width: 700px;
		margin: 0 auto;
	}
	.center-justified {
		text-align: justify;
		margin: 0 auto;
		width: 30em;
	}
	.order-invoice{
		border: 2px solid;
    	padding: 10px;
	}
	table.outline-table {
		border: 1px solid;
		border-spacing: 0;
	}
	tr .border{
		border: 1px solid;
	}
	tr.border-bottom td, td.border-bottom {
		border-bottom: 1px solid;
	}
	tr.border-top td, td.border-top {
		border-top: 1px solid;
	}
	tr.border-right td, td.border-right {
		border-right: 1px solid;
	}
	tr.border-right td:last-child {
		border-right: 0px;
	}
	tr.center td, td.center {
		text-align: center;
		vertical-align: text-top;
	}
	td.pad-left {
		padding-left: 5px;
	}
	tr.right-center td, td.right-center {
		text-align: right;
		padding-right: 50px;
	}
	tr.right td, td.right {
		text-align: right;
	}
	.grey {
		background:grey;
	}
</style>
</head>
<body>
	<div id="page-wrap">
		<table width="100%">
			<tbody>
				<tr>
					<td width="20%">
						<img width="90%" src="{{ asset('assets/img/Northsmen-Logo-Final.jpg') }}">
					</td>
					<td width="50%">
						<h4>{{$settings['shop_name']}}</h4>

                        <strong>Date:</strong> <?php echo date('d/M/Y');?><br>
                        <strong>Shop Address:</strong> {{$settings['shop_address']}}<br>
                        <strong>Web:</strong>https://northsmen.com<br>
                        @if($settings['enable_debug_output'] == 1 && $settings['display_email_address'] == 1)
                        	<strong>Email:</strong>northsmen@gmail.com<br>
                        @endif
                        @if($settings['enable_debug_output'] == 1 && $settings['display_phone_number'] == 1)
                        	<strong>Tel:</strong>+8801765650844<br>
                        @endif
                        
                        <strong>Fax:</strong>12345<br>
					</td width="30%">
					<td>
						<h2>Order Invoice</h2><br>
                        <div class="order-invoice">
                            <strong>Order No:</strong>{{ $order_id }}<br>
                            <strong>Invoice Number:</strong> BF123<br>
                            <strong>Date:</strong> <?php echo date('d/M/Y');?><br>
                        </div>
					</td>
				</tr>
			</tbody>
		</table>
		<p>&nbsp;</p>
		<table width="100%">
			<tbody>
				<tr>
					<td width="20%">
						<strong>Billing Address</strong>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
					</td>
					<td width="40%">
                        <strong>Name:</strong> {{ $userDetails['name'] }}<br>
                        <strong>Address:</strong>{{ $userDetails['address'] }}<br>
                        <strong>City:</strong>{{ $userDetails['city'] }}<br>
                        <strong>State:</strong>{{ $userDetails['state'] }}<br>
                        <strong>Country:</strong> {{ $userDetails['country'] }}<br>
                        <strong>Pincode:</strong>{{ $userDetails['pincode'] }}<br>
                        <strong>Mobile:</strong>{{ $userDetails['mobile'] }}<br>
					</td>
					@if($settings['enable_debug_output'] == 1 && $settings['display_shipping_address'] == 1)
						<td width="20%">
							<strong>Shipping Address</strong>
	                        <br>
	                        <br>
	                        <br>
	                        <br>
	                        <br>
	                        <br>

						</td>
						<td width="40%">

	                        <strong>Name:</strong> {{ $productDetails['name'] }}<br>
	                        <strong>Address:</strong>{{ $productDetails['address'] }}<br>
	                        <strong>City:</strong>{{ $productDetails['city'] }}<br>
	                        <strong>State:</strong>{{ $productDetails['state'] }}<br>
	                        <strong>Country:</strong> {{ $productDetails['country'] }}<br>
	                        <strong>Pincode:</strong>{{ $productDetails['pincode'] }}<br>
	                        <strong>Mobile:</strong>{{ $productDetails['mobile'] }}<br>
						</td>
					@endif
				</tr>
			</tbody>
		</table>
		<p>&nbsp;</p>
		<table width="100%" class="outline-table">
			<tbody>
				<tr class="border-bottom border-right grey">
					<td colspan="3"><strong>Sales Report</strong></td>
				</tr>
<!--  -->		<tr class="border-bottom border-right center">
                    <td width="100%">Activity</td>
                </tr>
			</tbody>
		</table>
		<p>&nbsp;</p>
		<table width="100%" class="outline-table">
			<tbody>
				<tr class="border-bottom border-right grey">
					<td class="center" width="20%"><strong>Product Name</strong></td>
					<td class="center" width="20%"><strong>Product Code</strong></td>
					<td class="center" width="20%"><strong>Quantity</strong></td>
					<td class="center" width="20%"><strong>Unit Price</strong></td>
					<td class="center" width="20%"><strong>Subtotal</strong></td>
				</tr>
				@foreach($productDetails['orders'] as $product)
					<tr class="border-right">
	                    <td class="center" width="40%"><strong>{{ $product['product_name'] }}</strong></td>
						<td class="center" width="40%"><strong>{{ $product['product_code'] }}</strong></td>
						<td class="center" width="20%"><strong>{{ $product['product_qty'] }}</strong></td>
						<td class="center" width="20%"><strong>{{ $product['product_price'] }}</strong></td>
						<td class="center" width="20%"><strong>{{ $product['product_price'] * $product['product_qty'] }}</strong></td>
	                </tr>
                @endforeach
			</tbody>
		</table>
		<p>&nbsp;</p>
		
		<table width="100%">
			<tbody>
				<tr>
					<td colspan="3" align="right">Shipping Charges</td><td>$ {{ $productDetails['shipping_charges'] }}</td>
				</tr>
				<tr>
					<td colspan="3" align="right">Coupon Discount</td><td>$ {{ $productDetails['coupon_amount'] }}</td>
				</tr>
				<tr>
					<td colspan="3" align="right">Grand Total</td><td>$ {{ $productDetails['grand_total'] }}</td>
				</tr>
			</tbody>
		</table>
		<p>&nbsp;</p>
		<table>
			<tbody>
				<tr><td>&nbsp;</td></tr>
				@if($settings['enable_debug_output'] == 1 && $settings['display_email_address'] == 1)
					<tr>
						<td>For any enquiries, you can contact us at <a href="makehub00@gmail.com">		sultanasad8@mail.com</a>
						</td>
					</tr>
				@endif
					<tr><td>&nbsp;</td></tr>
					<tr><td>Regards,<br> Northsmen.com</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><td>{{$settings['footer_terms_policies']}}</td></tr>
			</tbody>
		</table>
	</div>
</body>
</html>