@extends('merchent.master')
@section('pageTitle', 'Tables')
@section('content')
@section('pageCss')
<style>
</style>
@stop
<div class="appoint-ment">
    <div class="dashboard-heading">
        <h3>Table</h3>
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
            <li role="presentation">
                <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
                    My Tables
                </a>
            </li>
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
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    <span>
                                        <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                        4 People
                                    </span>
                                    | Appontment for :
                                    <span>
                                        10 Jun 21 | 10:30 am
                                    </span>
                                </p>
                            </div>
                            <span>
                                <a href="#">
                                    Decline
                                </a>
                            </span>
                            <span>
                                <a href="#" class="accept-bg">
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
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    <span>
                                        <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                        4 People
                                    </span>
                                    | Appontment for :
                                    <span>
                                        10 Jun 21 | 10:30 am
                                    </span>
                                </p>
                            </div>
                            <span>
                                <a href="#">
                                    Decline
                                </a>
                            </span>
                            <span>
                                <a href="#" class="accept-bg">
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
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    <span>
                                        <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                        4 People
                                    </span>
                                    | Appontment for :
                                    <span>
                                        10 Jun 21 | 10:30 am
                                    </span>
                                </p>
                            </div>
                            <span>
                                <a href="#">
                                    Decline
                                </a>
                            </span>
                            <span>
                                <a href="#" class="accept-bg">
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
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    <span>
                                        <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                        4 People
                                    </span>
                                    | Appontment for :
                                    <span>
                                        10 Jun 21 | 10:30 am
                                    </span>
                                </p>
                            </div>
                            <span>
                                <a href="#">
                                    Decline
                                </a>
                            </span>
                            <span>
                                <a href="#" class="accept-bg">
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
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    <span>
                                        <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                        4 People
                                    </span>
                                    | Appontment for :
                                    <span>
                                        10 Jun 21 | 10:30 am
                                    </span>
                                </p>
                            </div>
                            <span>
                                <a href="#">
                                    Decline
                                </a>
                            </span>
                            <span>
                                <a href="#" class="accept-bg">
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
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    <span>
                                        <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                        4 People
                                    </span>
                                    | Appontment for :
                                    <span>
                                        10 Jun 21 | 10:30 am
                                    </span>
                                </p>
                            </div>
                            <span><a href="#">Decline</a></span>
                            <span><a href="#" class="accept-bg">Accept</a></span>
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
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    <span>
                                        <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                        4 People
                                    </span>
                                    | Appontment for :
                                    <span>
                                        10 Jun 21 | 10:30 am
                                    </span>
                                </p>
                            </div>
                            <span><a href="#">Decline</a></span>
                            <span><a href="#" class="accept-bg">Accept</a></span>
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
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    <span>
                                        <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                        4 People
                                    </span>
                                    | Appontment for :
                                    <span>
                                        10 Jun 21 | 10:30 am
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
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    <span>
                                        <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                        4 People
                                    </span>
                                    | Appontment for :
                                    <span>
                                        10 Jun 21 | 10:30 am
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
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    <span>
                                        <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                        4 People
                                    </span>
                                    | Appontment for :
                                    <span>
                                        10 Jun 21 | 10:30 am
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
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    <span>
                                        <i>
                                            <img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                        4 People
                                    </span>
                                    | Appontment for :
                                    <span>
                                        10 Jun 21 | 10:30 am
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
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    <span>
                                        <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                        4 People
                                    </span>
                                    | Appontment for :
                                    <span>
                                        10 Jun 21 | 10:30 am
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
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    <span>
                                        <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                        4 People
                                    </span>
                                    | Appontment for :
                                    <span>
                                        10 Jun 21 | 10:30 am
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
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>
                                    <span>
                                        <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                        4 People
                                    </span>
                                    | Appontment for :
                                    <span>
                                        10 Jun 21 | 10:30 am
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
            @php
            $tables2Data = DB::table('tables')->where('merchent_id', Auth::user()->id)->where('table_for','2')->orderby('id','DESC')->get();
            $tables4Data = DB::table('tables')->where('merchent_id', Auth::user()->id)->where('table_for','4')->orderby('id','DESC')->get();
            $tables6Data = DB::table('tables')->where('merchent_id', Auth::user()->id)->where('table_for','6')->orderby('id','DESC')->get();
            @endphp

            <div role="tabpanel" class="tab-pane" id="messages">
                <a href="{{ url('merchant/table-management/create') }}" class="addproduct-btn pull-right">Add New Table</a>
                <div class="new-booking">
                    <div class="row">
                        <ul class="nav nav-tabs number-sec col-md-12" role="tablist">

                            <li class="col-md-4 text-left active" role="presentation">
                                <a class="number-table" href="#subhome" aria-controls="subhome" role="tab" data-toggle="tab">
                                    <figure>
                                        <img src="{{ asset('public/merchemtAssets/images/table_two.png')}}" alt="icon" width="90px">
                                    </figure>
                                    <div class="Jessica-pra">
                                        <p> <span>Table for</span><b>2</b></p>
                                        <p> <span> Number of Table</span><b>{{ count($tables2Data) }}</b></p>
                                    </div>
                                </a>
                            </li>

                            <li class="col-md-4 text-left" role="presentation">
                                <a class="number-table table-box" href="#profilesub" aria-controls="profilesub" role="tab" data-toggle="tab">
                                    <figure class="small-img">
                                        <img src="{{ asset('public/merchemtAssets/images/table_four.png')}}" alt="icon" width="80%">
                                    </figure>
                                    <div class="Jessica-pra">
                                        <p> <span>Table for</span><b>4</b></p>
                                        <p> <span> Number of Table</span><b>{{ count($tables4Data) }}</b></p>
                                    </div>
                                </a>
                            </li>

                            <li class="col-md-4 text-left" role="presentation">
                                <a class="number-table table-box" href="#messagessub" aria-controls="messagessub" role="tab" data-toggle="tab">
                                    <figure class="small-img">
                                        <img src="{{ asset('public/merchemtAssets/images/table_six.png')}}" alt="icon" width="80%">
                                    </figure>
                                    <div class="Jessica-pra">
                                        <p>
                                            <span>Table for</span>
                                            <b>6</b>
                                        </p>
                                        <p>
                                            <span>Number of Table</span>
                                            <b>{{ count($tables6Data) }}</b>
                                        </p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="subhome">
                                @forelse($tables2Data as $tables2)
                                <div class="john-doe-box">
                                    <div class="row">
                                        <div class="col-md-6 text-left">
                                            <figure class="avarage-box">
                                                <img src="{{ asset('public/merchemtAssets/images/table_two.png')}}" alt="icon">
                                            </figure>
                                            <div class="Jessica-pra">
                                                <h3>{{ $tables2->table_name }}</h3>
                                                <p> <span>Avarage Booking Time :</span> {{ $tables2->booking_time }} hours</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <div class="appointment-for">
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal_{{ $tables2->id }}">
                                                        <img src="{{ asset('public/merchemtAssets/images/view.png')}}" alt="icon" width="20px">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('merchant/table-management')}}/{{ $tables2->id }}/edit">
                                                        <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="20px">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('merchant/table-management')}}/{{ $tables2->id }}/delete">
                                                        <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="20px">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade tabel-detailview" id="myModal_{{ $tables2->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="tabel-viwe-heading">
                                                            <h3>
                                                                {{ $tables2->table_name }}
                                                                <span>
                                                                    <a href="#">
                                                                        <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="20px">
                                                                    </a>
                                                                </span>
                                                                <span>
                                                                    <a href="#">
                                                                        <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="20px">
                                                                    </a>
                                                                </span>
                                                            </h3>
                                                            <p>Avarage Booking Time : <span> 2 hours</span></p>
                                                        </div>
                                                        <div class="calenderfull-sec">
                                                            <div id="calendar_{{ $tables2->id }}"></div>
                                                            <div class="appoint-ment ">
                                                                <div class="new-requests">
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
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 text-right">
                                                                                <div class="appointment-for">
                                                                                    <p> <span> <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i> 4 People</span> | Appontment for : <span>10 Jun 21 | 10:30 am</span></p>
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
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 text-right">
                                                                                <div class="appointment-for">
                                                                                    <p>
                                                                                        <span>
                                                                                            <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                                                                            4 People
                                                                                        </span>
                                                                                        | Appontment for :
                                                                                        <span>
                                                                                            10 Jun 21 | 10:30 am
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
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 text-right">
                                                                                <div class="appointment-for">
                                                                                    <p>
                                                                                        <span>
                                                                                            <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                                                                            4 People
                                                                                        </span>
                                                                                        | Appontment for :
                                                                                        <span>
                                                                                            10 Jun 21 | 10:30 am

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
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
                                        <script>
                                            !(function() {
                                                var today = moment();

                                                function Calendar(selector, events) {
                                                    this.el = document.querySelector(selector);
                                                    this.events = events;
                                                    this.current = moment().date(1);
                                                    this.draw();
                                                    var current = document.querySelector(".today");
                                                    if (current) {
                                                        var self = this;
                                                        window.setTimeout(function() {
                                                            self.openDay(current);
                                                        }, 500);
                                                    }
                                                    this.drawLegend();
                                                }
                                                Calendar.prototype.draw = function() {
                                                    //Create Header
                                                    this.drawHeader();
                                                    //Draw Month
                                                    this.drawMonth();

                                                    //this.drawLegend();
                                                };

                                                Calendar.prototype.drawHeader = function() {
                                                    var self = this;
                                                    if (!this.header) {
                                                        //Create the header elements
                                                        this.header = createElement("div", "header");
                                                        this.header.className = "header";
                                                        this.title = createElement("h1");
                                                        var right = createElement("div", "right");
                                                        right.addEventListener("click", function() {
                                                            self.nextMonth();
                                                        });
                                                        var left = createElement("div", "left");
                                                        left.addEventListener("click", function() {
                                                            self.prevMonth();
                                                        });
                                                        //Append the Elements
                                                        this.header.appendChild(this.title);
                                                        this.header.appendChild(right);
                                                        this.header.appendChild(left);
                                                        this.el.appendChild(this.header);
                                                    }

                                                    this.title.innerHTML = this.current.format("MMMM YYYY");
                                                };

                                                Calendar.prototype.drawMonth = function() {
                                                    var self = this;
                                                    this.events.forEach(function(ev) {
                                                        ev.date = moment(ev.eventTime, "YYYY-MM-DD hh:mm:ss");
                                                    });

                                                    if (this.month) {
                                                        this.oldMonth = this.month;
                                                        this.oldMonth.className = "month out " + (self.next ? "next" : "prev");
                                                        this.oldMonth.addEventListener("webkitAnimationEnd", function() {
                                                            self.oldMonth.parentNode.removeChild(self.oldMonth);
                                                            self.month = createElement("div", "month");
                                                            self.backFill();
                                                            self.currentMonth();
                                                            self.fowardFill();
                                                            self.el.appendChild(self.month);
                                                            window.setTimeout(function() {
                                                                self.month.className = "month in " + (self.next ? "next" : "prev");
                                                            }, 16);
                                                        });
                                                    } else {
                                                        this.month = createElement("div", "month");
                                                        this.el.appendChild(this.month);
                                                        this.backFill();
                                                        this.currentMonth();
                                                        this.fowardFill();
                                                        this.month.className = "month new";
                                                    }
                                                };
                                                Calendar.prototype.backFill = function() {
                                                    var clone = this.current.clone();
                                                    var dayOfWeek = clone.day();
                                                    if (!dayOfWeek) {
                                                        return;
                                                    }
                                                    clone.subtract("days", dayOfWeek + 1);
                                                    for (var i = dayOfWeek; i > 0; i--) {
                                                        this.drawDay(clone.add("days", 1));
                                                    }
                                                };
                                                Calendar.prototype.fowardFill = function() {
                                                    var clone = this.current
                                                        .clone()
                                                        .add("months", 1)
                                                        .subtract("days", 1);
                                                    var dayOfWeek = clone.day();

                                                    if (dayOfWeek === 6) {
                                                        return;
                                                    }

                                                    for (var i = dayOfWeek; i < 6; i++) {
                                                        this.drawDay(clone.add("days", 1));
                                                    }
                                                };

                                                Calendar.prototype.currentMonth = function() {
                                                    var clone = this.current.clone();

                                                    while (clone.month() === this.current.month()) {
                                                        this.drawDay(clone);
                                                        clone.add("days", 1);
                                                    }
                                                };

                                                Calendar.prototype.getWeek = function(day) {
                                                    if (!this.week || day.day() === 0) {
                                                        this.week = createElement("div", "week");
                                                        this.month.appendChild(this.week);
                                                    }
                                                };

                                                Calendar.prototype.drawDay = function(day) {
                                                    var self = this;
                                                    this.getWeek(day);

                                                    //Outer Day
                                                    var outer = createElement("div", this.getDayClass(day));
                                                    outer.addEventListener("click", function() {
                                                        self.openDay(this);
                                                    });

                                                    //Day Name
                                                    var name = createElement("div", "day-name", day.format("ddd"));

                                                    //Day Number
                                                    var number = createElement("div", "day-number", day.format("DD"));

                                                    //Events
                                                    var events = createElement("div", "day-events");
                                                    this.drawEvents(day, events);

                                                    outer.appendChild(name);
                                                    outer.appendChild(number);
                                                    outer.appendChild(events);
                                                    this.week.appendChild(outer);
                                                };

                                                Calendar.prototype.drawEvents = function(day, element) {
                                                    if (day.month() === this.current.month()) {
                                                        var todaysEvents = this.events.reduce(function(memo, ev) {
                                                            if (ev.date.isSame(day, "day")) {
                                                                memo.push(ev);
                                                            }
                                                            return memo;
                                                        }, []);

                                                        todaysEvents.forEach(function(ev) {
                                                            var evSpan = createElement("span", ev.color);
                                                            element.appendChild(evSpan);
                                                        });
                                                    }
                                                };

                                                Calendar.prototype.getDayClass = function(day) {
                                                    classes = ["day"];
                                                    if (day.month() !== this.current.month()) {
                                                        classes.push("other");
                                                    } else if (today.isSame(day, "day")) {
                                                        classes.push("today");
                                                    }
                                                    return classes.join(" ");
                                                };

                                                Calendar.prototype.openDay = function(el) {
                                                    var details, arrow;
                                                    var dayNumber = +el.querySelectorAll(".day-number")[0].innerText ||
                                                        +el.querySelectorAll(".day-number")[0].textContent;
                                                    var day = this.current.clone().date(dayNumber);

                                                    var currentOpened = document.querySelector(".details");

                                                    //Check to see if there is an open detais box on the current row
                                                    if (currentOpened && currentOpened.parentNode === el.parentNode) {
                                                        details = currentOpened;
                                                        arrow = document.querySelector(".arrow");
                                                    } else {
                                                        //Close the open events on differnt week row
                                                        //currentOpened && currentOpened.parentNode.removeChild(currentOpened);
                                                        if (currentOpened) {
                                                            currentOpened.addEventListener("webkitAnimationEnd", function() {
                                                                currentOpened.parentNode.removeChild(currentOpened);
                                                            });
                                                            currentOpened.addEventListener("oanimationend", function() {
                                                                currentOpened.parentNode.removeChild(currentOpened);
                                                            });
                                                            currentOpened.addEventListener("msAnimationEnd", function() {
                                                                currentOpened.parentNode.removeChild(currentOpened);
                                                            });
                                                            currentOpened.addEventListener("animationend", function() {
                                                                currentOpened.parentNode.removeChild(currentOpened);
                                                            });
                                                            currentOpened.className = "details out";
                                                        }

                                                        //Create the Details Container
                                                        details = createElement("div", "details in");

                                                        //Create the arrow
                                                        var arrow = createElement("div", "arrow");

                                                        //Create the event wrapper

                                                        details.appendChild(arrow);
                                                        el.parentNode.appendChild(details);
                                                    }

                                                    var todaysEvents = this.events.reduce(function(memo, ev) {
                                                        if (ev.date.isSame(day, "day")) {
                                                            memo.push(ev);
                                                        }
                                                        return memo;
                                                    }, []);

                                                    this.renderEvents(todaysEvents, details);

                                                    arrow.style.left = el.offsetLeft - el.parentNode.offsetLeft + 27 + "px";
                                                };

                                                Calendar.prototype.renderEvents = function(events, ele) {
                                                    //Remove any events in the current details element
                                                    var currentWrapper = ele.querySelector(".events");
                                                    var wrapper = createElement(
                                                        "div",
                                                        "events in" + (currentWrapper ? " new" : "")
                                                    );

                                                    events.forEach(function(ev) {
                                                        var div = createElement("div", "event");
                                                        var square = createElement("div", "event-category " + ev.color);
                                                        var span = createElement("span", "", ev.eventName);

                                                        div.appendChild(square);
                                                        div.appendChild(span);
                                                        wrapper.appendChild(div);
                                                    });

                                                    if (!events.length) {
                                                        var div = createElement("div", "event empty");
                                                        var span = createElement("span", "", "No Events");

                                                        div.appendChild(span);
                                                        wrapper.appendChild(div);
                                                    }

                                                    if (currentWrapper) {
                                                        currentWrapper.className = "events out";
                                                        currentWrapper.addEventListener("webkitAnimationEnd", function() {
                                                            currentWrapper.parentNode.removeChild(currentWrapper);
                                                            ele.appendChild(wrapper);
                                                        });
                                                        currentWrapper.addEventListener("oanimationend", function() {
                                                            currentWrapper.parentNode.removeChild(currentWrapper);
                                                            ele.appendChild(wrapper);
                                                        });
                                                        currentWrapper.addEventListener("msAnimationEnd", function() {
                                                            currentWrapper.parentNode.removeChild(currentWrapper);
                                                            ele.appendChild(wrapper);
                                                        });
                                                        currentWrapper.addEventListener("animationend", function() {
                                                            currentWrapper.parentNode.removeChild(currentWrapper);
                                                            ele.appendChild(wrapper);
                                                        });
                                                    } else {
                                                        ele.appendChild(wrapper);
                                                    }
                                                };

                                                Calendar.prototype.drawLegend = function() {
                                                    var legend = createElement("div", "legend");
                                                    var calendars = this.events
                                                        .map(function(e) {
                                                            return e.calendar + "|" + e.color;
                                                        })
                                                        .reduce(function(memo, e) {
                                                            if (memo.indexOf(e) === -1) {
                                                                memo.push(e);
                                                            }
                                                            return memo;
                                                        }, [])
                                                        .forEach(function(e) {
                                                            var parts = e.split("|");
                                                            var entry = createElement("span", "entry " + parts[1], parts[0]);
                                                            legend.appendChild(entry);
                                                        });
                                                    this.el.appendChild(legend);
                                                };

                                                Calendar.prototype.nextMonth = function() {
                                                    this.current.add("months", 1);
                                                    this.next = true;
                                                    this.draw();
                                                };

                                                Calendar.prototype.prevMonth = function() {
                                                    this.current.subtract("months", 1);
                                                    this.next = false;
                                                    this.draw();
                                                };

                                                window.Calendar = Calendar;

                                                function createElement(tagName, className, innerText) {
                                                    var ele = document.createElement(tagName);
                                                    if (className) {
                                                        ele.className = className;
                                                    }
                                                    if (innerText) {
                                                        ele.innderText = ele.textContent = innerText;
                                                    }
                                                    return ele;
                                                }
                                            })();

                                            !(function() {
                                                var data = [{
                                                        eventName: "Lunch Meeting w/ Mark",
                                                        calendar: "Work",
                                                        color: "orange",
                                                        eventTime: "2018-09-25 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Interview - Jr. Web Developer",
                                                        calendar: "Work",
                                                        color: "orange",
                                                        eventTime: "2018-09-2 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Demo New App to the Board",
                                                        calendar: "Work",
                                                        color: "orange",
                                                        eventTime: "2018-09-5 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Dinner w/ Marketing",
                                                        calendar: "Work",
                                                        color: "orange",
                                                        eventTime: "2018-09-7 16:47:00"
                                                    },

                                                    {
                                                        eventName: "Back & Biceps",
                                                        calendar: "Gym",
                                                        color: "blue",
                                                        eventTime: "2018-09-3 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Chest & Triceps",
                                                        calendar: "Gym",
                                                        color: "blue",
                                                        eventTime: "2018-09-10 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Legs day!",
                                                        calendar: "Gym",
                                                        color: "blue",
                                                        eventTime: "2018-09-20 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Game vs San Degio",
                                                        calendar: "Gym",
                                                        color: "blue",
                                                        eventTime: "2018-09-30 16:47:00"
                                                    },

                                                    {
                                                        eventName: "School Play",
                                                        calendar: "Kids",
                                                        color: "yellow",
                                                        eventTime: "2018-09-15 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Parent/Teacher Conference",
                                                        calendar: "Kids",
                                                        color: "yellow",
                                                        eventTime: "2018-09-5 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Pick up from Soccer Practice",
                                                        calendar: "Kids",
                                                        color: "yellow",
                                                        eventTime: "2018-09-17 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Ice Cream Night",
                                                        calendar: "Kids",
                                                        color: "yellow",
                                                        eventTime: "2018-09-1 16:47:00"
                                                    },

                                                    {
                                                        eventName: "Free Tamale Night",
                                                        calendar: "Appt",
                                                        color: "green",
                                                        eventTime: "2018-09-23 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Bowling Team",
                                                        calendar: "Appt",
                                                        color: "green",
                                                        eventTime: "2018-09-28 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Teach Kids to Code",
                                                        calendar: "Appt",
                                                        color: "green",
                                                        eventTime: "2018-09-12 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Startup Weekend",
                                                        calendar: "Appt",
                                                        color: "green",
                                                        eventTime: "2018-09-13 16:47:00"
                                                    },

                                                    {
                                                        eventName: "Free Tamale Night",
                                                        calendar: "Other",
                                                        color: "red",
                                                        eventTime: "2018-09-23 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Bowling Team",
                                                        calendar: "Other",
                                                        color: "red",
                                                        eventTime: "2018-09-28 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Teach Kids to Code",
                                                        calendar: "Other",
                                                        color: "red",
                                                        eventTime: "2018-09-12 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Startup Weekend",
                                                        calendar: "Other",
                                                        color: "red",
                                                        eventTime: "2018-09-13 16:47:00"
                                                    }
                                                ];

                                                function addDate(ev) {}

                                                var calendar = new Calendar("#calendar_{{ $tables2->id }}", data);
                                            })();
                                        </script>
                                    </div>
                                </div>
                                @empty
                                <div class="john-doe-box">
                                    <div class="row">
                                        <div class="col-md-6 text-left">
                                            <figure class="avarage-box">
                                                <img src="{{ asset('public/merchemtAssets/images/table_two.png')}}" alt="icon">
                                            </figure>
                                            <div class="Jessica-pra">
                                                <h3>Table not found</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforelse
                            </div>



                            <div role="tabpanel" class="tab-pane " id="profilesub">
                                @forelse($tables4Data as $tables4)
                                <div class="john-doe-box">
                                    <div class="row">
                                        <div class="col-md-6 text-left">
                                            <figure class="avarage-box">
                                                <img src="{{ asset('public/merchemtAssets/images/table_four.png')}}" alt="icon">
                                            </figure>
                                            <div class="Jessica-pra">
                                                <h3>{{ $tables4->table_name }}</h3>
                                                <p> <span>Avarage Booking Time :</span> {{ $tables4->booking_time }} hours</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <div class="appointment-for">

                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal_{{ $tables4->id }}">
                                                        <img src="{{ asset('public/merchemtAssets/images/view.png')}}" alt="icon" width="20px">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('merchant/table-management')}}/{{ $tables4->id }}/edit">
                                                        <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="20px">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('merchant/table-management')}}/{{ $tables4->id }}/delete">
                                                        <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="20px">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade tabel-detailview" id="myModal_{{ $tables4->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="tabel-viwe-heading">
                                                            <h3>
                                                                {{ $tables4->table_name }}
                                                                <span>
                                                                    <a href="#">
                                                                        <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="20px">
                                                                    </a>
                                                                </span>
                                                                <span>
                                                                    <a href="#">
                                                                        <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="20px">
                                                                    </a>
                                                                </span>
                                                            </h3>
                                                            <p>Avarage Booking Time : <span> 2 hours</span></p>
                                                        </div>
                                                        <div class="calenderfull-sec">
                                                            <div id="calendar_{{ $tables4->id }}"></div>
                                                            <div class="appoint-ment ">
                                                                <div class="new-requests">
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
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 text-right">
                                                                                <div class="appointment-for">
                                                                                    <p> <span> <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i> 4 People</span> | Appontment for : <span>10 Jun 21 | 10:30 am</span></p>
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
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 text-right">
                                                                                <div class="appointment-for">
                                                                                    <p>
                                                                                        <span>
                                                                                            <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                                                                            4 People
                                                                                        </span>
                                                                                        | Appontment for :
                                                                                        <span>
                                                                                            10 Jun 21 | 10:30 am
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
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
                                        <script>
                                            !(function() {
                                                var today = moment();

                                                function Calendar(selector, events) {
                                                    this.el = document.querySelector(selector);
                                                    this.events = events;
                                                    this.current = moment().date(1);
                                                    this.draw();
                                                    var current = document.querySelector(".today");
                                                    if (current) {
                                                        var self = this;
                                                        window.setTimeout(function() {
                                                            self.openDay(current);
                                                        }, 500);
                                                    }
                                                    this.drawLegend();
                                                }
                                                Calendar.prototype.draw = function() {
                                                    //Create Header
                                                    this.drawHeader();
                                                    //Draw Month
                                                    this.drawMonth();

                                                    //this.drawLegend();
                                                };

                                                Calendar.prototype.drawHeader = function() {
                                                    var self = this;
                                                    if (!this.header) {
                                                        //Create the header elements
                                                        this.header = createElement("div", "header");
                                                        this.header.className = "header";
                                                        this.title = createElement("h1");
                                                        var right = createElement("div", "right");
                                                        right.addEventListener("click", function() {
                                                            self.nextMonth();
                                                        });
                                                        var left = createElement("div", "left");
                                                        left.addEventListener("click", function() {
                                                            self.prevMonth();
                                                        });
                                                        //Append the Elements
                                                        this.header.appendChild(this.title);
                                                        this.header.appendChild(right);
                                                        this.header.appendChild(left);
                                                        this.el.appendChild(this.header);
                                                    }

                                                    this.title.innerHTML = this.current.format("MMMM YYYY");
                                                };

                                                Calendar.prototype.drawMonth = function() {
                                                    var self = this;
                                                    this.events.forEach(function(ev) {
                                                        ev.date = moment(ev.eventTime, "YYYY-MM-DD hh:mm:ss");
                                                    });

                                                    if (this.month) {
                                                        this.oldMonth = this.month;
                                                        this.oldMonth.className = "month out " + (self.next ? "next" : "prev");
                                                        this.oldMonth.addEventListener("webkitAnimationEnd", function() {
                                                            self.oldMonth.parentNode.removeChild(self.oldMonth);
                                                            self.month = createElement("div", "month");
                                                            self.backFill();
                                                            self.currentMonth();
                                                            self.fowardFill();
                                                            self.el.appendChild(self.month);
                                                            window.setTimeout(function() {
                                                                self.month.className = "month in " + (self.next ? "next" : "prev");
                                                            }, 16);
                                                        });
                                                    } else {
                                                        this.month = createElement("div", "month");
                                                        this.el.appendChild(this.month);
                                                        this.backFill();
                                                        this.currentMonth();
                                                        this.fowardFill();
                                                        this.month.className = "month new";
                                                    }
                                                };
                                                Calendar.prototype.backFill = function() {
                                                    var clone = this.current.clone();
                                                    var dayOfWeek = clone.day();
                                                    if (!dayOfWeek) {
                                                        return;
                                                    }
                                                    clone.subtract("days", dayOfWeek + 1);
                                                    for (var i = dayOfWeek; i > 0; i--) {
                                                        this.drawDay(clone.add("days", 1));
                                                    }
                                                };
                                                Calendar.prototype.fowardFill = function() {
                                                    var clone = this.current
                                                        .clone()
                                                        .add("months", 1)
                                                        .subtract("days", 1);
                                                    var dayOfWeek = clone.day();

                                                    if (dayOfWeek === 6) {
                                                        return;
                                                    }

                                                    for (var i = dayOfWeek; i < 6; i++) {
                                                        this.drawDay(clone.add("days", 1));
                                                    }
                                                };

                                                Calendar.prototype.currentMonth = function() {
                                                    var clone = this.current.clone();

                                                    while (clone.month() === this.current.month()) {
                                                        this.drawDay(clone);
                                                        clone.add("days", 1);
                                                    }
                                                };

                                                Calendar.prototype.getWeek = function(day) {
                                                    if (!this.week || day.day() === 0) {
                                                        this.week = createElement("div", "week");
                                                        this.month.appendChild(this.week);
                                                    }
                                                };

                                                Calendar.prototype.drawDay = function(day) {
                                                    var self = this;
                                                    this.getWeek(day);

                                                    //Outer Day
                                                    var outer = createElement("div", this.getDayClass(day));
                                                    outer.addEventListener("click", function() {
                                                        self.openDay(this);
                                                    });

                                                    //Day Name
                                                    var name = createElement("div", "day-name", day.format("ddd"));

                                                    //Day Number
                                                    var number = createElement("div", "day-number", day.format("DD"));

                                                    //Events
                                                    var events = createElement("div", "day-events");
                                                    this.drawEvents(day, events);

                                                    outer.appendChild(name);
                                                    outer.appendChild(number);
                                                    outer.appendChild(events);
                                                    this.week.appendChild(outer);
                                                };

                                                Calendar.prototype.drawEvents = function(day, element) {
                                                    if (day.month() === this.current.month()) {
                                                        var todaysEvents = this.events.reduce(function(memo, ev) {
                                                            if (ev.date.isSame(day, "day")) {
                                                                memo.push(ev);
                                                            }
                                                            return memo;
                                                        }, []);

                                                        todaysEvents.forEach(function(ev) {
                                                            var evSpan = createElement("span", ev.color);
                                                            element.appendChild(evSpan);
                                                        });
                                                    }
                                                };

                                                Calendar.prototype.getDayClass = function(day) {
                                                    classes = ["day"];
                                                    if (day.month() !== this.current.month()) {
                                                        classes.push("other");
                                                    } else if (today.isSame(day, "day")) {
                                                        classes.push("today");
                                                    }
                                                    return classes.join(" ");
                                                };

                                                Calendar.prototype.openDay = function(el) {
                                                    var details, arrow;
                                                    var dayNumber = +el.querySelectorAll(".day-number")[0].innerText ||
                                                        +el.querySelectorAll(".day-number")[0].textContent;
                                                    var day = this.current.clone().date(dayNumber);

                                                    var currentOpened = document.querySelector(".details");

                                                    //Check to see if there is an open detais box on the current row
                                                    if (currentOpened && currentOpened.parentNode === el.parentNode) {
                                                        details = currentOpened;
                                                        arrow = document.querySelector(".arrow");
                                                    } else {
                                                        //Close the open events on differnt week row
                                                        //currentOpened && currentOpened.parentNode.removeChild(currentOpened);
                                                        if (currentOpened) {
                                                            currentOpened.addEventListener("webkitAnimationEnd", function() {
                                                                currentOpened.parentNode.removeChild(currentOpened);
                                                            });
                                                            currentOpened.addEventListener("oanimationend", function() {
                                                                currentOpened.parentNode.removeChild(currentOpened);
                                                            });
                                                            currentOpened.addEventListener("msAnimationEnd", function() {
                                                                currentOpened.parentNode.removeChild(currentOpened);
                                                            });
                                                            currentOpened.addEventListener("animationend", function() {
                                                                currentOpened.parentNode.removeChild(currentOpened);
                                                            });
                                                            currentOpened.className = "details out";
                                                        }

                                                        //Create the Details Container
                                                        details = createElement("div", "details in");

                                                        //Create the arrow
                                                        var arrow = createElement("div", "arrow");

                                                        //Create the event wrapper

                                                        details.appendChild(arrow);
                                                        el.parentNode.appendChild(details);
                                                    }

                                                    var todaysEvents = this.events.reduce(function(memo, ev) {
                                                        if (ev.date.isSame(day, "day")) {
                                                            memo.push(ev);
                                                        }
                                                        return memo;
                                                    }, []);

                                                    this.renderEvents(todaysEvents, details);

                                                    arrow.style.left = el.offsetLeft - el.parentNode.offsetLeft + 27 + "px";
                                                };

                                                Calendar.prototype.renderEvents = function(events, ele) {
                                                    //Remove any events in the current details element
                                                    var currentWrapper = ele.querySelector(".events");
                                                    var wrapper = createElement(
                                                        "div",
                                                        "events in" + (currentWrapper ? " new" : "")
                                                    );

                                                    events.forEach(function(ev) {
                                                        var div = createElement("div", "event");
                                                        var square = createElement("div", "event-category " + ev.color);
                                                        var span = createElement("span", "", ev.eventName);

                                                        div.appendChild(square);
                                                        div.appendChild(span);
                                                        wrapper.appendChild(div);
                                                    });

                                                    if (!events.length) {
                                                        var div = createElement("div", "event empty");
                                                        var span = createElement("span", "", "No Events");

                                                        div.appendChild(span);
                                                        wrapper.appendChild(div);
                                                    }

                                                    if (currentWrapper) {
                                                        currentWrapper.className = "events out";
                                                        currentWrapper.addEventListener("webkitAnimationEnd", function() {
                                                            currentWrapper.parentNode.removeChild(currentWrapper);
                                                            ele.appendChild(wrapper);
                                                        });
                                                        currentWrapper.addEventListener("oanimationend", function() {
                                                            currentWrapper.parentNode.removeChild(currentWrapper);
                                                            ele.appendChild(wrapper);
                                                        });
                                                        currentWrapper.addEventListener("msAnimationEnd", function() {
                                                            currentWrapper.parentNode.removeChild(currentWrapper);
                                                            ele.appendChild(wrapper);
                                                        });
                                                        currentWrapper.addEventListener("animationend", function() {
                                                            currentWrapper.parentNode.removeChild(currentWrapper);
                                                            ele.appendChild(wrapper);
                                                        });
                                                    } else {
                                                        ele.appendChild(wrapper);
                                                    }
                                                };

                                                Calendar.prototype.drawLegend = function() {
                                                    var legend = createElement("div", "legend");
                                                    var calendars = this.events
                                                        .map(function(e) {
                                                            return e.calendar + "|" + e.color;
                                                        })
                                                        .reduce(function(memo, e) {
                                                            if (memo.indexOf(e) === -1) {
                                                                memo.push(e);
                                                            }
                                                            return memo;
                                                        }, [])
                                                        .forEach(function(e) {
                                                            var parts = e.split("|");
                                                            var entry = createElement("span", "entry " + parts[1], parts[0]);
                                                            legend.appendChild(entry);
                                                        });
                                                    this.el.appendChild(legend);
                                                };

                                                Calendar.prototype.nextMonth = function() {
                                                    this.current.add("months", 1);
                                                    this.next = true;
                                                    this.draw();
                                                };

                                                Calendar.prototype.prevMonth = function() {
                                                    this.current.subtract("months", 1);
                                                    this.next = false;
                                                    this.draw();
                                                };

                                                window.Calendar = Calendar;

                                                function createElement(tagName, className, innerText) {
                                                    var ele = document.createElement(tagName);
                                                    if (className) {
                                                        ele.className = className;
                                                    }
                                                    if (innerText) {
                                                        ele.innderText = ele.textContent = innerText;
                                                    }
                                                    return ele;
                                                }
                                            })();

                                            !(function() {
                                                var data = [{
                                                        eventName: "Lunch Meeting w/ Mark",
                                                        calendar: "Work",
                                                        color: "orange",
                                                        eventTime: "2018-09-25 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Interview - Jr. Web Developer",
                                                        calendar: "Work",
                                                        color: "orange",
                                                        eventTime: "2018-09-2 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Demo New App to the Board",
                                                        calendar: "Work",
                                                        color: "orange",
                                                        eventTime: "2018-09-5 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Dinner w/ Marketing",
                                                        calendar: "Work",
                                                        color: "orange",
                                                        eventTime: "2018-09-7 16:47:00"
                                                    },

                                                    {
                                                        eventName: "Back & Biceps",
                                                        calendar: "Gym",
                                                        color: "blue",
                                                        eventTime: "2018-09-3 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Chest & Triceps",
                                                        calendar: "Gym",
                                                        color: "blue",
                                                        eventTime: "2018-09-10 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Legs day!",
                                                        calendar: "Gym",
                                                        color: "blue",
                                                        eventTime: "2018-09-20 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Game vs San Degio",
                                                        calendar: "Gym",
                                                        color: "blue",
                                                        eventTime: "2018-09-30 16:47:00"
                                                    },

                                                    {
                                                        eventName: "School Play",
                                                        calendar: "Kids",
                                                        color: "yellow",
                                                        eventTime: "2018-09-15 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Parent/Teacher Conference",
                                                        calendar: "Kids",
                                                        color: "yellow",
                                                        eventTime: "2018-09-5 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Pick up from Soccer Practice",
                                                        calendar: "Kids",
                                                        color: "yellow",
                                                        eventTime: "2018-09-17 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Ice Cream Night",
                                                        calendar: "Kids",
                                                        color: "yellow",
                                                        eventTime: "2018-09-1 16:47:00"
                                                    },

                                                    {
                                                        eventName: "Free Tamale Night",
                                                        calendar: "Appt",
                                                        color: "green",
                                                        eventTime: "2018-09-23 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Bowling Team",
                                                        calendar: "Appt",
                                                        color: "green",
                                                        eventTime: "2018-09-28 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Teach Kids to Code",
                                                        calendar: "Appt",
                                                        color: "green",
                                                        eventTime: "2018-09-12 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Startup Weekend",
                                                        calendar: "Appt",
                                                        color: "green",
                                                        eventTime: "2018-09-13 16:47:00"
                                                    },

                                                    {
                                                        eventName: "Free Tamale Night",
                                                        calendar: "Other",
                                                        color: "red",
                                                        eventTime: "2018-09-23 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Bowling Team",
                                                        calendar: "Other",
                                                        color: "red",
                                                        eventTime: "2018-09-28 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Teach Kids to Code",
                                                        calendar: "Other",
                                                        color: "red",
                                                        eventTime: "2018-09-12 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Startup Weekend",
                                                        calendar: "Other",
                                                        color: "red",
                                                        eventTime: "2018-09-13 16:47:00"
                                                    }
                                                ];

                                                function addDate(ev) {}

                                                var calendar = new Calendar("#calendar_{{ $tables4->id }}", data);
                                            })();
                                        </script>

                                    </div>
                                </div>
                                @empty
                                <div class="john-doe-box">
                                    <div class="row">
                                        <div class="col-md-6 text-left">
                                            <figure class="avarage-box">
                                                <img src="{{ asset('public/merchemtAssets/images/table_four.png')}}" alt="icon">
                                            </figure>
                                            <div class="Jessica-pra">
                                                <h3>Table 4 not found</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforelse
                            </div>
                            <div role="tabpanel" class="tab-pane " id="messagessub">
                                @forelse($tables6Data as $tables6)
                                <div class="john-doe-box">
                                    <div class="row">
                                        <div class="col-md-6 text-left">
                                            <figure class="avarage-box">
                                                <img src="{{ asset('public/merchemtAssets/images/table_six.png')}}" alt="icon">
                                            </figure>
                                            <div class="Jessica-pra">
                                                <h3>
                                                    {{ $tables6->table_name }}
                                                </h3>
                                                <p>
                                                    <span>
                                                        Avarage Booking Time :
                                                    </span>
                                                    {{ $tables6->booking_time }} hours
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <div class="appointment-for">
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal_{{ $tables6->id }}">
                                                        <img src="{{ asset('public/merchemtAssets/images/view.png')}}" alt="icon" width="20px">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('merchant/table-management')}}/{{ $tables6->id }}/edit">
                                                        <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="20px">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('merchant/table-management')}}/{{ $tables6->id }}/delete">
                                                        <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="20px">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade tabel-detailview" id="myModal_{{ $tables6->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="tabel-viwe-heading">
                                                            <h3>
                                                                {{ $tables6->table_name }}
                                                                <span>
                                                                    <a href="#">
                                                                        <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="20px">
                                                                    </a>
                                                                </span>
                                                                <span>
                                                                    <a href="#">
                                                                        <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="20px">
                                                                    </a>
                                                                </span>
                                                            </h3>
                                                            <p>Avarage Booking Time : <span> 2 hours</span></p>
                                                        </div>
                                                        <div class="calenderfull-sec">
                                                            <div id="calendar_{{ $tables6->id }}"></div>
                                                            <div class="appoint-ment ">
                                                                <div class="new-requests">
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
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 text-right">
                                                                                <div class="appointment-for">
                                                                                    <p> <span> <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i> 4 People</span> | Appontment for : <span>10 Jun 21 | 10:30 am</span></p>
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
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 text-right">
                                                                                <div class="appointment-for">
                                                                                    <p>
                                                                                        <span>
                                                                                            <i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i>
                                                                                            4 People
                                                                                        </span>
                                                                                        | Appontment for :
                                                                                        <span>
                                                                                            10 Jun 21 | 10:30 am
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
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
                                        <script>
                                            !(function() {
                                                var today = moment();

                                                function Calendar(selector, events) {
                                                    this.el = document.querySelector(selector);
                                                    this.events = events;
                                                    this.current = moment().date(1);
                                                    this.draw();
                                                    var current = document.querySelector(".today");
                                                    if (current) {
                                                        var self = this;
                                                        window.setTimeout(function() {
                                                            self.openDay(current);
                                                        }, 500);
                                                    }
                                                    this.drawLegend();
                                                }
                                                Calendar.prototype.draw = function() {
                                                    //Create Header
                                                    this.drawHeader();
                                                    //Draw Month
                                                    this.drawMonth();

                                                    //this.drawLegend();
                                                };

                                                Calendar.prototype.drawHeader = function() {
                                                    var self = this;
                                                    if (!this.header) {
                                                        //Create the header elements
                                                        this.header = createElement("div", "header");
                                                        this.header.className = "header";
                                                        this.title = createElement("h1");
                                                        var right = createElement("div", "right");
                                                        right.addEventListener("click", function() {
                                                            self.nextMonth();
                                                        });
                                                        var left = createElement("div", "left");
                                                        left.addEventListener("click", function() {
                                                            self.prevMonth();
                                                        });
                                                        //Append the Elements
                                                        this.header.appendChild(this.title);
                                                        this.header.appendChild(right);
                                                        this.header.appendChild(left);
                                                        this.el.appendChild(this.header);
                                                    }

                                                    this.title.innerHTML = this.current.format("MMMM YYYY");
                                                };

                                                Calendar.prototype.drawMonth = function() {
                                                    var self = this;
                                                    this.events.forEach(function(ev) {
                                                        ev.date = moment(ev.eventTime, "YYYY-MM-DD hh:mm:ss");
                                                    });

                                                    if (this.month) {
                                                        this.oldMonth = this.month;
                                                        this.oldMonth.className = "month out " + (self.next ? "next" : "prev");
                                                        this.oldMonth.addEventListener("webkitAnimationEnd", function() {
                                                            self.oldMonth.parentNode.removeChild(self.oldMonth);
                                                            self.month = createElement("div", "month");
                                                            self.backFill();
                                                            self.currentMonth();
                                                            self.fowardFill();
                                                            self.el.appendChild(self.month);
                                                            window.setTimeout(function() {
                                                                self.month.className = "month in " + (self.next ? "next" : "prev");
                                                            }, 16);
                                                        });
                                                    } else {
                                                        this.month = createElement("div", "month");
                                                        this.el.appendChild(this.month);
                                                        this.backFill();
                                                        this.currentMonth();
                                                        this.fowardFill();
                                                        this.month.className = "month new";
                                                    }
                                                };
                                                Calendar.prototype.backFill = function() {
                                                    var clone = this.current.clone();
                                                    var dayOfWeek = clone.day();
                                                    if (!dayOfWeek) {
                                                        return;
                                                    }
                                                    clone.subtract("days", dayOfWeek + 1);
                                                    for (var i = dayOfWeek; i > 0; i--) {
                                                        this.drawDay(clone.add("days", 1));
                                                    }
                                                };
                                                Calendar.prototype.fowardFill = function() {
                                                    var clone = this.current
                                                        .clone()
                                                        .add("months", 1)
                                                        .subtract("days", 1);
                                                    var dayOfWeek = clone.day();

                                                    if (dayOfWeek === 6) {
                                                        return;
                                                    }

                                                    for (var i = dayOfWeek; i < 6; i++) {
                                                        this.drawDay(clone.add("days", 1));
                                                    }
                                                };

                                                Calendar.prototype.currentMonth = function() {
                                                    var clone = this.current.clone();

                                                    while (clone.month() === this.current.month()) {
                                                        this.drawDay(clone);
                                                        clone.add("days", 1);
                                                    }
                                                };

                                                Calendar.prototype.getWeek = function(day) {
                                                    if (!this.week || day.day() === 0) {
                                                        this.week = createElement("div", "week");
                                                        this.month.appendChild(this.week);
                                                    }
                                                };

                                                Calendar.prototype.drawDay = function(day) {
                                                    var self = this;
                                                    this.getWeek(day);

                                                    //Outer Day
                                                    var outer = createElement("div", this.getDayClass(day));
                                                    outer.addEventListener("click", function() {
                                                        self.openDay(this);
                                                    });

                                                    //Day Name
                                                    var name = createElement("div", "day-name", day.format("ddd"));

                                                    //Day Number
                                                    var number = createElement("div", "day-number", day.format("DD"));

                                                    //Events
                                                    var events = createElement("div", "day-events");
                                                    this.drawEvents(day, events);

                                                    outer.appendChild(name);
                                                    outer.appendChild(number);
                                                    outer.appendChild(events);
                                                    this.week.appendChild(outer);
                                                };

                                                Calendar.prototype.drawEvents = function(day, element) {
                                                    if (day.month() === this.current.month()) {
                                                        var todaysEvents = this.events.reduce(function(memo, ev) {
                                                            if (ev.date.isSame(day, "day")) {
                                                                memo.push(ev);
                                                            }
                                                            return memo;
                                                        }, []);

                                                        todaysEvents.forEach(function(ev) {
                                                            var evSpan = createElement("span", ev.color);
                                                            element.appendChild(evSpan);
                                                        });
                                                    }
                                                };

                                                Calendar.prototype.getDayClass = function(day) {
                                                    classes = ["day"];
                                                    if (day.month() !== this.current.month()) {
                                                        classes.push("other");
                                                    } else if (today.isSame(day, "day")) {
                                                        classes.push("today");
                                                    }
                                                    return classes.join(" ");
                                                };

                                                Calendar.prototype.openDay = function(el) {
                                                    var details, arrow;
                                                    var dayNumber = +el.querySelectorAll(".day-number")[0].innerText ||
                                                        +el.querySelectorAll(".day-number")[0].textContent;
                                                    var day = this.current.clone().date(dayNumber);

                                                    var currentOpened = document.querySelector(".details");

                                                    //Check to see if there is an open detais box on the current row
                                                    if (currentOpened && currentOpened.parentNode === el.parentNode) {
                                                        details = currentOpened;
                                                        arrow = document.querySelector(".arrow");
                                                    } else {
                                                        //Close the open events on differnt week row
                                                        //currentOpened && currentOpened.parentNode.removeChild(currentOpened);
                                                        if (currentOpened) {
                                                            currentOpened.addEventListener("webkitAnimationEnd", function() {
                                                                currentOpened.parentNode.removeChild(currentOpened);
                                                            });
                                                            currentOpened.addEventListener("oanimationend", function() {
                                                                currentOpened.parentNode.removeChild(currentOpened);
                                                            });
                                                            currentOpened.addEventListener("msAnimationEnd", function() {
                                                                currentOpened.parentNode.removeChild(currentOpened);
                                                            });
                                                            currentOpened.addEventListener("animationend", function() {
                                                                currentOpened.parentNode.removeChild(currentOpened);
                                                            });
                                                            currentOpened.className = "details out";
                                                        }

                                                        //Create the Details Container
                                                        details = createElement("div", "details in");

                                                        //Create the arrow
                                                        var arrow = createElement("div", "arrow");

                                                        //Create the event wrapper

                                                        details.appendChild(arrow);
                                                        el.parentNode.appendChild(details);
                                                    }

                                                    var todaysEvents = this.events.reduce(function(memo, ev) {
                                                        if (ev.date.isSame(day, "day")) {
                                                            memo.push(ev);
                                                        }
                                                        return memo;
                                                    }, []);

                                                    this.renderEvents(todaysEvents, details);

                                                    arrow.style.left = el.offsetLeft - el.parentNode.offsetLeft + 27 + "px";
                                                };

                                                Calendar.prototype.renderEvents = function(events, ele) {
                                                    //Remove any events in the current details element
                                                    var currentWrapper = ele.querySelector(".events");
                                                    var wrapper = createElement(
                                                        "div",
                                                        "events in" + (currentWrapper ? " new" : "")
                                                    );

                                                    events.forEach(function(ev) {
                                                        var div = createElement("div", "event");
                                                        var square = createElement("div", "event-category " + ev.color);
                                                        var span = createElement("span", "", ev.eventName);

                                                        div.appendChild(square);
                                                        div.appendChild(span);
                                                        wrapper.appendChild(div);
                                                    });

                                                    if (!events.length) {
                                                        var div = createElement("div", "event empty");
                                                        var span = createElement("span", "", "No Events");

                                                        div.appendChild(span);
                                                        wrapper.appendChild(div);
                                                    }

                                                    if (currentWrapper) {
                                                        currentWrapper.className = "events out";
                                                        currentWrapper.addEventListener("webkitAnimationEnd", function() {
                                                            currentWrapper.parentNode.removeChild(currentWrapper);
                                                            ele.appendChild(wrapper);
                                                        });
                                                        currentWrapper.addEventListener("oanimationend", function() {
                                                            currentWrapper.parentNode.removeChild(currentWrapper);
                                                            ele.appendChild(wrapper);
                                                        });
                                                        currentWrapper.addEventListener("msAnimationEnd", function() {
                                                            currentWrapper.parentNode.removeChild(currentWrapper);
                                                            ele.appendChild(wrapper);
                                                        });
                                                        currentWrapper.addEventListener("animationend", function() {
                                                            currentWrapper.parentNode.removeChild(currentWrapper);
                                                            ele.appendChild(wrapper);
                                                        });
                                                    } else {
                                                        ele.appendChild(wrapper);
                                                    }
                                                };

                                                Calendar.prototype.drawLegend = function() {
                                                    var legend = createElement("div", "legend");
                                                    var calendars = this.events
                                                        .map(function(e) {
                                                            return e.calendar + "|" + e.color;
                                                        })
                                                        .reduce(function(memo, e) {
                                                            if (memo.indexOf(e) === -1) {
                                                                memo.push(e);
                                                            }
                                                            return memo;
                                                        }, [])
                                                        .forEach(function(e) {
                                                            var parts = e.split("|");
                                                            var entry = createElement("span", "entry " + parts[1], parts[0]);
                                                            legend.appendChild(entry);
                                                        });
                                                    this.el.appendChild(legend);
                                                };

                                                Calendar.prototype.nextMonth = function() {
                                                    this.current.add("months", 1);
                                                    this.next = true;
                                                    this.draw();
                                                };

                                                Calendar.prototype.prevMonth = function() {
                                                    this.current.subtract("months", 1);
                                                    this.next = false;
                                                    this.draw();
                                                };

                                                window.Calendar = Calendar;

                                                function createElement(tagName, className, innerText) {
                                                    var ele = document.createElement(tagName);
                                                    if (className) {
                                                        ele.className = className;
                                                    }
                                                    if (innerText) {
                                                        ele.innderText = ele.textContent = innerText;
                                                    }
                                                    return ele;
                                                }
                                            })();

                                            !(function() {
                                                var data = [{
                                                        eventName: "Lunch Meeting w/ Mark",
                                                        calendar: "Work",
                                                        color: "orange",
                                                        eventTime: "2018-09-25 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Interview - Jr. Web Developer",
                                                        calendar: "Work",
                                                        color: "orange",
                                                        eventTime: "2018-09-2 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Demo New App to the Board",
                                                        calendar: "Work",
                                                        color: "orange",
                                                        eventTime: "2018-09-5 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Dinner w/ Marketing",
                                                        calendar: "Work",
                                                        color: "orange",
                                                        eventTime: "2018-09-7 16:47:00"
                                                    },

                                                    {
                                                        eventName: "Back & Biceps",
                                                        calendar: "Gym",
                                                        color: "blue",
                                                        eventTime: "2018-09-3 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Chest & Triceps",
                                                        calendar: "Gym",
                                                        color: "blue",
                                                        eventTime: "2018-09-10 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Legs day!",
                                                        calendar: "Gym",
                                                        color: "blue",
                                                        eventTime: "2018-09-20 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Game vs San Degio",
                                                        calendar: "Gym",
                                                        color: "blue",
                                                        eventTime: "2018-09-30 16:47:00"
                                                    },

                                                    {
                                                        eventName: "School Play",
                                                        calendar: "Kids",
                                                        color: "yellow",
                                                        eventTime: "2018-09-15 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Parent/Teacher Conference",
                                                        calendar: "Kids",
                                                        color: "yellow",
                                                        eventTime: "2018-09-5 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Pick up from Soccer Practice",
                                                        calendar: "Kids",
                                                        color: "yellow",
                                                        eventTime: "2018-09-17 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Ice Cream Night",
                                                        calendar: "Kids",
                                                        color: "yellow",
                                                        eventTime: "2018-09-1 16:47:00"
                                                    },

                                                    {
                                                        eventName: "Free Tamale Night",
                                                        calendar: "Appt",
                                                        color: "green",
                                                        eventTime: "2018-09-23 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Bowling Team",
                                                        calendar: "Appt",
                                                        color: "green",
                                                        eventTime: "2018-09-28 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Teach Kids to Code",
                                                        calendar: "Appt",
                                                        color: "green",
                                                        eventTime: "2018-09-12 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Startup Weekend",
                                                        calendar: "Appt",
                                                        color: "green",
                                                        eventTime: "2018-09-13 16:47:00"
                                                    },

                                                    {
                                                        eventName: "Free Tamale Night",
                                                        calendar: "Other",
                                                        color: "red",
                                                        eventTime: "2018-09-23 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Bowling Team",
                                                        calendar: "Other",
                                                        color: "red",
                                                        eventTime: "2018-09-28 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Teach Kids to Code",
                                                        calendar: "Other",
                                                        color: "red",
                                                        eventTime: "2018-09-12 16:47:00"
                                                    },
                                                    {
                                                        eventName: "Startup Weekend",
                                                        calendar: "Other",
                                                        color: "red",
                                                        eventTime: "2018-09-13 16:47:00"
                                                    }
                                                ];

                                                function addDate(ev) {}

                                                var calendar = new Calendar("#calendar_{{ $tables6->id }}", data);
                                            })();
                                        </script>
                                    </div>
                                </div>
                                @empty
                                <div class="john-doe-box">
                                    <div class="row">
                                        <div class="col-md-6 text-left">
                                            <figure class="avarage-box">
                                                <img src="{{ asset('public/merchemtAssets/images/table_six.png')}}" alt="icon">
                                            </figure>
                                            <div class="Jessica-pra">
                                                <h3>Table 6 not found</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforelse
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