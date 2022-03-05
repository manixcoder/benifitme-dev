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
    <?php $pageTitle = 'Room'; ?>
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
                                    <i>
                                        <img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px">
                                    </i>
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
                $roomTypeData = DB::table('hotel_room')
                    ->where('merchent_id', Auth::user()->id)
                    ->orderBy('room_for', 'ASC')
                    ->distinct()
                    ->get(['room_for']);

                $i = 0;

                ?>
                <a href="{{ url('merchant/room-management/create') }}" class="addproduct-btn pull-right">Add New Room</a>
                <div class="new-booking">
                    <div class="row">
                        <ul class="nav nav-tabs number-sec col-md-12" role="tablist">
                            @forelse ($roomTypeData as $key=> $roomType)
                            <li class="col-md-4 text-left <?php if ($pageTitle == 'Room' && $i == '0') { ?> active <?php } ?>" role="presentation">
                                <a class="number-table room" href="#subhome-{{ $roomType->room_for }}" data-id="{{ $roomType->room_for }}" aria-controls="subhome-{{ $roomType->room_for }}" role="tab" data-toggle="tab">
                                    <figure>
                                        <img src="{{ asset('public/merchemtAssets/images/room_no.png')}}" alt="icon" width="90px">
                                    </figure>
                                    <div class="Jessica-pra room-for">
                                        <p>
                                            <span>
                                                Room for
                                            </span>
                                            <b>
                                                {{ $roomType->room_for }}
                                            </b>
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <?php $i++ ?>
                            @empty
                            <li class="col-md-4 text-left active" role="presentation">
                            </li>
                            @endforelse
                        </ul>
                    </div>
                </div>
                @if (count($roomTypeData) > 0)
                <?php
                $roomsData = DB::table('hotel_room')->where('room_for', $roomTypeData[0]->room_for)->where('merchent_id', Auth::user()->id)->get();


                ?>
                <div class="tab-content" id="listings_list">
                    <div id="default_div">
                        <div role="tabpanel" class="tab-pane active" id="subhome">
                            @foreach($roomsData as $rooms)
                            @php
                            $ammenitis = unserialize($rooms->selected_amenities);
                            @endphp
                            <div class="john-doe-box">
                                <div class="row">
                                    <div class="col-md-9 text-left">
                                        <figure class="pizza-sec">
                                            <img src="{{ asset('public/merchemtAssets/images/room-img.jpeg')}}" alt="circle">
                                        </figure>
                                        <div class="Jessica-pra text-contant">
                                            <h3>{{ $rooms->room_type }}</h3>
                                            <p>
                                                <img src="{{ asset('public/merchemtAssets/images/my_profile.png')}}" alt="">
                                                {{ $rooms->room_for }} Guest
                                            </p>
                                            <ul>
                                                <li>
                                                    <img src="{{ asset('public/merchemtAssets/images/amt_sqft.png')}}" alt="">
                                                    {{ $rooms->room_sq_ft }} Sq Ft
                                                </li>
                                                <li>
                                                    <img src="{{ asset('public/merchemtAssets/images/amt_single_beds.png')}}" alt="">
                                                    {{ $rooms->single_beds  }} Single Beds
                                                </li>

                                                @foreach($ammenitis as $am)
                                                @php
                                                $amenitieData = DB::table('amenities')->where('id', $am)->first();
                                                @endphp
                                                @if($amenitieData->amenities_name =='Free WiFi')
                                                <li><img src="{{ asset('public/merchemtAssets/images/amt_free_wifi.png')}}" alt="">Free WiFi</li>
                                                @endif
                                                @if($amenitieData->amenities_name =='Air Condition')
                                                <li><img src="{{ asset('public/merchemtAssets/images/amt_air_condition.png')}}" alt="">Air Condition</li>
                                                @endif
                                                @endforeach
                                            </ul>
                                            <h3>
                                                $ {{ $rooms->price_per_night  }}
                                                <span class="per-night">
                                                    Per Night
                                                </span>
                                            </h3>
                                            @if($rooms->discount !='')
                                            <h3 style="color:red">
                                                $ {{ $rooms->discount  }}
                                                <span class="per-night-discount">
                                                    Per Night
                                                </span>
                                            </h3>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-3 text-right">
                                        <ul>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#roomview-popup">
                                                    <img src="{{ asset('public/merchemtAssets/images/view.png')}}" alt="icon" width="18px">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('merchant/room-management')}}/{{ $rooms->id }}/edit">
                                                    <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="18px">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('merchant/room-management/delete/')}}/{{ $rooms->id }}">
                                                    <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="18px">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade roompopup-sec  " id="roomview-popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog " role="document">
                                    <div class="modal-content appoint-ment ">
                                        <div class="modal-header">
                                            <button type="button" class="close ConnectPclose" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body new-requests">
                                            <div class="messagepopCant">
                                                <div class="john-doe-box pad0">
                                                    <div class="row">
                                                        <div class="col-md-12 text-left">
                                                            <div class="Jessica-pra text-contant">
                                                                <h3>
                                                                    Superior Double or Twin Room
                                                                    <span>
                                                                        <a href="#">
                                                                            <img src="{{ asset('public/merchemtAssets/images/edit.png')}}">
                                                                        </a>
                                                                    </span>
                                                                    <span>
                                                                        <a href="#">
                                                                            <img src="images/delete.png">
                                                                        </a>
                                                                    </span>
                                                                </h3>
                                                                <p>
                                                                    <img src="{{ asset('public/merchemtAssets/images/my_profile.png')}}" alt="">
                                                                    2 Guest
                                                                </p>
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
                                                    </div>
                                                </div>
                                                <div class="calender-pgsec">
                                                    <div class="calenderform">
                                                        <table id="calendar">
                                                            <tr id="monthrow">
                                                                <th colspan="7">
                                                                    <button id="prev" onclick="prevMonth()">&#10094;</button>
                                                                    <span id="month"></span>
                                                                    <button id="next" onclick="nextMonth()">&#10095;</button>
                                                                </th>
                                                            </tr>
                                                            <tr class="daysoftheweek">
                                                                <th>Sun</th>
                                                                <th>Mon</th>
                                                                <th>Tue</th>
                                                                <th>Wed</th>
                                                                <th>Thu</th>
                                                                <th>Fri</th>
                                                                <th>Sat</th>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="john-doe-box imgprofile pad0">
                                                    <div class="row">
                                                        <div class="col-md-8 text-left">
                                                            <figure>
                                                                <img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle">
                                                            </figure>
                                                            <div class="Jessica-pra">
                                                                <p>#NUD5449595</p>
                                                                <h3>Jessica Johnson</h3>
                                                                <p>jessicajohn94@gmail.com</p>
                                                                <p>9800000058</p>
                                                                <h3>Room Name 2</h3>
                                                                <p><i><img src="{{ asset('public/merchemtAssets/images/people.png')}}" alt="icon" width="18px"></i> 4 People 2 Room</p>
                                                                <p><span>Booking for :</span>10 Jun 21 | 10:30 am - 12 Jun 21 | 3:00 pm</p>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 text-right" style="padding-left: 0;">
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

                            @endforeach
                        </div>
                    </div>
                </div>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
