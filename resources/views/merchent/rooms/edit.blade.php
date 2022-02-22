@extends('merchent.master')
@section('pageTitle', 'Room Edit')
@section('content')
@section('pageCss')
<style>
</style>
@stop
<div class="add-newoffer">
    <div class="pra-sec">
        <p>Edit Room</p>
    </div>
    @if(Session::has('status'))
    <div class="alert alert-{{ Session::get('status') }}">
        <i class="fa fa-building-o" aria-hidden="true"></i> {{ Session::get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
    </div>
    @endif
    <div class="form-box">
        <div class="row">
            <div class="generate  Customer-journey">
                <form method="POST" action="{{ url('/merchant/room-management/'..'/update-room') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                        <h3>Basic Room Details</h3>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group ">
                            <div class="coutome-uploadbtn">
                                <input type="file" name="room_image" onchange="loadFile(event)" class="form-control upload-file" placeholder="Mobile Number">
                                @error('room_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <span>
                                    <figure>
                                        <img src="{{ asset('public/merchemtAssets/images/upload_img.png')}}" id="output" alt="upload_img " width="40px">
                                    </figure>
                                    Upload an image
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label>Room Type</label>
                        <div class="form-group">
                            <input type="text" name="room_type" id="room_type" class="form-control" placeholder="Room Type">
                            @error('room_type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label>Room For</label>
                        <div class="form-group">
                            <select class="form-control givepoint-img" name="room_for">
                                <option value="">Select Room</option>
                                @for($i=1; $i<=8;$i++) <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                            </select>
                            @error('room_for')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label>Number Of Room</label>
                        <div class="form-group">
                            <select class="form-control givepoint-img" name="number_of_room">
                                <option value="">Select No of Room</option>
                                @for($i=1; $i<=8;$i++) <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                            </select>
                            @error('number_of_room')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label>Min. Booking For (Nights)</label>
                        <div class="form-group">
                            <select class="form-control givepoint-img" name="min_booking_for">
                                <option value="">Select Booking For</option>
                                @for($i=1; $i<=8;$i++) <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                            </select>
                            @error('min_booking_for')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label>Price/Night</label>
                        <div class="form-group">
                            <input type="text" name="price_per_night" class="form-control" placeholder="$      500">
                            @error('price_per_night')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label>Discount</label>
                        <div class="form-group">
                            <input type="text" name="discount" class="form-control discount-sale" placeholder="20">
                            @error('discount')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">

                    </div>

                    <div class="col-md-12">
                        <label>Description</label>
                        <div class="form-group">
                            <textarea class="form-control" name="short_discription" placeholder="Write Description"></textarea>
                            @error('short_discription')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h3>Amenities</h3>
                    </div>
                    <div class="col-md-6">
                        <label>Room Sq Ft</label>
                        <div class="form-group">
                            <select class="form-control givepoint-img" name="room_sq_ft">
                                <option>Select Room Sq Ft</option>
                                @for($i=1; $i<=8;$i++) <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                            </select>
                            @error('room_sq_ft')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Single Beds</label>
                        <div class="form-group">
                            <select class="form-control givepoint-img" name="single_beds">
                                <option>Select Single Beds</option>
                                @for($i=1; $i<=8;$i++) <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                            </select>
                            @error('single_beds')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <?php
                            $amenitiesData = DB::table('amenities')->get();
                            ?>
                            @foreach($amenitiesData as $amenities)
                            <?php // dd($amenities); 
                            ?>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span class="box-input">
                                        <input type="checkbox" name="selected_amenities[]" value="{{ $amenities->id }}">
                                        <small></small>
                                    </span>
                                    <label class="menu-text">{{ $amenities->amenities_name }}</label>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-md-12">
                        <h3>Locations</h3>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Hotel Address</label>
                            <input type="text" name="hotle_address" class="form-control" placeholder="3245 Twin House Lane, Springfield 84575">
                            @error('hotle_address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h3>Hours Rules</h3>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Check in</label>
                            <input type="time" name="check_in" class="form-control" placeholder="12:00 pm">
                            @error('check_in')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Check out</label>
                            <input type="time" name="check_out" class="form-control" placeholder="3:00 pm">
                            @error('check_out')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" name="extra_rows[]" class="form-control" placeholder="No Smoking">
                        </div>
                        <div id="more_add" style="margin-top: 10px;display: inline-block;width: 100%;"></div>
                    </div>

                    <div class="col-md-12">
                        <span class="add-new" id="add_more">
                            <img src="{{ asset('public/merchemtAssets/images/add-icon.png')}}" alt="">
                            Add new raw
                        </span>
                    </div>
                    <div class="col-md-12">
                        <h3>Health & Safety</h3>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Health & Safety</label>
                            <input type="text" name="health_safety[]" class="form-control" placeholder="Health & Safety">
                        </div>
                        <div id="safty_add" style="margin-top: 10px;display: inline-block;width: 100%;"></div>
                    </div>
                    <div class="col-md-12">
                        <span class="add-new" id="add_more_safty">
                            <img src="{{ asset('public/merchemtAssets/images/add-icon.png')}}" alt="">
                            Add new raw
                        </span>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <button type="button" class="btn btn-primary">Cancel</button>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary bgcolor">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('pagejs')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
    $(document).ready(function() {
        $("#add_more").click(function() {
            $("#more_add").append('<input  type="text" name="extra_rows[]" style="margin-top: 10px;display: inline-block;width: 100%;" class="form-control" placeholder="No Smoking">');
        });
    });

    $(document).ready(function() {
        $("#add_more_safty").click(function() {
            //alert("Hello here");
            $("#safty_add").append('<input  type="text" name="health_safety[]" class="form-control" placeholder="Health & Safety" style="margin-top: 10px;display: inline-block;width: 100%;" >');
        });
    });

    /*image display */
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
@stop