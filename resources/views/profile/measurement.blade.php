@extends('layouts.master')
@section('content')
<div class="sectionpd">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                 @include('profile.sidebar')
            </div>

            <div class="col-lg-8">
                <div class="alert alert-secondary" role="alert">

                    A simple secondary alert—check it out!
                </div>


                <div class="addresslist">
                    <p><strong>Md. Arafat Rahman</strong></p>
                    <p> <strong>Hight:</strong> 5Fit</p>
                </div>
                <div class="addresslist">
                    <p><strong>Md. Arafat Rahman</strong></p>
                    <p> <strong>Hight:</strong> 5Fit</p>
                </div>
                <div class="addresslist">
                    <p><strong>Md. Arafat Rahman</strong></p>
                    <p> <strong>Hight:</strong> 5Fit</p>
                </div>

                <div class="addressbtn">
                    <a class="nslightbtn" href="measurements.php">Add Mesurement</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection