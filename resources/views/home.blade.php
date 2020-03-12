
@extends('layouts.master')
@section('content')
<div class="sectionpd">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                @include('profile.sidebar')
            </div>
            <div class="col-lg-8">
                <div class="alert alert-danger" role="alert">
                    A simple danger alert—check it out!
                </div>

                <div class="deshheding">

                    <h1>Profile Information</h1>
                </div>

                <div class="profile-info">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            <small id="passwordHelp" class="form-text text-muted"><a href="#">Change Password</a></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                            <small id="emailHelp" class="form-text text-muted">Enter your Full Name</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">Enter your Full Address</small>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">receive newsletter</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>


                </div>

            </div>
        </div>
    </div>
</div>
@endsection