@section('pagejs')
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>
    $(document).on('click', '.room', function() {
        var id = $(this).attr("data-id");
        $('#default_div').css({
            'display': 'none',
        });
        $('#dataTable_processing').show();
        $.ajax({
            url: '{{ url("/merchant/room-management/getRoomData") }}' + '/' + id,
            type: 'GET',
            success: function(data) {
                if (data.status == 'success') {
                    $("#listings_list").html(data.currentData);
                } else if (data.status == 'danger') {
                    $("#listings_list").html("<p>" + data.message + "</p>");
                } else {
                    console.log(data);
                    $('.error').html('');
                    $('.error').parent().removeClass('has-error');
                    $.each(data, function(key, value) {
                        if (value != "") {
                            $("#error-" + key).text(value);
                            $("#error-" + key).parent().addClass('has-error');
                        }
                    });
                }
            }
        });
    });
</script>

<script src="{{ asset('public/merchemtAssets/js/libaury.js')}}"></script>
<script src="{{ asset('public/merchemtAssets/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('public/merchemtAssets/js/calendar.js')}}"></script>
<script>
    var app = {
        settings: {
            container: $('.calendar'),
            calendar: $('.front'),
            days: $('.weeks span'),
            form: $('.back'),
            input: $('.back input'),
            buttons: $('.back button')
        },

        init: function() {
            instance = this;
            settings = this.settings;
            this.bindUIActions();
        },
        swap: function(currentSide, desiredSide) {
            settings.container.toggleClass('flip');

            currentSide.fadeOut(900);
            currentSide.hide();
            desiredSide.show();
        },
        bindUIActions: function() {
            settings.days.on('click', function() {
                instance.swap(settings.calendar, settings.form);
                settings.input.focus();
            });
            settings.buttons.on('click', function() {
                instance.swap(settings.form, settings.calendar);
            });
        }
    }

    app.init();
</script>
@stop