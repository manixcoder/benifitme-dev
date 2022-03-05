@extends('merchent.master')
@section('pageTitle', 'InvitePeople')
@section('content')
@section('pageCss')
<style>
</style>
@stop
@php
$inviteData = $catData = DB::table('invite_people')->where('merchent_id', Auth::user()->id)->orderby('id', 'ASC')->first();
@endphp
<div class="add-newoffer">
    <div class="pra-sec">
        <p>Invite People</p>
    </div>
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
    <div class="form-box ">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="generate">
                    <form method="POST" action="{{ url('/merchant/invite-people-management/save-invite-people') }}" enctype="multipart/form-data">
                        @csrf
                        <h3>Recipient Info</h3>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control @error('name') has-danger @enderror" value="{{ old('name') }}" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control @error('email') has-danger @enderror" value="{{ old('email') }}" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <input type="text" name="mobile" class="form-control @error('mobile') has-danger @enderror" value="{{ old('mobile') }}" placeholder="Mobile Number">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary bgcolor">Send Invitation</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="code-img">
                    <figure>
                        @if(!empty($inviteData))
                        <img class="qr-code" src="{{ asset('public/uploads/QRCode/')}}/{{ $inviteData->invite_qr_code }}" style="height: 190px; width: 198px;" alt="Generated QR{{ $inviteData->id }}">
                        @else
                        <img src="{{ asset('public/merchemtAssets/images/QR-CODE (1).png')}}" alt="QR-CODE (1)">
                        @endif
                    </figure>
                    <p>
                        <span class="pull-center">
                            <a href="#">
                                Share
                                <img src="{{ asset('public/merchemtAssets/images/share.png')}}" alt="share" width="15px">
                            </a>
                        </span>
                    </p>
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