@extends('layouts.master')
@section('content')
<div id="app" class="sectionpd">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="rightcontainer">






@if(isset($service))
@if($service == 'facebook')
<div class="title m-b-md">
    Welcome {{ $details->user['name']}} ! <br> Your email is : {{
    $details->user['email'] }} <br> You are {{ $details->user['gender'] }}.
</div>
@endif
@endif


                    <div class="alert alert-secondary">
                        <ul>
                            <li>
                                <span>Md Arafat Rahman</span>
                            </li>
                            <li>
                                <strong>Email:</strong> arafatraj@gmail.com
                            </li>
                        </ul>
                    </div>
                    
                    <div class="list-group">
                        <router-link to="/" class="list-group-item list-group-item-action active">Pending Carts</router-link>
                        <router-link to="/" class="list-group-item list-group-item-action">Order records</router-link>
                        <router-link to="/measurement" class="list-group-item list-group-item-action">Customer Data</router-link>
                        <router-link to="/profile" class="list-group-item list-group-item-action">Profiles</router-link>
                        <a href="#" class="list-group-item list-group-item-action">Address</a>
                        <a href="#" class="list-group-item list-group-item-action">INVITE YOUR FRIENDS</a>
                    </div>



                </div>
            </div>
            

            <profile></profile>


        </div>
    </div>
</div>

<script src="{{ asset('js/app.js') }} "></script>
@endsection