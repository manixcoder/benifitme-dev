@extends('merchent.master')
@section('pageTitle', 'My QR Code')
@section('content')
@section('pageCss')
<style>
</style>
@stop

<div class="add-newoffer">
    <div class="pra-sec">
        <p>My QR Code</p>
    </div>
    <div class="form-box">
        <h3>Generate QR Code</h3>
        <div class="row">

            <div class="col-md-6 col-sm-6">

                <div class="generate">
                    <form>
                        <div class="form-group">
                            <select class="form-control givepoint-img">
                                <option>Company</option>
                                <option>s</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <p>
                                <span><img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle" width="85px"></span>
                                <span>Shoppy</span>
                            </p>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary bgcolor">Generate</button>
                        </div>

                    </form>
                </div>
            </div>


            <div class="col-md-4 col-sm-4">
                <div class="code-img">
                    <figure>
                        <img src="{{ asset('public/merchemtAssets/images/QR-CODE (1).png')}}" alt="QR-CODE (1)">
                    </figure>
                    <p>
                        <span class="pull-left"><a href="#">Share <img src="{{ asset('public/merchemtAssets/images/share.png')}}" alt="share" width="15px"> </a></span>
                        <span class="pull-right"><a href="#"> <img src="{{ asset('public/merchemtAssets/images/print.png')}}" alt="print" width="15px"> </a></span>
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