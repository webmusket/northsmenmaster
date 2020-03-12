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
                    <p> <strong>Adress:</strong> Hatemkhan, Boalia, Rajshahi, Bangladesh. 6000</p>
                    <p><strong>Mobile:</strong> +8801717137482</p>
                </div>
                <div class="addresslist">
                    <p><strong>Md. Arafat Rahman</strong></p>
                    <p> <strong>Adress:</strong> Hatemkhan, Boalia, Rajshahi, Bangladesh. 6000</p>
                    <p><strong>Mobile:</strong> +8801717137482</p>
                </div>
                <div class="addresslist">
                    <p><strong>Md. Arafat Rahman</strong></p>
                    <p> <strong>Adress:</strong> Hatemkhan, Boalia, Rajshahi, Bangladesh. 6000</p>
                    <p><strong>Mobile:</strong> +8801717137482</p>
                </div>

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
                            <div class="modal-body">
                                <div class="addinfo">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Name</label>
                                                <input type="email" class="form-control" id="inputEmail4" placeholder="Name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Email</label>
                                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress">Address</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress2">Address 2</label>
                                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputCity">City</label>
                                                <input type="text" class="form-control" id="inputCity">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState">State</label>
                                                <select id="inputState" class="form-control">
                                                    <option selected>Choose...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="inputZip">Zip</label>
                                                <input type="text" class="form-control" id="inputZip">
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->

            </div>
        </div>
    </div>
</div>
@endsection