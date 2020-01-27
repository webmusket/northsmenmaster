@extends('layouts.master')
@section('content')

<?php 
$measurement = App\Measurement::find(1);

 ?>

<div class="measurementdiv">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mesurement-heading">
                    <h4>My Measurements</h4>
                </div>
                <div class="mesurement-container">

                    <div id="mesurementslider" class="carousel slide" id="myCarousel" data-ride="carousel" data-interval="false">
                        <div class="carousel-inner">
                           
                            <div class="carousel-item active">
                                <div class="mesurementwcbox">
                                    <h3>The Basic</h3>
                                    <a  class="measureStandard" href="#">Standard</a> / <a class="measureMetric" href="#">Metric</a>
                                    <section class="mesure-info" id="standardM">
                                        <label for="Height">Height:</label>
                                        <select name="" class= "fValue" id="fValue1">
                                            <option disabled selected value></option>
                                            <option value="0">0</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                        <label for="Fit">Fit:</label>
                                        <select name="" id="fValue2">
                                            <option disabled selected value></option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                        <label for="In">In.</label> <br>
                                        <label for="Weight">Weight:</label>
                                        <input type="number" id="wValue1" class="wValue">
                                        <label for="">Pounds</label>
                                    </section>

                                    <section class="mesure-info" id="metricM">
                                        <label for="Height">Height:</label>
                                        <input type="number" id="fValue3" class="fValue">
                                        <label for="CM">CM.</label> <br>
                                        <label for="Weight">Weight:</label>
                                        <input type="number" id="wValue2" class="wValue">
                                        <label for="">KGS</label>
                                    </section>
                                </div>

                                <p id="errorAlert"></p>
                            </div>
                            
                            <div class="carousel-item">
                                <div class="mesurementwcbox">
                                    <h3>Body Shape</h3>
                                    <p>Select the images that best describe you.</p>

                                    <div class="mesure-imfbox">

                                        <p><strong>How is your back posture?</strong></p>

                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label>
                                                    <input type="radio" name="backposture">
                                                    <div class="mimg">
                                                        <img src="./assets/img/measurements/generalmm_shape_straight.jpg" alt="Straight">
                                                        <p>Straight</p>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label>
                                                    <input type="radio" name="backposture" checked>
                                                    <div class="mimg">
                                                        <img src="./assets/img/measurements/generalmm_shape_average.jpg" alt="Normal">
                                                        <p>Normal</p>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label>
                                                    <input type="radio" name="backposture">
                                                    <div class="mimg">
                                                        <img src="./assets/img/measurements/generalmm_shape_forward_leaning.jpg" alt="Forward Leaning">
                                                        <p>Forward Leaning</p>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>

                                        <p><strong>What’s your shoulder type?</strong></p>

                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label>
                                                    <input type="radio" name="shoulder">                      
                                                    <div class="mimg">
                                                        <img src="./assets/img/measurements/generalmm_shoulder_square_straight.png" alt="Even">
                                                        <p>Even</p>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-lg-4">
                                                 <label>
                                                    <input type="radio" name="shoulder" checked>                   
                                                    <div class="mimg">
                                                        <img src="./assets/img/measurements/generalmm_shoulder_normal.png" alt="Average">
                                                        <p>Average</p>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label>
                                                    <input type="radio" name="shoulder">  
                                                    <div class="mimg">
                                                        <img src="./assets/img/measurements/generalmm_shoulder_sloping.png" alt="Sloping">
                                                        <p>Sloping</p>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>

                                        <p><strong>Do you have an angled shoulder?</strong></p>

                                        <div class="row">
                                            <div class="col-lg-4">
                                                 <label>
                                                    <input type="radio" name="ashoulder">                        
                                                    <div class="mimg">
                                                        <img src="./assets/img/measurements/generalmm_shoulder_left.jpg" alt="Lower Left">
                                                        <p>Lower Left</p>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label>
                                                    <input type="radio" name="ashoulder" checked>    
                                                    <div class="mimg">
                                                        <img src="./assets/img/measurements/generalmm_shoulder_even.png" alt="Even">
                                                        <p>Even</p>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label>
                                                    <input type="radio" name="ashoulder">    
                                                    <div class="mimg">
                                                        <img src="./assets/img/measurements/generalmm_shoulder_right.jpg" alt="Lower Right">
                                                        <p>Lower Right</p>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            
                            <div class="carousel-item">
                                <div class="mesurementfitbox">
                                    <h3>Fit Preference</h3>
                                    <p>Select your fit preference. We will craft your custom garments based on your unique body measurements while accounting for this selection.</p>
                                    <div class="fit-mcontentbox">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label>
                                                    <input type="radio" name="fit"> 
                                                    <div class="fit-mimg">
                                                        <img src="./assets/img/measurements/slim-fit.png" alt="Slim Fit">
                                                        <p>Slim Fit (Slimmest)</p>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label>
                                                    <input type="radio" name="fit" checked> 
                                                    <div class="fit-mimg">
                                                        <img src="./assets/img/measurements/tailored-fit.png" alt="Tailored Fit">
                                                        <p>Tailored Fit (Slimmer)</p>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label>
                                                    <input type="radio" name="fit"> 
                                                    <div class="fit-mimg">
                                                        <img src="./assets/img/measurements/standard-fit.png" alt="Standard Fit">
                                                        <p>Standard Fit (Relaxed)</p>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="carousel-item">
                                <div class="mesurementfitbox">
                                    <h3>Neck</h3>
                                    <div class="mvideodiv">
                                        <video width="100%" height="100%" controls>
                                            <source src="./assets/img/measurements/Neck-v2.mp4" type="video/mp4">
                                        </video>
                                        <div class="mvideoinfo">
                                            <p>Input your Neck (?) measurement to the nearest quarter inch.</p>
                                            <div class="input-group mb-3">
                                                <span class="input-group-prepend">
                                                    <button class="btn btn-dark btn-sm minus-btn" id="minus-btn"><i class="fa fa-minus"></i></button>
                                                </span>
                                                <input type="number" id="qty1" class="form-control form-control-sm qty_input" value="1" min="1">
                                                <span class="input-group-append">
                                                    <button class="btn btn-dark btn-sm plus-btn" id="plus-btn"><i class="fa fa-plus"></i></button>
                                                </span>
                                                
                                            </div>
                                            <span class="min-CM"><a href="#" class="measureStandard disabled">IN</a>/<a href="#" class="measureMetric">CM</a></span>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                              <!-- Neck-->
                               
                               <div class="carousel-item">
                                <div class="mesurementfitbox">
                                    <h3>Jacket Length</h3>
                                    <div class="mvideodiv">
                                        <video width="100%" height="100%" controls>
                                            <source src="./assets/img/measurements/Jacket_and_Shirt_Length-v2.mp4" type="video/mp4">
                                        </video>
                                        <div class="mvideoinfo">
                                            <p>Input your Jacket Length (?) measurement to the nearest quarter inch.</p>
                                            <div class="input-group mb-3">
                                                <span class="input-group-prepend">
                                                    <button class="btn btn-dark btn-sm minus-btn" id="minus-btn"><i class="fa fa-minus"></i></button>
                                                </span>
                                                <input type="number" id="qty2" class="form-control form-control-sm qty_input" value="{{$measurement->jacket_length}}" min="1">
                                                <span class="input-group-append">
                                                    <button class="btn btn-dark btn-sm plus-btn" id="plus-btn"><i class="fa fa-plus"></i></button>
                                                </span>
                                                
                                            </div>
                                            <span class="min-CM"><a href="#" class="measureStandard">IN</a>/<a href="#" class="measureMetric">CM</a></span>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- Jacket Length-->
                               
                               <div class="carousel-item">
                                <div class="mesurementfitbox">
                                    <h3>Chest Size</h3>
                                    <div class="mvideodiv">
                                        <video width="100%" height="100%" controls>
                                            <source src="./assets/img/measurements/Chest-v2.mp4" type="video/mp4">
                                        </video>
                                        <div class="mvideoinfo">
                                            <p>Input your Chest Size (?) measurement to the nearest quarter inch.</p>
                                            <div class="input-group mb-3">
                                                <span class="input-group-prepend">
                                                    <button class="btn btn-dark btn-sm minus-btn" id="minus-btn"><i class="fa fa-minus"></i></button>
                                                </span>
                                                <input type="number" id="qty3" class="form-control form-control-sm qty_input" value="{{$measurement->chest}}" min="1">
                                                <span class="input-group-append">
                                                    <button class="btn btn-dark btn-sm plus-btn" id="plus-btn"><i class="fa fa-plus"></i></button>
                                                </span>
                                                
                                            </div>
                                            <span class="min-CM"><a href="#" class="measureStandard">IN</a>/<a href="#" class="measureMetric">CM</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Chest Size-->
                               
                               
                               <div class="carousel-item">
                                <div class="mesurementfitbox">
                                    <h3>Stomach Size</h3>
                                    <div class="mvideodiv">
                                        <video width="100%" height="100%" controls>
                                            <source src="./assets/img/measurements/Stomach_Size-v2.mp4" type="video/mp4">
                                        </video>
                                        <div class="mvideoinfo">
                                            <p>Input your Stomach Size (?) measurement to the nearest quarter inch.</p>
                                            <div class="input-group mb-3">
                                                <span class="input-group-prepend">
                                                    <button class="btn btn-dark btn-sm minus-btn" id="minus-btn"><i class="fa fa-minus"></i></button>
                                                </span>
                                                <input type="number" id="qty4" class="form-control form-control-sm qty_input" value="{{$measurement->stomach}}" min="1">
                                                <span class="input-group-append">
                                                    <button class="btn btn-dark btn-sm plus-btn" id="plus-btn"><i class="fa fa-plus"></i></button>
                                                </span>
                                                
                                            </div>
                                            <span class="min-CM"><a href="#" class="measureStandard">IN</a>/<a href="#" class="measureMetric">CM</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Stomach Size-->



                               
                               
                               <div class="carousel-item">
                                <div class="mesurementfitbox">
                                    <h3>Shoulder Size</h3>
                                    <div class="mvideodiv">
                                        <video width="100%" height="100%" controls>
                                            <source src="./assets/img/measurements/Shoulder_Size-v2.mp4" type="video/mp4">
                                        </video>
                                        <div class="mvideoinfo">
                                            <p>Input your Shoulder Size (?) measurement to the nearest quarter inch.</p>
                                            <div class="input-group mb-3">
                                                <span class="input-group-prepend">
                                                    <button class="btn btn-dark btn-sm minus-btn" id="minus-btn"><i class="fa fa-minus"></i></button>
                                                </span>
                                                <input type="number" id="qty5" class="form-control form-control-sm qty_input" value="{{$measurement->soulder_size}}" min="1">
                                                <span class="input-group-append">
                                                    <button class="btn btn-dark btn-sm plus-btn" id="plus-btn"><i class="fa fa-plus"></i></button>
                                                </span>
                                                
                                            </div>
                                            <span class="min-CM"><a href="#" class="measureStandard">IN</a>/<a href="#" class="measureMetric">CM</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Shoulder Size-->
                               
                                 <div class="carousel-item">
                                <div class="mesurementfitbox">
                                    <h3>Sleeve Length</h3>
                                    <div class="mvideodiv">
                                        <video width="100%" height="100%" controls>
                                            <source src="./assets/img/measurements/Sleeve_Length-v2.mp4" type="video/mp4">
                                        </video>
                                        <div class="mvideoinfo">
                                            <p>Input your Sleeve Length (?) measurement to the nearest quarter inch.</p>
                                            <div class="input-group mb-3">
                                                <span class="input-group-prepend">
                                                    <button class="btn btn-dark btn-sm minus-btn" id="minus-btn"><i class="fa fa-minus"></i></button>
                                                </span>
                                                <input type="number" id="qty6" class="form-control form-control-sm qty_input" value="{{$measurement->sleeve_length}}" min="1">
                                                <span class="input-group-append">
                                                    <button class="btn btn-dark btn-sm plus-btn" id="plus-btn"><i class="fa fa-plus"></i></button>
                                                </span>
                                                
                                            </div>
                                            <span class="min-CM"><a href="#" class="measureStandard">IN</a>/<a href="#" class="measureMetric">CM</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Sleeve Length-->
                               
                               <div class="carousel-item">
                                <div class="mesurementfitbox">
                                    <h3>Biceps</h3>
                                    <div class="mvideodiv">
                                        <video width="100%" height="100%" controls>
                                            <source src="./assets/img/measurements/Bicep_Size-v2.mp4" type="video/mp4">
                                        </video>
                                        <div class="mvideoinfo">
                                            <p>Input your Biceps (?) measurement to the nearest quarter inch.</p>
                                            <div class="input-group mb-3">
                                                <span class="input-group-prepend">
                                                    <button class="btn btn-dark btn-sm minus-btn" id="minus-btn"><i class="fa fa-minus"></i></button>
                                                </span>
                                                <input type="number" id="qty7" class="form-control form-control-sm qty_input" value="{{$measurement->bicest}}" min="1">
                                                <span class="input-group-append">
                                                    <button class="btn btn-dark btn-sm plus-btn" id="plus-btn"><i class="fa fa-plus"></i></button>
                                                </span>
                                                
                                            </div>
                                            <span class="min-CM"><a href="#" class="measureStandard">IN</a>/<a href="#" class="measureMetric">CM</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Biceps-->
                               
                                
                                  <div class="carousel-item">
                                <div class="mesurementfitbox">
                                    <h3>Wrists</h3>
                                    <div class="mvideodiv">
                                        <video width="100%" height="100%" controls>
                                            <source src="./assets/img/measurements/Wrist_Size-v2.mp4" type="video/mp4">
                                        </video>
                                        <div class="mvideoinfo">
                                            <p>Input your Wrists (?) measurement to the nearest quarter inch.</p>
                                            <div class="input-group mb-3">
                                                <span class="input-group-prepend">
                                                    <button class="btn btn-dark btn-sm minus-btn" id="minus-btn"><i class="fa fa-minus"></i></button>
                                                </span>
                                                <input type="number" id="qty8" class="form-control form-control-sm qty_input" value="{{$measurement->waist}}" min="1">
                                                <span class="input-group-append">
                                                    <button class="btn btn-dark btn-sm plus-btn" id="plus-btn"><i class="fa fa-plus"></i></button>
                                                </span>
                                                
                                            </div>
                                            <span class="min-CM"><a href="#" class="measureStandard">IN</a>/<a href="#" class="measureMetric">CM</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Wrists-->
                               
                                 <div class="carousel-item">
                                <div class="mesurementfitbox">
                                    <h3>Pants Length</h3>
                                    <div class="mvideodiv">
                                        <video width="100%" height="100%" controls>
                                            <source src="./assets/img/measurements/Pant_Length-v2.mp4" type="video/mp4">
                                        </video>
                                        <div class="mvideoinfo">
                                            <p>Input your Pants Length (?) measurement to the nearest quarter inch.</p>
                                            <div class="input-group mb-3">
                                                <span class="input-group-prepend">
                                                    <button class="btn btn-dark btn-sm minus-btn" id="minus-btn"><i class="fa fa-minus"></i></button>
                                                </span>
                                                <input type="number" id="qty9" class="form-control form-control-sm qty_input" value="{{$measurement->pant_length}}" min="1">
                                                <span class="input-group-append">
                                                    <button class="btn btn-dark btn-sm plus-btn" id="plus-btn"><i class="fa fa-plus"></i></button>
                                                </span>
                                                
                                            </div>
                                            <span class="min-CM"><a href="#" class="measureStandard">IN</a>/<a href="#" class="measureMetric">CM</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Pants Length-->
                               
                               <div class="carousel-item">
                                <div class="mesurementfitbox">
                                    <h3>Thigh</h3>
                                    <div class="mvideodiv">
                                        <video width="100%" height="100%" controls>
                                            <source src="./assets/img/measurements/Thigh_Size-v2.mp4" type="video/mp4">
                                        </video>
                                        <div class="mvideoinfo">
                                            <p>Input your Thigh (?) measurement to the nearest quarter inch.</p>
                                            <div class="input-group mb-3">
                                                <span class="input-group-prepend">
                                                    <button class="btn btn-dark btn-sm minus-btn" id="minus-btn"><i class="fa fa-minus"></i></button>
                                                </span>
                                                <input type="number" id="qty10" class="form-control form-control-sm qty_input" value="{{$measurement->thigh}}" min="1">
                                                <span class="input-group-append">
                                                    <button class="btn btn-dark btn-sm plus-btn" id="plus-btn"><i class="fa fa-plus"></i></button>
                                                </span>
                                                
                                            </div>
                                            <span class="min-CM"><a href="#" class="measureStandard">IN</a>/<a href="#" class="measureMetric">CM</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Thigh-->
                              
                                
                               <div class="carousel-item">
                                <div class="mesurementfitbox">
                                    <h3>Knee</h3>
                                    <div class="mvideodiv">
                                        <video width="100%" height="100%" controls>
                                            <source src="./assets/img/measurements/Knee_Size-v2.mp4" type="video/mp4">
                                        </video>
                                        <div class="mvideoinfo">
                                            <p>Input your Knee (?) measurement to the nearest quarter inch.</p>
                                            <div class="input-group mb-3">
                                                <span class="input-group-prepend">
                                                    <button class="btn btn-dark btn-sm minus-btn" id="minus-btn"><i class="fa fa-minus"></i></button>
                                                </span>
                                                <input type="number" id="qty11" class="form-control form-control-sm qty_input" value="{{$measurement->knees}}" min="1">
                                                <span class="input-group-append">
                                                    <button class="btn btn-dark btn-sm plus-btn" id="plus-btn"><i class="fa fa-plus"></i></button>
                                                </span>
                                                
                                            </div>
                                            <span class="min-CM"><a href="#" class="measureStandard">IN</a>/<a href="#" class="measureMetric">CM</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Knee-->
                               
                               
                               <div class="carousel-item">
                                <div class="mesurementfitbox">
                                    <h3>Rise</h3>
                                    <div class="mvideodiv">
                                        <video width="100%" height="100%" controls>
                                            <source src="./assets/img/measurements/Crotch_Rise-v2.mp4" type="video/mp4">
                                        </video>
                                        <div class="mvideoinfo">
                                            <p>Input your Rise (?) measurement to the nearest quarter inch.</p>
                                            <div class="input-group mb-3">
                                                <span class="input-group-prepend">
                                                    <button class="btn btn-dark btn-sm minus-btn" id="minus-btn"><i class="fa fa-minus"></i></button>
                                                </span>
                                                <input type="number" id="qty12" class="form-control form-control-sm qty_input" value="{{$measurement->rise}}" min="1">
                                                <span class="input-group-append">
                                                    <button class="btn btn-dark btn-sm plus-btn" id="plus-btn"><i class="fa fa-plus"></i></button>
                                                </span>
                                                
                                            </div>
                                            <span class="min-CM"><a href="#" class="measureStandard">IN</a>/<a href="#" class="measureMetric">CM</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Rise-->
                              
                                                                                            
                               <div class="carousel-item">
                                <div class="mesurementfitbox">
                                    <h3>Hips</h3>
                                    <div class="mvideodiv">
                                        <video width="100%" height="100%" controls>
                                            <source src="./assets/img/measurements/Hips-v2.mp4" type="video/mp4">
                                        </video>
                                        <div class="mvideoinfo">
                                            <p>Input your Hips (?) measurement to the nearest quarter inch.</p>
                                            <div class="input-group mb-3">
                                                <span class="input-group-prepend">
                                                    <button class="btn btn-dark btn-sm minus-btn" id="minus-btn"><i class="fa fa-minus"></i></button>
                                                </span>
                                                <input type="number" id="qty13" class="form-control form-control-sm qty_input" value="{{$measurement->hips}}" min="1">
                                                <span class="input-group-append">
                                                    <button class="btn btn-dark btn-sm plus-btn" id="plus-btn"><i class="fa fa-plus"></i></button>
                                                </span>
                                                
                                            </div>
                                            <span class="min-CM"><a href="#" class="measureStandard">IN</a>/<a href="#" class="measureMetric">CM</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Hips-->
                              
                                                                                                                                                                                                                      
                               <div class="carousel-item">
                                <div class="mesurementfitbox">
                                    <h3>Waist</h3>
                                    <div class="mvideodiv">
                                        <video width="100%" height="100%" controls>
                                            <source src="./assets/img/measurements/Waist_Size-v2.mp4" type="video/mp4">
                                        </video>
                                        <div class="mvideoinfo">
                                            <p>Input your Waist (?) measurement to the nearest quarter inch.</p>
                                            <div class="input-group mb-3">
                                                <span class="input-group-prepend">
                                                    <button class="btn btn-dark btn-sm minus-btn" id="minus-btn"><i class="fa fa-minus"></i></button>
                                                </span>
                                                <input type="number" id="qty14" class="form-control form-control-sm qty_input" value="{{$measurement->waists}}" min="1">
                                                <span class="input-group-append">
                                                    <button class="btn btn-dark btn-sm plus-btn" id="plus-btn"><i class="fa fa-plus"></i></button>
                                                </span>
                                                
                                            </div>
                                            <span class="min-CM"><a href="#" class="measureStandard">IN</a>/<a href="#" class="measureMetric ">CM</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Waist-->
                                                                                                                                                                                                                                                 
                               <div class="carousel-item">
                                <div class="finalreviewbox">
                                    <div class="container-fluid">
                                    	
                                        <div class="row">
                                            <div class="col-lg-4 measurebox">
                                                <p>Basic Measurements</p>
                                                <br><br><br>

                                                <p>Chest</p>
                                                <span id="bm1">12221</span>
                                                <br>
                                                <p>Hips</p>
                                                <span id="bm2"></span>  
                                                <br>                                              
                                                <p>Stomach</p>
                                                <span id="bm3"></span>
                                                <br>                                                
                                                <p>Waist</p>
                                                <span id="bm4"></span>

                                            </div>    

                                            <div class="col-lg-4 measurebox">
                                                <p>Jacket Measurements</p>
                                                <br><br><br>

                                                <p>Jacket Length</p>
                                                <span id="bm5"></span>
                                                <br>
                                                <p>Shoulder Size</p>
                                                <span id="bm6"></span>  
                                                <br>                                              
                                                <p>Sleeve Length</p>
                                                <span id="bm7"></span>
                                                <br>                                                
                                                <p>Bicepst</p>
                                                <span id="bm8"></span>
                                            </div>  

                                            <div class="col-lg-4 measurebox">
                                                <p>Pants Measurements</p>
                                                <br><br><br>

                                                <p>Pant Length</p>
                                                <span id="bm9"></span>
                                                <br>
                                                <p>Rise</p>
                                                <span id="bm10"></span>  
                                                <br>                                              
                                                <p>Thigh</p>
                                                <span id="bm11"></span>
                                                <br>                                                
                                                <p>Knees</p>
                                                <span id="bm12"></span>
                                            </div> 

                                            <div class="col-lg-4 measurebox">
                                                <p>Shirt Measurements</p>
                                                <br><br><br>

                                                <p>Neck</p>
                                                <span id="bm13"></span>
                                                <br>
                                                <p>wrists</p>
                                                <span id="bm14"></span>  
                                            </div>
                                            
                                        </div>

                                     <form action="/measrementdata" method="post">{{ csrf_field() }}
                                     	<input id="im1" type="hidden" value="" name="chest">
                                     	<input id="im2" type="hidden" value="" name="hips">
                                     	<input id="im3" type="hidden" value="" name="stomach">
                                     	<input id="im4" type="hidden" value="" name="waist">
                                     	<input id="im5" type="hidden" value="" name="jacket_length">
                                     	<input id="im6" type="hidden" value="" name="soulder_size">
                                     	<input id="im7" type="hidden" value="" name="sleeve_length">
                                     	<input id="im8" type="hidden" value="" name="bicest">
                                     	<input id="im9" type="hidden" value="" name="pant_length">
                                     	<input id="im10" type="hidden" value="" name="rise">
                                     	<input id="im11" type="hidden" value="" name="thigh">
                                     	<input id="im12" type="hidden" value="" name="knees">
                                     	<input id="im13" type="hidden" value="" name="neck">
                                     	<input id="im14" type="hidden" value="" name="wrists">
                                        <input class="btn btn-primary" type="submit" value="Submit your measurement" name="">
                                    </form>




                                    </div>
                                </div>
                            </div>
                           
                           
                           
                            
                        </div>
                    </div>

                    <div class="mbtnbox clearfix">
                        <a class="mbtnprv" href="#mesurementslider" role="button" data-slide="prev">Previous</a>
                        <a class="mbtnnxt" href="#mesurementslider" role="button" data-slide="next">Next</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</form>
@endsection