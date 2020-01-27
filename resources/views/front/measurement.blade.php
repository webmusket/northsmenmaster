@extends('layouts.master')
@section('content')

<div class="measurementdiv">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
               <div class="mesurement-heading">
                   <h4>My Measurements</h4>
               </div>
               <div class="mesurementwcbox">
                   <h3>Welcome to the Measurement Wizard</h3>
                   <p>It looks like you already have a set of saved Measurements!</p>
                   <p><span>WARNING</span> - Completing the wizard again will save over all of your previously recorded measurements.</p>
                   <div class="wizard-btn">
                       <a href="/startwizard" class="boxed-btn">Start Wizard</a> <a href="#" class="boxed-btn">Checkout</a>
                   </div>
                   <a class="btn btn-primary" href="/editmeasurement">Edit Measurement</a>
               </div>
            </div>
        </div>
    </div>
</div>


@endsection