@extends('admin.master')
@section('pageTitle', 'Comapany Details')
@section('content')
@section('pageCss')
<style>

</style>
@stop
<?php
// dd($merchants);
// $ctype = $merchants['company_type'];
$companyTypeData = DB::table('categories')->where('id', $merchants['company_type'])->first();
$subrestaurantTypeData = DB::table('categories')->where('id', $merchants['sub_restaurant_type'])->first();
$userTypeData = DB::table('categories')->where('id', $merchants['user_type'])->first();
?>
<div class="add-newuser user-john">
    <p>
        <span class="user-color">{{ $merchants['company_name'] }}</span>
        <span>&gt; # {{ $merchants['uid_number'] }}</span>
    </p>
</div>
<div class="row">
    <div class="col-md-6">
        <h3>Company Info</h3>
        <div class="company-name">
            <h3>Company Name
                <span class="pull-right">@if($merchants['last_login']) {{ date('d M Y | H:i a', strtotime($merchants['last_login'])) }} @endif </span>
            </h3>
            <ul>
                <li>{{ $companyTypeData->name }}</li>
                <li>{{ $subrestaurantTypeData->name }}</li>
                <li>{{ $merchants['address']}}, {{ $merchants['city']}}, {{ $merchants['zip_code']}}</li>
            </ul>
            <h3>VAT/UID Number</h3>
            <p>Subscription Plan
                <span class="free-bgcolor">Free</span>
            </p>
        </div>
    </div>
    <div class="col-md-6">
        <h3>User Info</h3>
        <div class="company-name role-manager">
            <ul>
                <li>
                    <span>Role</span>{{ $userTypeData->name }}
                    <span class="pull-right messg-icon">
                        <a href="#">
                            <img src="{{ asset('public/adminAssets/images/message.png')}}" alt="message" width="40px">
                        </a>
                        <a href="#">
                            <img src="{{ asset('public/adminAssets/images/call.png')}}" alt="call" width="40px">
                        </a>
                    </span>
                </li>
                <li><span>First Name</span>{{ $merchants['first_name'] }}</li>
                <li><span>Last Name</span>{{ $merchants['last_name'] }}</li>
                <li><span>Date of Birth</span>{{ $merchants['date_birthday'] }}</li>
                <li><span>Gender</span>@if($merchants['gender'] =='1') {{ "Male" }} @elseif($merchants['gender'] =='2') {{ "Female" }} @else {{ "Special" }} @endif</li>
                <li><span>Email Address</span>{{ $merchants['email'] }}</li>
                <li><span>Mobile Number</span>{{ $merchants['mobile'] }}</li>
            </ul>
        </div>
    </div>
    <div class="col-md-12 text-center ">
        <p class="auto-accept"> <img src="{{ asset('public/adminAssets/images/timer.png')}}" alt="timer" width="20px"> Auto Accept In :
            <span class="min-color">03:00 min</span>
        </p>

    </div>
    <div class="accept-btn">
        <div class="col-md-6 col-sm-6 text-right">
            <div class="form-group">
                <a href="{{ url('admin/company-management') . '/' . $merchants['id'].'/decline' }}" class="btn btn-primary">Decline</a>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 text-left">
            <div class="form-group">
                <a href="{{ url('admin/company-management') . '/' . $merchants['id'].'/accept' }}" class="btn btn-primary bgcolor addbtn-table">Accept</a>
            </div>
        </div>
    </div>
</div>
@endsection
@section('pagejs')
<script>

</script>
@stop