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

                    <h1>Card Pending</h1>
                </div>

                <div class="card card-bpd">
                    <h5 class="card-header light">
                        <span>Reference: 142344719</span> <span>Date: 05/01/2020</span>
                    </h5>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <a href="#" class="card cardproduct">
                                                <img src="./assets/img/single-img/01.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <p class="card-text">Some quick example text to build</p>
                                                    <p class="card-text">150$</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-4">
                                            <a href="#" class="card cardproduct">
                                                <img src="./assets/img/single-img/01.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <p class="card-text">Some quick example text to build</p>
                                                    <p class="card-text">150$</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="#" class="card cardproduct">
                                                <img src="./assets/img/single-img/01.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <p class="card-text">Some quick example text to build</p>
                                                    <p class="card-text">150$</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="#" class="card cardproduct">
                                                <img src="./assets/img/single-img/01.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <p class="card-text">Some quick example text to build</p>
                                                    <p class="card-text">150$</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
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
                                <div class="col-lg-3">
                                    <div class="dsubtotal">
                                        <ul>
                                            <li><strong>Card Total:</strong> 120$</li>
                                            <li><strong>Shipping:</strong> Free</li>
                                            <li><strong>Total:</strong> 120$</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-rignt">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Delete</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Modify</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nslightbtn" href="order-card.php">Finish Order</a>
                            </li>
                        </ul>

                    </div>
                </div>


                <div class="card card-bpd">
                    <h5 class="card-header light">
                        <span>Reference: 142344719</span> <span>Date: 05/01/2020</span>
                    </h5>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="#" class="card cardproduct">
                                        <img src="./assets/img/single-img/01.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build</p>
                                            <p class="card-text">150$</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="#" class="card cardproduct">
                                        <img src="./assets/img/single-img/01.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build</p>
                                            <p class="card-text">150$</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="#" class="card cardproduct">
                                        <img src="./assets/img/single-img/01.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build</p>
                                            <p class="card-text">150$</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
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
                    <div class="card-footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#">Delete</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Modify</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link nslightbtn" href="#">Finish Order</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <div class="dsubtotal righttx">
                                        <ul>
                                            <li><strong>Card Total:</strong> 120$</li>
                                            <li><strong>Shipping:</strong> Free</li>
                                            <li><strong>Total:</strong> 120$</li>
                                        </ul>
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