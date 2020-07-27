@extends('layouts.master')
@section('content')


<div class="sectionpd">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                 @include('profile.sidebar')
            </div>
            <div class="col-lg-8">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Well done!</h4>
                    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                    <hr>
                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                </div>

                <div class="refferfriend">
                    <h4>Give 10% and Get 10% off</h4>
                    <div class="email-subscription-form">
                        <p class="form__label alert alert-danger">Referrer: {{ Auth::user()->referrer->username ?? 'Not Specified' }}<br>
                    Refferal count: {{ count(Auth::user()->referrals)  ?? '0' }}</p>
                        <form action="index.html">
                            <input id="myInput" type="text" value="{{ Auth::user()->referral_link }}" placeholder="Email Address">
                            <input onclick="myFunction()" class="btn btn-secondary"  value="Copy Now">
                        </form>
                        <form action="index.html">

                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                            <input  id="myInput" type="hidden" value="{{ Auth::user()->referral_link }}" placeholder="Email Address">
                            <input onclick="myFunction()" class="btn btn-secondary"  value="Send Email">
                        </form>
                    </div>
                </div>

                <div class="socialicon">

                        <?php  

                            $share = Share::page(Auth::user()->referral_link, 'Share title ssss')
                                    ->facebook('Extra linkedin summary can be passed here')
                                    ->twitter()
                                    ->linkedin('Extra linkedin summary can be passed here')
                                    ->whatsapp();

                            echo($share);
                        ?>      

                </div>

                <div class="refferlist">

                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Country</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $users =  Auth::user()->referrals; ?>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{$user->city}</td>
                                <td>{{$user->state}}</td>
                                <td>{$user->country}</td>
                            </tr>
                            @endforeach
                            
                            
                        </tbody>
                       
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection