@if(count($roomsData) > 0)
@foreach($roomsData as $room)
@php

$ammenitis = unserialize($room->selected_amenities);

@endphp
<div role="tabpanel" class="tab-pane active" id="subhome-{{ $room->room_for }}">
    <div class="john-doe-box">
        <div class="row">
            <div class="col-md-9 text-left">
                <figure class="pizza-sec">
                    <img src="{{ asset('public/merchemtAssets/images/room-img.jpeg')}}" alt="circle">
                </figure>
                <div class="Jessica-pra text-contant">
                    <h3>{{ $room->room_type }}</h3>
                    <p> <img src="{{ asset('public/merchemtAssets/images/my_profile.png')}}" alt=""> {{ $room->room_for }} Guest</p>
                    <ul>
                        <li><img src="{{ asset('public/merchemtAssets/images/amt_sqft.png')}}" alt="">{{ $room->room_sq_ft }} Sq Ft</li>
                        <li><img src="{{ asset('public/merchemtAssets/images/amt_single_beds.png')}}" alt="">{{ $room->single_beds  }} Single Beds</li>
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
                        $ {{ $room->price_per_night  }}
                        <span class="per-night">
                            Per Night
                        </span>
                    </h3>
                    @if($room->discount !='')
                    <h3 style="color:red">
                        $ {{ $room->discount  }}
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
                        <a href="{{ url('merchant/room-management')}}/{{ $room->id }}/show">
                            <img src="{{ asset('public/merchemtAssets/images/view.png')}}" alt="icon" width="18px">
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('merchant/room-management')}}/{{ $room->id }}/edit">
                            <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="18px">
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('merchant/room-management/delete/')}}/{{ $room->id }}">
                            <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="18px">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endforeach
@else
<div role="tabpanel" class="tab-pane active">
    <div class="john-doe-box">
        <div class="row">
            <div class="col-md-6 text-left">
                <figure class="pizza-sec">
                    <!-- <img src="{{ asset('public/merchemtAssets/images/pizza.jpg')}}" alt="circle"> -->
                </figure>
                <div class="Jessica-pra text-contant">
                    Data not found
                </div>
            </div>
        </div>
    </div>
</div>
@endif