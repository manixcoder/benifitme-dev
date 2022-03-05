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
            <p>Availability to Appointments </p>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ url('merchant/appointments-management/calendar-event') }}">Add Availability</a>
        </div>
    </div>
    @if(Session::has('status'))
    <div class="alert alert-{{ Session::get('status') }}">
        <i class="fa fa-building-o" aria-hidden="true"></i> {{ Session::get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
    </div>
    @endif

    <div class="new-requests">
        @php
        $appointmentData = DB::table('appointments')->where('merchent_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        @endphp
        @forelse($appointmentData as $appointment)
        <div class="john-doe-box">
            <div class="row">
                <div class="col-md-6 text-left">
                    <div class="Jessica-pra appointment">
                        <h3>{{ $appointment->appointment_title }}</h3>
                        <p>{{ date('d M Y', strtotime($appointment->appointment_start)) }} - {{ date('d M Y', strtotime($appointment->appointment_end)) }}</p>
                        <h3>{{ date('g:i a', strtotime($appointment->appointment_time_start)) }} - {{ date('g:i a', strtotime($appointment->appointment_time_end)) }}</h3>
                        <span class="mobile-box">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/mobile-reparing.jpeg')}}" alt="">
                            </figure>
                            <p>Mobile Repairing</p>
                        </span>
                        <span class="mobile-box">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/laptop-repairing.jpeg')}}" alt="">
                            </figure>
                            <p>Laptop Repairing</p>
                        </span>
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <div class="appointment-for">
                        <ul>
                            <li>
                                <a href="{{ url('merchant/appointments-management/'.$appointment->id.'/edit') }}">
                                    <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="18px">
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('merchant/appointments-management/delete/'.$appointment->id) }}">
                                    <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="18px">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <p>No users</p>
        @endforelse
        <div class="john-doe-box">
            <div class="row">
                <div class="col-md-6 text-left">
                    <div class="Jessica-pra appointment">
                        <h3>Appointment Title</h3>
                        <p>12 Sep 2021 - 18 Sep 2021</p>
                        <h3>10:00 am - 4:00 pm</h3>
                        <span class="mobile-box">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/mobile-reparing.jpeg')}}" alt="">
                            </figure>
                            <p>Mobile Repairing</p>
                        </span>
                        <span class="mobile-box">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/laptop-repairing.jpeg')}}" alt="">
                            </figure>
                            <p>Laptop Repairing</p>
                        </span>
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <div class="appointment-for">
                        <ul>
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
        <div class="john-doe-box">
            <div class="row">
                <div class="col-md-6 text-left">
                    <div class="Jessica-pra appointment">
                        <h3>Appointment Title</h3>
                        <p>12 Sep 2021 - 18 Sep 2021</p>
                        <h3>10:00 am - 4:00 pm</h3>
                        <span class="mobile-box">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/mobile-reparing.jpeg')}}" alt="">
                            </figure>
                            <p>Mobile Repairing</p>
                        </span>
                        <span class="mobile-box">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/laptop-repairing.jpeg')}}" alt="">
                            </figure>
                            <p>Laptop Repairing</p>
                        </span>
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <div class="appointment-for">
                        <ul>
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


@endsection
@section('pagejs')
<script>
</script>
@stop