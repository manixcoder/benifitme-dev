@extends('admin.master')
@section('pageTitle', 'Users')
@section('content')
@section('pageCss')
<style></style>
@stop

<div class="add-newuser">
    @if(Session::has('status'))
    <div class="alert alert-{{ Session::get('status') }}">
        <i class="fa fa-building-o" aria-hidden="true"></i> {{ Session::get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">
                ×
            </span>
        </button>
    </div>
    @elseif(Session::get('status') == "danger")
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ Session::get('message') }}
        <a href="#" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </a>
    </div>
    @endif
    <div class="row">
        <div class="col-md-6 text-left">
            <p>
                <span>Users</span>
            </p>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ url('admin/user-management/create') }}">
                Add New User
            </a>
        </div>
    </div>
</div>
@foreach($users as $user)
<?php
//dd($user);
?>
<div class="john-doe">
    <div class="row">
        <div class="col-md-2 col-sm-2">
            <figure>
                @if($user->profile_image !='')

                <img src="{{ asset('public/uploads')}}/{{ $user->profile_image }}" alt="background2" width="120px">
                @else
                <img src="{{ asset('public/adminAssets/images/background2.png')}}" alt="background2" width="120px">
                @endif
            </figure>
        </div>
        <div class="col-md-3 col-sm-3">
            <h3>{{ $user->first_name}} {{ $user->last_name }}</h3>
            <p>{{ $user->email }}</p>
            <p>{{ $user->mobile }}</p>
        </div>
        <div class="col-md-7 col-sm-7 text-right">
            <p class="lost-login">Last Login :
                <span>
                    @if($user->last_login)
                    {{ date('d M Y | H:i a', strtotime($user->last_login)) }}
                    @else
                    Not login
                    @endif
                </span>
            </p>
            <div class="toggle-img">
                <span>Active</span>
                <img src="{{ asset('public/adminAssets/images/toggle_on.png')}}" alt="toggle_on" width="30px">
                <img src="{{ asset('public/adminAssets/images/message.png')}}" alt="message" width="30px">
                <img src="{{ asset('public/adminAssets/images/call.png')}}" alt="call" width="30px">
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
@section('pagejs')
<script>

</script>
@stop