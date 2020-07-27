
@extends('layouts.master')
@section('content')

<style type="text/css">
    .panel-title {
    display: inline;
    font-weight: bold;
    }
    .display-table {
        display: table;
    }
    .display-tr {
        display: table-row;
    }
    .display-td {
        display: table-cell;
        vertical-align: middle;
        width: 61%;
    }
</style>

	<div class="container">
		<div class="row">
	        <div class="col-md-6 col-md-offset-3">
	            <div class="panel panel-default credit-card-box">
	                <div class="panel-heading display-table" >
	                    <div class="row display-tr" >
	                        <h3 class="panel-title display-td" >Payment Details</h3>
	                        <div class="display-td" >                            
	                            <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
	                        </div>
	                    </div>                    
	                </div>
	                <div class="panel-body">
	  
	                    @if (Session::has('success'))
	                        <div class="alert alert-success text-center">
	                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	                            <p>{{ Session::get('success') }}</p>
	                        </div>
	                    @endif
	  
	                    <form role="form" action="{{ url('stripe/save') }}" method="post" class="require-validation"
	                                                     data-cc-on-file="false"
	                                                    data-stripe-publishable-key="pk_test_bR3f0f5NxWXKFd1pZzVikdUt00dfFLEpOw"
	                                                    id="payment-form">
	                        @csrf
	  
	                        <div class='form-row row'>
	                            <div class='col-xs-12 form-group required'>
	                                <label class='control-label'>Name on Card</label> <input
	                                    class='form-control' value="Test" size='4' type='text'>
	                            </div>
	                        </div>
	  
	                        <div class='form-row row'>
	                            <div class='col-xs-12 form-group card required'>
	                                <label class='control-label'>Card Number</label> <input
	                                    autocomplete='off' value="4242 4242 4242 4242" class='form-control card-number' size='20'
	                                    type='text'>
	                            </div>
	                        </div>
	  
	                        <div class='form-row row'>
	                            <div class='col-xs-12 col-md-4 form-group cvc required'>
	                                <label class='control-label'>CVC</label> <input value="123" autocomplete='off'
	                                    class='form-control card-cvc' placeholder='ex. 311' size='4'
	                                    type='text'>
	                            </div>
	                            <div class='col-xs-12 col-md-4 form-group expiration required'>
	                                <label class='control-label'>Expiration Month</label> <input
	                                    class='form-control card-expiry-month' value="12" placeholder='MM' size='2'
	                                    type='text'>
	                            </div>
	                            <div class='col-xs-12 col-md-4 form-group expiration required'>
	                                <label class='control-label'>Expiration Year</label> <input
	                                    class='form-control card-expiry-year' value="2024" placeholder='YYYY' size='4'
	                                    type='text'>
	                            </div>
	                        </div>
	  

	  
	                        <div class="row">
	                            <div class="col-xs-12">
	                                <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now</button>
	                            </div>
	                        </div>
	                          
	                    </form>
	                </div>
	            </div>        
	        </div>
	    </div>
	</div>

@endsection

