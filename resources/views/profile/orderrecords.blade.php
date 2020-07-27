@extends('layouts.master')
@section('content')
<div class="sectionpd">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="rightcontainer">

                    <div class="orderlist-container" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <div class=" row yourorder">
                            <div class="col-6">
                                <strong>Your Order</strong>
                            </div>
                            <div class="col-6 text-right">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">ALL</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Complete</a>
                                    <a class="dropdown-item" href="#">Pending</a>
                                    <a class="dropdown-item" href="#">Canceled</a>
                                    <a class="dropdown-item" href="#">Rejected</a>
                                </div>
                            </div>
                        </div>
                    @foreach($orders as $order)
                    
                        <div class="row olist-item active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            
                            <div class="col-6">
                                <a class="btn-submit" href="{{url('order-details/'.$order->id)}}"><strong>{{$order->id}}</strong></a>
                                <input type="hidden" name="id" value="{{$order->id}}">
                                <span>{{$order->mobile}}</span>
                            </div>
                            <div class="col-6 text-right">
                                <a href="#" class="badge badge-success">{{$order->order_status}}</a>
                                <p><span>{{$order->created_at}}</span></p>
                            </div>
                            
                        </div>
                    
                    @endforeach
                       
                    </div>


                    <!--
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                    <a class="nav-link" >Profile</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                </div>
-->

                </div>
            </div>
            
            
            <div class="col-lg-9">

                <div class="row">
                    <div class="col-9">
                        <div class="orderitmlist">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ITEMS</th>
                                        <th scope="col">PRICE & QTY</th>
                                        <th scope="col">TOTAL PRICE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  {{----  @foreach($results as $result)
                                    <tr>
                                        <td>
                                            <div class="oderitm"><a href="#"><img src="./assets/img/testimonial-author-1.jpg" alt="image">{{$result->product_name}}</a></div>
                                        </td>
                                        <td>{{$result->product_price}} X {{$result->product_qty}}</td>
                                        <td class="pright">$ {{$result->product_price * $result->product_qty}}</td>
                                    </tr>
                                    @endforeach ---}}
                                </tbody>
                            </table>
                            <div class="ordertotal clearfix">
                                <table>
                                    <tr>
                                        <td class="text-">Total price:</td>
                                        <td class="pright"> $7000</td>
                                    </tr>
                                       <tr>
                                        <td>Total paid:</td>
                                        <td class="pright"> $7000</td>
                                    </tr>
                                       <tr>
                                        <td>Due:</td>
                                        <td class="pright"> $7000</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="orderpayment clearfix">
                            <div class="orderpaymentitem1">
                                <p><strong>Payment Status</strong></p>
                                <p>Your current E-Valy balance: ৳ 0</p>
                            </div>
                            <div class="orderpaymentitem2">
                                <a href="#" class="badge badge-success">Paid</a>
                            </div>
                            </div>
                            <div class="ordershiment">
                                <p><srtong>Bills To</srtong></p>
                                <strong>Md. Arafat Rahman</strong>
                                <p>0171745484564</p>
                                <p>Holding No. 457, Basua, rajshahi, bangladesh</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <h3>Timeline</h3>
                        
                        <div class="timebox">
                            <div class="ticonbox active"><i class="fa fa-hand-o-right" aria-hidden="true"></i></div>
                            <div class="tcontentbox">
                                <p><strong>CANCEL</strong></p>
                                <p>Ordered by mistake by - customer</p>
                                <p>22 Jan 07:22 PM</p>
                            </div>
                        </div>
                           
                           
                           <div class="timebox">
                            <div class="ticonbox"><i class="fa fa-hand-o-right" aria-hidden="true"></i></div>
                            <div class="tcontentbox">
                                <p><strong>PENDING</strong></p>
                                <p>Purchasing Policy and Terms & Conditions accepted. <strong>EVL602792209</strong> has been marked as Pending by - customer</p>
                                <p>22 Jan 07:22 PM</p>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>



<!--
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">1</div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">2</div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">3</div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">4</div>
                </div>
-->
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

   

    
</script>
@endsection