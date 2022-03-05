@extends('merchent.master')
@section('pageTitle', 'Appointments')
@section('content')
@section('pageCss')
<style>
</style>
@stop


<div class="appoint-ment">
    <div class="appoint-sec">
        <div class="col-md-6 text-left">
            <p>Availability </p>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ url('merchant/appointments-management/availability-appointments') }}">Availability</a>
        </div>
    </div>
    @if(Session::has('status'))
    <div class="alert alert-{{ Session::get('status') }}">
        <i class="fa fa-building-o" aria-hidden="true"></i> {{ Session::get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
    </div>
    @endif


    <div class="new-requests">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">New Requests</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Accepted</a></li>
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
                                <p>Appontment for : <span>10 Jun 21 | 10:30 am</span></p>
                            </div>
                            <span><a>Decline</a></span>
                            <span><a class="accept-bg">Accept</a></span>
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
                                <p>Appontment for : <span>10 Jun 21 | 10:30 am</span></p>
                            </div>
                            <span><a>Decline</a></span>
                            <span><a class="accept-bg">Accept</a></span>
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
                                <p>Appontment for : <span>10 Jun 21 | 10:30 am</span></p>
                            </div>
                            <span><a>Decline</a></span>
                            <span><a class="accept-bg">Accept</a></span>
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
                                <p>Appontment for : <span>10 Jun 21 | 10:30 am</span></p>
                            </div>
                            <span><a>Decline</a></span>
                            <span><a class="accept-bg">Accept</a></span>
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
                                <p>Appontment for : <span>10 Jun 21 | 10:30 am</span></p>
                            </div>
                            <span><a>Decline</a></span>
                            <span><a class="accept-bg">Accept</a></span>
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
                                <p>Appontment for : <span>10 Jun 21 | 10:30 am</span></p>
                            </div>
                            <span><a>Decline</a></span>
                            <span><a class="accept-bg">Accept</a></span>
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
                                <p>Appontment for : <span>10 Jun 21 | 10:30 am</span></p>
                            </div>
                            <span><a>Decline</a></span>
                            <span><a class="accept-bg">Accept</a></span>
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
                                <p>Appontment for : <span>10 Jun 21 | 10:30 am</span></p>
                            </div>
                            <ul>
                                <li><a href="#"> <img src="{{ asset('public/merchemtAssets/images/c_location.png')}}" alt="icon" width="35px"></a></li>
                                <li><a href="#"> <img src="{{ asset('public/merchemtAssets/images/c_message.png')}}" alt="icon" width="35px"></a></li>
                                <li><a href="#"> <img src="{{ asset('public/merchemtAssets/images/c_call.png')}}" alt="icon" width="35px"></a></li>
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
                                <p>Appontment for : <span>10 Jun 21 | 10:30 am</span></p>
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
                                <p>Appontment for : <span>10 Jun 21 | 10:30 am</span></p>
                            </div>
                            <ul>
                                <li><a href="#"> <img src="{{ asset('public/merchemtAssets/images/c_location.png')}}" alt="icon" width="35px"></a></li>
                                <li><a href="#"> <img src="{{ asset('public/merchemtAssets/images/c_message.png')}}" alt="icon" width="35px"></a></li>
                                <li><a href="#"> <img src="{{ asset('public/merchemtAssets/images/c_call.png')}}" alt="icon" width="35px"></a></li>
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
                                <p>Appontment for : <span>10 Jun 21 | 10:30 am</span></p>
                            </div>
                            <ul>
                                <li><a href="#"> <img src="{{ asset('public/merchemtAssets/images/c_location.png')}}" alt="icon" width="35px"></a></li>
                                <li><a href="#"> <img src="{{ asset('public/merchemtAssets/images/c_message.png')}}" alt="icon" width="35px"></a></li>
                                <li><a href="#"> <img src="{{ asset('public/merchemtAssets/images/c_call.png')}}" alt="icon" width="35px"></a></li>
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
                                <p>Appontment for : <span>10 Jun 21 | 10:30 am</span></p>
                            </div>
                            <ul>
                                <li><a href="#"> <img src="{{ asset('public/merchemtAssets/images/c_location.png')}}" alt="icon" width="35px"></a></li>
                                <li><a href="#"> <img src="{{ asset('public/merchemtAssets/images/c_message.png')}}" alt="icon" width="35px"></a></li>
                                <li><a href="#"> <img src="{{ asset('public/merchemtAssets/images/c_call.png')}}" alt="icon" width="35px"></a></li>
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
                                <p>Appontment for : <span>10 Jun 21 | 10:30 am</span></p>
                            </div>
                            <ul>
                                <li><a href="#"> <img src="{{ asset('public/merchemtAssets/images/c_location.png')}}" alt="icon" width="35px"></a></li>
                                <li><a href="#"> <img src="{{ asset('public/merchemtAssets/images/c_message.png')}}" alt="icon" width="35px"></a></li>
                                <li><a href="#"> <img src="{{ asset('public/merchemtAssets/images/c_call.png')}}" alt="icon" width="35px"></a></li>
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
                                <p>Appontment for : <span>10 Jun 21 | 10:30 am</span></p>
                            </div>
                            <ul>
                                <li><a href="#"> <img src="{{ asset('public/merchemtAssets/images/c_location.png')}}" alt="icon" width="35px"></a></li>
                                <li><a href="#"> <img src="{{ asset('public/merchemtAssets/images/c_message.png')}}" alt="icon" width="35px"></a></li>
                                <li><a href="#"> <img src="{{ asset('public/merchemtAssets/images/c_call.png')}}" alt="icon" width="35px"></a></li>
                            </ul>
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