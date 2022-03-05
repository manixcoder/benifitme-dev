@extends('merchent.master')
@section('pageTitle', 'Check In')
@section('content')
@section('pageCss')
<style>
</style>
@stop

<div class="add-newoffer">
    <div class="pra-sec">
        <p>Check In</p>
    </div>
    @if(Session::has('status'))
    <div class="alert alert-{{ Session::get('status') }}">
        <i class="fa fa-building-o" aria-hidden="true"></i> {{ Session::get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
    </div>
    @endif
    <div class="check-in-tabing">

        <!-- Nav tabs -->
        <div class="checkin-venuepg">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                        Venue
                    </a>
                </li>
                <li role="presentation">
                    <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                        QR Code
                    </a>
                </li>
            </ul>
        </div>



        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                <div class="form-box ">
                    <div class="row">
                        <form method="POST" action="{{ url('/merchant/check-in-management/save-check-in') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6 col-sm-6">
                                <div class="generate Customer-journey">
                                    <div class="form-group loction">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3505.214826809688!2d77.4117516145573!3d28.53326189531884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce9772074757d%3A0x6372df84e1d1247c!2sARK%20NEWTECH!5e0!3m2!1sen!2sin!4v1634195597668!5m2!1sen!2sin" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                    <div class="form-group">
                                        <label>Set Reward</label>
                                        <input type="text" name="reward_value" class="form-control" placeholder="100">
                                    </div>
                                    <div class="form-group">
                                        <label>Terms &amp; Conditions</label>
                                        <textarea class="form-control" name="terms_conditions" placeholder="Write a short terms &amp; conditions"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary bgcolor">Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
                <div class="form-box check-in-add ">
                    <div class="row">
                        <form method="POST" action="{{ url('/merchant/check-in-management/save-check-in') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6 col-sm-6">
                                <div class="generate Customer-journey">
                                    <div class="form-group">
                                        <figure>
                                            <img src="{{ asset('public/merchemtAssets/images/QR-CODE (1).png')}}" alt="QR-CODE">
                                        </figure>
                                        <img src="{{ asset('public/merchemtAssets/images/print.png')}}" alt="print" width="20px">
                                    </div>
                                    <div class="form-group">
                                        <label>Set Reward</label>
                                        <input type="text" name="reward_value" class="form-control" placeholder="100">
                                    </div>
                                    <div class="form-group">
                                        <label>Terms &amp; Conditions</label>
                                        <textarea class="form-control" name="terms_conditions" placeholder="Write a short terms &amp; conditions"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary bgcolor">Save</button>
                                    </div>
                                </div>
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