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

                    <h1>Wish List</h1>
                </div>
                <div class="alert alert-light">
                   <div class="wishlist">
                    <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">List One</a>
                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">List Two</a>
                                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">List three</a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">List four</a>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                
                                <div class="row">
                                    <div class="col-4">
                                        <a href="#" class="card cardproduct">
                                        <img src="./assets/img/single-img/01.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build</p>
                                            <p class="card-text">150$</p>
                                        </div>
                                    </a>
                                    </div>
                                       <div class="col-4">
                                        <a href="#" class="card cardproduct">
                                        <img src="./assets/img/single-img/01.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build</p>
                                            <p class="card-text">150$</p>
                                        </div>
                                    </a>
                                    </div>
                                       <div class="col-4">
                                        <a href="#" class="card cardproduct">
                                        <img src="./assets/img/single-img/01.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build</p>
                                            <p class="card-text">150$</p>
                                        </div>
                                    </a>
                                    </div>
                                </div>
                                
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                
                                <div class="row">
                                    <div class="col-4">
                                        <a href="#" class="card cardproduct">
                                        <img src="./assets/img/single-img/01.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build</p>
                                            <p class="card-text">150$</p>
                                        </div>
                                    </a>
                                    </div>
                                       <div class="col-4">
                                        <a href="#" class="card cardproduct">
                                        <img src="./assets/img/single-img/01.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build3434</p>
                                            <p class="card-text">150$</p>
                                        </div>
                                    </a>
                                    </div>
                                       <div class="col-4">
                                        <a href="#" class="card cardproduct">
                                        <img src="./assets/img/single-img/01.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build</p>
                                            <p class="card-text">150$</p>
                                        </div>
                                    </a>
                                    </div>
                                </div>
                                
                                </div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                
                                <div class="row">
                                    <div class="col-4">
                                        <a href="#" class="card cardproduct">
                                        <img src="./assets/img/single-img/01.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build</p>
                                            <p class="card-text">150$</p>
                                        </div>
                                    </a>
                                    </div>
                                       <div class="col-4">
                                        <a href="#" class="card cardproduct">
                                        <img src="./assets/img/single-img/01.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build33</p>
                                            <p class="card-text">150$</p>
                                        </div>
                                    </a>
                                    </div>
                                       <div class="col-4">
                                        <a href="#" class="card cardproduct">
                                        <img src="./assets/img/single-img/01.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build</p>
                                            <p class="card-text">150$</p>
                                        </div>
                                    </a>
                                    </div>
                                </div>
                                
                                </div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                
                                <div class="row">
                                    <div class="col-4">
                                        <a href="#" class="card cardproduct">
                                        <img src="./assets/img/single-img/01.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build3435353</p>
                                            <p class="card-text">150$</p>
                                        </div>
                                    </a>
                                    </div>
                                       <div class="col-4">
                                        <a href="#" class="card cardproduct">
                                        <img src="./assets/img/single-img/01.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build</p>
                                            <p class="card-text">150$</p>
                                        </div>
                                    </a>
                                    </div>
                                       <div class="col-4">
                                        <a href="#" class="card cardproduct">
                                        <img src="./assets/img/single-img/01.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build</p>
                                            <p class="card-text">150$</p>
                                        </div>
                                    </a>
                                    </div>
                                </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               </div>
           
                </div>
                </div>
        </div>
    </div>
</div>
@endsection