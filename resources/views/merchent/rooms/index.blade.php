@extends('merchent.master')
@section('pageTitle', 'Room')
@section('content')
@section('pageCss')
<style>
</style>
@stop

<div class="appoint-ment">
    @if(Session::has('status'))
    <div class="alert alert-{{ Session::get('status') }}">
        <i class="ti-user"></i> {{ Session::get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
    </div>
    @elseif(Session::get('status') == "danger")
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ Session::get('message') }}
        <a href="#" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </a>
    </div>
    @endif
    <div class="appoint-sec">
        <div class="row">
            <div class="col-md-6 text-left">
                <p>Rooms</p>
            </div>
            <!-- <div class="col-md-6 text-right">
                <a href="#">Add New Room</a>
            </div> -->
        </div>
    </div>
    <div class="new-requests">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                    New Booking
                </a>
            </li>
            <li role="presentation">
                <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                    Accepted
                </a>
            </li>
            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">My Room</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra">
                                <p>#NUD5449595</p>
                                <h3>John Doe</h3>
                                <p>doejohn33@gmail.com</p>
                                <p>9600000052</p>
                                <h3>Room Name 1</h3>
                                <p><i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i> 4 People 2 Room</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    Booking for :
                                    <span>
                                        10 Jun 21 | 10:30 am - 12 Jun 21 | 3:00 pm
                                    </span>
                                </p>
                            </div>
                            <span>
                                <a>Decline</a>
                            </span>
                            <span>
                                <a class="accept-bg">
                                    Accept
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra">
                                <p>#NUD5449595</p>
                                <h3>Jessica Johnson</h3>
                                <p>jessicajohn94@gmail.com</p>
                                <p>9800000058</p>
                                <h3>Room Name 2</h3>
                                <p>
                                    <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                    4 People 2 Room
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    Booking for :
                                    <span>
                                        10 Jun 21 | 10:30 am - 12 Jun 21 | 3:00 pm
                                    </span>
                                </p>
                            </div>
                            <span>
                                <a>Decline</a>
                            </span>
                            <span>
                                <a class="accept-bg">
                                    Accept
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra">
                                <p>#NUD5449595</p>
                                <h3>John Doe</h3>
                                <p>doejohn33@gmail.com</p>
                                <p>9600000052</p>
                                <h3>Room Name 1</h3>
                                <p>
                                    <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                    4 People 2 Room
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    Booking for :
                                    <span>
                                        10 Jun 21 | 10:30 am - 12 Jun 21 | 3:00 pm
                                    </span>
                                </p>
                            </div>
                            <span>
                                <a>Decline</a>
                            </span>
                            <span>
                                <a class="accept-bg">
                                    Accept
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra">
                                <p>#NUD5449595</p>
                                <h3>Jessica Johnson</h3>
                                <p>jessicajohn94@gmail.com</p>
                                <p>9800000058</p>
                                <h3>Room Name 2</h3>
                                <p>
                                    <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                    4 People 2 Room
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    Booking for :
                                    <span>
                                        10 Jun 21 | 10:30 am - 12 Jun 21 | 3:00 pm
                                    </span>
                                </p>
                            </div>
                            <span>
                                <a>
                                    Decline
                                </a></span>
                            <span>
                                <a class="accept-bg">
                                    Accept
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra">
                                <p>#NUD5449595</p>
                                <h3>John Doe</h3>
                                <p>doejohn33@gmail.com</p>
                                <p>9600000052</p>
                                <h3>Room Name 1</h3>
                                <p>
                                    <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                    4 People 2 Room
                                </p>

                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    Booking for :
                                    <span>
                                        10 Jun 21 | 10:30 am - 12 Jun 21 | 3:00 pm
                                    </span>
                                </p>
                            </div>
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_location.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_message.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_call.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra">
                                <p>#NUD5449595</p>
                                <h3>Jessica Johnson</h3>
                                <p>jessicajohn94@gmail.com</p>
                                <p>9800000058</p>
                                <h3>Room Name 2</h3>
                                <p>
                                    <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                    4 People 2 Room
                                </p>

                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    Booking for :
                                    <span>
                                        10 Jun 21 | 10:30 am - 12 Jun 21 | 3:00 pm
                                    </span>
                                </p>
                            </div>
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_location.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_message.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_call.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra">
                                <p>#NUD5449595</p>
                                <h3>John Doe</h3>
                                <p>doejohn33@gmail.com</p>
                                <p>9600000052</p>
                                <h3>Room Name 1</h3>
                                <p>
                                    <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                    4 People 2 Room
                                </p>

                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    Booking for :
                                    <span>
                                        10 Jun 21 | 10:30 am - 12 Jun 21 | 3:00 pm
                                    </span>
                                </p>
                            </div>
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_location.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_message.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_call.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra">
                                <p>#NUD5449595</p>
                                <h3>Jessica Johnson</h3>
                                <p>jessicajohn94@gmail.com</p>
                                <p>9800000058</p>
                                <h3>Room Name 2</h3>
                                <p>
                                    <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                    4 People 2 Room
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    Booking for :
                                    <span>
                                        10 Jun 21 | 10:30 am - 12 Jun 21 | 3:00 pm
                                    </span>
                                </p>
                            </div>
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_location.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_message.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/c_call.png')}}" alt="icon" width="35px">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="messages">

                <?php
                $room2Data = DB::table('hotel_roome')->where('merchent_id', Auth::user()->id)->where('room_for', '2')->get();
                $room4Data = DB::table('hotel_roome')->where('merchent_id', Auth::user()->id)->where('room_for', '4')->get();
                ?>
                <a href="{{ url('merchant/room-management/create') }}" class="addproduct-btn pull-right">Add New Room</a>
                <div class="new-booking">
                    <div class="row">
                        <ul class="nav nav-tabs number-sec col-md-12" role="tablist">
                            <li class="col-md-4 text-left active" role="presentation">
                                <a class="number-table" href="#subhome" aria-controls="subhome" role="tab" data-toggle="tab">
                                    <figure>
                                        <img src="{{ asset('public/merchemtAssets/images/room_no.png')}}" alt="icon" width="90px">
                                    </figure>
                                    <div class="Jessica-pra room-for">
                                        <p>
                                            <span>
                                                Room for
                                            </span>
                                            <b>
                                                2
                                            </b>
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li class="col-md-4 text-left" role="presentation">
                                <a class="number-table table-box" href="#profilesub" aria-controls="profilesub" role="tab" data-toggle="tab">
                                    <figure class="small-img">
                                        <img src="{{ asset('public/merchemtAssets/images/room_no.png')}}" alt="icon" width="90px">
                                    </figure>
                                    <div class="Jessica-pra room-for">
                                        <p>
                                            <span>
                                                Room for
                                            </span>
                                            <b>
                                                4
                                            </b>
                                        </p>

                                    </div>
                                </a>
                            </li>
                            <li class="col-md-4 text-left" role="presentation">
                                <a class="number-table table-box" href="#messagessub" aria-controls="messagessub" role="tab" data-toggle="tab">
                                    <figure class="small-img">
                                        <img src="{{ asset('public/merchemtAssets/images/room_no.png')}}" alt="icon" width="80%">
                                    </figure>
                                    <div class="Jessica-pra room-for">
                                        <p> <span>Room for</span><b>5</b></p>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="subhome">
                        1
                        @forelse($room2Data as $room2)
                        <div class="john-doe-box">
                            <div class="row">
                                <div class="col-md-9 text-left">
                                    <figure class="pizza-sec">
                                        <img src="{{ asset('public/merchemtAssets/images/room-img.jpeg')}}" alt="circle">
                                    </figure>
                                    <div class="Jessica-pra text-contant">
                                        <h3>{{ $room2->room_type }}</h3>
                                        <p>
                                            <img src="{{ asset('public/merchemtAssets/images/my_profile.png')}}" alt="">
                                            {{ $room2->room_for }} Guest
                                        </p>
                                        <ul>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_sqft.png')}}" alt="">
                                                {{ $room2->room_sq_ft }} Sq Ft
                                            </li>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_single_beds.png')}}" alt="">
                                                {{ $room2->single_beds }} Single Beds
                                            </li>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_free_wifi.png')}}" alt="">
                                                Free WiFi
                                            </li>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_air_condition.png')}}" alt="">
                                                Air Condition
                                            </li>
                                        </ul>
                                        <h3>
                                            $ {{ $room2->price_per_night }}
                                            <span class="per-night">
                                                Per Night
                                            </span>
                                        </h3>

                                    </div>
                                </div>
                                <div class="col-md-3 text-right">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('public/merchemtAssets/images/view.png')}}" alt="icon" width="18px">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="18px">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="18px">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-md-9 text-left">
                            No data
                        </div>
                        @endforelse

                        <!-- div class="john-doe-box">
                            <div class="row">
                                <div class="col-md-9 text-left">
                                    <figure class="pizza-sec">
                                        <img src="{{ asset('public/merchemtAssets/images/room-img.jpeg')}}" alt="circle">
                                    </figure>
                                    <div class="Jessica-pra text-contant">
                                        <h3>Royal Deluxe Room</h3>
                                        <p> <img src="{{ asset('public/merchemtAssets/images/my_profile.png')}}" alt=""> 2 Guest</p>
                                        <ul>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_sqft.png')}}" alt="">
                                                10 Sq Ft
                                            </li>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_single_beds.png')}}" alt="">
                                                2 Single Beds
                                            </li>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_free_wifi.png')}}" alt="">
                                                Free WiFi
                                            </li>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_air_condition.png')}}" alt="">
                                                Air Condition
                                            </li>
                                        </ul>
                                        <h3>$ 1200 <span class="per-night">Per Night</span></h3>

                                    </div>
                                </div>
                                <div class="col-md-3 text-right">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('public/merchemtAssets/images/view.png')}}" alt="icon" width="18px">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="18px">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="18px">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="john-doe-box">
                            <div class="row">
                                <div class="col-md-9 text-left">
                                    <figure class="pizza-sec">
                                        <img src="{{ asset('public/merchemtAssets/images/room-img.jpeg')}}" alt="circle">
                                    </figure>
                                    <div class="Jessica-pra text-contant">
                                        <h3>Family Room</h3>
                                        <p> <img src="images/my_profile.png" alt=""> 2 Guest</p>
                                        <ul>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_sqft.png')}}" alt="">
                                                10 Sq Ft
                                            </li>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_single_beds.png')}}" alt="">
                                                2 Single Beds
                                            </li>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_free_wifi.png')}}" alt="">
                                                Free WiFi
                                            </li>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_air_condition.png')}}" alt="">
                                                Air Condition
                                            </li>
                                        </ul>
                                        <h3>
                                            $ 1200
                                            <span class="per-night">
                                                Per Night
                                            </span>
                                        </h3>

                                    </div>
                                </div>
                                <div class="col-md-3 text-right">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('public/merchemtAssets/images/view.png')}}" alt="icon" width="18px">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="18px">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="18px">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div -->
                    </div>
                    <div role="tabpanel" class="tab-pane " id="profilesub">
                        2

                        @forelse($room4Data as $room2)
                        <div class="john-doe-box">
                            <div class="row">
                                <div class="col-md-9 text-left">
                                    <figure class="pizza-sec">
                                        <img src="{{ asset('public/merchemtAssets/images/room-img.jpeg')}}" alt="circle">
                                    </figure>
                                    <div class="Jessica-pra text-contant">
                                        <h3>Superior Double or Twin Room</h3>
                                        <p> <img src="{{ asset('public/merchemtAssets/images/my_profile.png')}}" alt=""> 2 Guest</p>
                                        <ul>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_sqft.png')}}" alt="">
                                                10 Sq Ft
                                            </li>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_single_beds.png')}}" alt="">
                                                2 Single Beds
                                            </li>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_free_wifi.png')}}" alt="">
                                                Free WiFi
                                            </li>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_air_condition.png')}}" alt="">
                                                Air Condition
                                            </li>
                                        </ul>
                                        <h3>
                                            $ 1200
                                            <span class="per-night">
                                                Per Night
                                            </span>
                                        </h3>

                                    </div>
                                </div>
                                <div class="col-md-3 text-right">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('public/merchemtAssets/images/view.png')}}" alt="icon" width="18px">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="18px">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="18px">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-md-9 text-left">
                            No data
                        </div>
                        @endforelse



                        <!-- div class="john-doe-box">
                            <div class="row">
                                <div class="col-md-9 text-left">
                                    <figure class="pizza-sec">
                                        <img src="{{ asset('public/merchemtAssets/images/room-img.jpeg')}}" alt="circle">
                                    </figure>
                                    <div class="Jessica-pra text-contant">
                                        <h3>Royal Deluxe Room</h3>
                                        <p> <img src="{{ asset('public/merchemtAssets/images/my_profile.png')}}" alt=""> 2 Guest</p>
                                        <ul>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_sqft.png')}}" alt="">
                                                10 Sq Ft
                                            </li>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_single_beds.png')}}" alt="">
                                                2 Single Beds
                                            </li>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_free_wifi.png')}}" alt="">
                                                Free WiFi
                                            </li>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_air_condition.png')}}" alt="">
                                                Air Condition
                                            </li>
                                        </ul>
                                        <h3>
                                            $ 1200
                                            <span class="per-night">
                                                Per Night
                                            </span>
                                        </h3>

                                    </div>
                                </div>
                                <div class="col-md-3 text-right">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('public/merchemtAssets/images/view.png')}}" alt="icon" width="18px">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="18px">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="18px">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="john-doe-box">
                            <div class="row">
                                <div class="col-md-9 text-left">
                                    <figure class="pizza-sec">
                                        <img src="{{ asset('public/merchemtAssets/images/room-img.jpeg')}}" alt="circle">
                                    </figure>
                                    <div class="Jessica-pra text-contant">
                                        <h3>Family Room</h3>
                                        <p> <img src="{{ asset('public/merchemtAssets/images/my_profile.png')}}" alt=""> 2 Guest</p>
                                        <ul>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_sqft.png')}}" alt="">
                                                10 Sq Ft
                                            </li>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_single_beds.png')}}" alt="">
                                                2 Single Beds
                                            </li>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_free_wifi.png')}}" alt="">
                                                Free WiFi
                                            </li>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_air_condition.png')}}" alt="">
                                                Air Condition
                                            </li>
                                        </ul>
                                        <h3>
                                            $ 1200
                                            <span class="per-night">
                                                Per Night
                                            </span>
                                        </h3>

                                    </div>
                                </div>
                                <div class="col-md-3 text-right">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('public/merchemtAssets/images/view.png')}}" alt="icon" width="18px">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="18px">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="18px">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div -->
                    </div>
                    <div role="tabpanel" class="tab-pane " id="messagessub">
                        3
                        <div class="john-doe-box">
                            <div class="row">
                                <div class="col-md-9 text-left">
                                    <figure class="pizza-sec">
                                        <img src="{{ asset('public/merchemtAssets/images/room-img.jpeg')}}" alt="circle">
                                    </figure>
                                    <div class="Jessica-pra text-contant">
                                        <h3>Superior Double or Twin Room</h3>
                                        <p> <img src="{{ asset('public/merchemtAssets/images/my_profile.png')}}" alt=""> 2 Guest</p>
                                        <ul>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_sqft.png')}}" alt="">
                                                10 Sq Ft
                                            </li>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_single_beds.png')}}" alt="">
                                                2 Single Beds
                                            </li>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_free_wifi.png')}}" alt="">
                                                Free WiFi
                                            </li>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_air_condition.png')}}" alt="">
                                                Air Condition
                                            </li>
                                        </ul>
                                        <h3>
                                            $ 1200
                                            <span class="per-night">
                                                Per Night
                                            </span>
                                        </h3>

                                    </div>
                                </div>
                                <div class="col-md-3 text-right">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('public/merchemtAssets/images/view.png')}}" alt="icon" width="18px">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="18px">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="18px">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="john-doe-box">
                            <div class="row">
                                <div class="col-md-9 text-left">
                                    <figure class="pizza-sec">
                                        <img src="{{ asset('public/merchemtAssets/images/room-img.jpeg')}}" alt="circle">
                                    </figure>
                                    <div class="Jessica-pra text-contant">
                                        <h3>Royal Deluxe Room</h3>
                                        <p> <img src="{{ asset('public/merchemtAssets/images/my_profile.png')}}" alt=""> 2 Guest</p>
                                        <ul>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_sqft.png')}}" alt="">
                                                10 Sq Ft
                                            </li>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_single_beds.png')}}" alt="">
                                                2 Single Beds
                                            </li>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_free_wifi.png')}}" alt="">
                                                Free WiFi
                                            </li>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_air_condition.png')}}" alt="">
                                                Air Condition
                                            </li>
                                        </ul>
                                        <h3>
                                            $ 1200
                                            <span class="per-night">
                                                Per Night
                                            </span>
                                        </h3>

                                    </div>
                                </div>
                                <div class="col-md-3 text-right">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('public/merchemtAssets/images/view.png')}}" alt="icon" width="18px">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="18px">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="18px">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="john-doe-box">
                            <div class="row">
                                <div class="col-md-9 text-left">
                                    <figure class="pizza-sec">
                                        <img src="{{ asset('public/merchemtAssets/images/room-img.jpeg')}}" alt="circle">
                                    </figure>
                                    <div class="Jessica-pra text-contant">
                                        <h3>Family Room</h3>
                                        <p> <img src="{{ asset('public/merchemtAssets/images/my_profile.png')}}" alt=""> 2 Guest</p>
                                        <ul>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_sqft.png')}}" alt="">
                                                10 Sq Ft
                                            </li>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_single_beds.png')}}" alt="">
                                                2 Single Beds
                                            </li>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_free_wifi.png')}}" alt="">
                                                Free WiFi
                                            </li>
                                            <li>
                                                <img src="{{ asset('public/merchemtAssets/images/amt_air_condition.png')}}" alt="">
                                                Air Condition
                                            </li>
                                        </ul>
                                        <h3>
                                            $ 1200
                                            <span class="per-night">
                                                Per Night
                                            </span>
                                        </h3>

                                    </div>
                                </div>
                                <div class="col-md-3 text-right">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('public/merchemtAssets/images/view.png')}}" alt="icon" width="18px">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="18px">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="18px">
                                            </a>
                                        </li>
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
@endsection
@section('pagejs')
<script>
</script>
@stop