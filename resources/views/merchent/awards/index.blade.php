@extends('merchent.master')
@section('pageTitle', 'Awards')
@section('content')
@section('pageCss')
<style>
</style>
@stop
@php
$awardsData = DB::table('awards')->first();
// dd($awardsData);
@endphp
<div class="add-newoffer">
    <div class="pra-sec">
        <p>Awards</p>
    </div>
    <div class="check-in-tabing">
        <!-- Nav tabs -->
        <div class="checkin-venuepg">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#home" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true">
                        Set Award
                    </a>
                </li>
                <li role="presentation" class="">
                    <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false">
                        My Benefit.Me Mascot
                    </a>
                </li>
            </ul>
        </div>


        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                <div class="form-box ">
                    <div class="row">
                        <form method="POST" action="{{ url('/merchant/awards-management/'. $awardsData->id .'/update-aawards') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6 col-sm-6">
                                <div class="generate Customer-journey">
                                    <div class="form-group">
                                        <label>
                                            Visiting regularly
                                        </label>
                                        <select class="form-control givepoint-img" name="regular_visitor">
                                            <option value="10 Days" {{ $awardsData->regular_visitor == '10 Days'  ? 'selected' : '' }}>10 Days</option>
                                            <option value="15 Days" {{ $awardsData->regular_visitor == '15 Days'  ? 'selected' : '' }}>15 Days</option>
                                            <option value="20 Days" {{ $awardsData->regular_visitor == '20 Days'  ? 'selected' : '' }}>20 Days</option>
                                            <option value="25 Days" {{ $awardsData->regular_visitor == '25 Days'  ? 'selected' : '' }}>25 Days</option>
                                            <option value="30 Days" {{ $awardsData->regular_visitor == '30 Days'  ? 'selected' : '' }}>30 Days</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Spending Amounts</label>
                                        <input type="text" value="{{ $awardsData->visitor_points }}" class="form-control" placeholder="10 Points" name="visitor_points">
                                    </div>
                                    <div class="form-group">
                                        <label>By Each Sharing Profile Award</label>
                                        <input type="text" name="big_spender" value="<?php echo $awardsData->big_spender ?>" class="form-control" placeholder="> 700 €">
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary bgcolor">Update Changes</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="generate Customer-journey">

                                    <div class="form-group">
                                        <label>
                                            Award
                                        </label>
                                        <input type="name" class="form-control" placeholder="10 Points">
                                    </div>
                                    <div class="form-group">
                                        <label>Award</label>
                                        <input type="name" class="form-control" placeholder="15 Points">
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
                <div class="form-box check-in-add award-sec">
                    <div class="row">
                        <form method="POST" action="{{ url('merchant/menu-category-management/save-menu-category') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="regular-visitor">
                                <div class="col-md-4 col-sm-4">
                                    <p>
                                        Regular Visitor
                                    </p>
                                    <span class="mascot">
                                        Benefit.Me Mascot
                                    </span>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <p>
                                        Regular Visitor
                                    </p>
                                    <span class="mascot">
                                        Benefit.Me Mascot
                                    </span>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <p>
                                        Regular Visitor
                                    </p>
                                    <span class="mascot">
                                        Benefit.Me Mascot
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h3>Earn More Benefit.Me Mascot when you</h3>
                                <p>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/share.png')}}" alt="share">
                                        Share the app
                                    </a>
                                </p>
                                <p>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/invite_people.png')}}" alt="share">
                                        Invite People
                                    </a>
                                </p>
                            </div>
                        </form>
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