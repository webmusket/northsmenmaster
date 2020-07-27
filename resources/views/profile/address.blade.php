@extends('layouts.master')
@section('content')
<div class="sectionpd">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                @include('profile.sidebar')
            </div>
            <div class="col-lg-8">
                
                @if(Session::has('flash_message_error'))
                    <div class="alert alert-secondary" role="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{!! session('flash_message_error') !!}</strong>
                    </div>
                @endif   
                @if(Session::has('flash_message_success'))
                    <div class="alert alert-secondary" role="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{!! session('flash_message_success') !!}</strong>
                    </div>
                @endif
                @foreach($address as $address)
                <div class="addresslist">
                    <p><strong>{{$address->name}}</strong></p>
                    <p> <strong>Adress:</strong> {{$address->address}}, {{$address->state}}, {{$address->country}}. {{$address->pincode}}</p>
                    <p><strong>Mobile:</strong> {{$address->mobile}}</p>
                </div>
                @endforeach

                 


                <div class="addressbtn">
                    <a class="nslightbtn" href="#" data-toggle="modal" data-target="#addaddress">Add Address</a>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="addaddress" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content adrs">

                                    
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Add or Edit your address</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="{{ url('/add-address') }}">{{ csrf_field() }}
                            <div class="modal-body">
                                   
                                <div class="addinfo">
                                    
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Name</label>
                                                <input name="name" type="text" class="form-control" id="inputEmail4" placeholder="Name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Email</label>
                                                <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress">Address</label>
                                            <input name="address" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                        </div>
                                        <div class="form-row">

                                            <div class="form-group col-md-6">
                                                <label for="state">State</label>
                                                <input name="state" type="text" class="form-control" id="state" placeholder="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="phone">Phone</label>
                                                <input name="mobile" type="text" class="form-control" id="phone" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputCity">City</label>
                                                <input name="city" type="text" class="form-control" id="inputCity">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="country">Country</label>
                                                <select name="country" id="inputState" class="form-control">
                                                    <option selected>Choose...</option>
                                                    @foreach($countries as $country)
                                                    <option value="{{ $country->country_name }}">{{$country->country_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="inputZip">Zip</label>
                                                <input name="pincode" type="text" class="form-control" id="inputZip">
                                            </div>
                                        </div>

                                    
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal -->

            </div>
        </div>
    </div>
</div>
@endsection