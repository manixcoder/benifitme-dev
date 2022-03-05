@extends('merchent.master')
@section('pageTitle', 'customerJounery')
@section('content')
@section('pageCss')
<style>
</style>
@stop

<div class="add-newoffer">
    <div class="pra-sec">
        <p>Customer Journey</p>
    </div>
    <div class="form-box  Customer-journey">

        <div class="row">

            <form>
                <div class="col-md-12">
                    <h3>Set Specific Loyalty Points</h3>
                    <label>Action after first contact</label>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                        <select class="form-control text-color">
                            <option>4 Weeks</option>
                            <option>s</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                        <select class="form-control text-color">
                            <option>Set action</option>
                            <option>s</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 text-right">
                    <div class="pro-service Message">
                        <a href="#" data-toggle="modal" data-target="#Message-popup">
                            Individual Message
                            <img src="{{ asset('public/merchemtAssets/images/arrow_view.png')}}" alt="arrow_view" width="15px">
                        </a>
                    </div>
                </div>
                <div class="col-md-12">
                    <label>Initial purchase</label>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                        <select class="form-control text-color">
                            <option>5</option>
                            <option>s</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                        <select class="form-control text-color">
                            <option>Set action</option>
                            <option>s</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 text-right">
                    <div class="pro-service Message">
                        <a href="#" data-toggle="modal" data-target="#Message-popup">
                            Individual Message
                            <img src="{{ asset('public/merchemtAssets/images/arrow_view.png')}}" alt="arrow_view" width="15px">
                        </a>
                    </div>
                </div>
                <div class="col-md-12">
                    <label>Discount Claimed</label>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                        <select class="form-control text-color">
                            <option>3</option>
                            <option>s</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                        <select class="form-control text-color">
                            <option>Set action</option>
                            <option>s</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 text-right">
                    <div class="pro-service Message">
                        <a href="#" data-toggle="modal" data-target="#Message-popup">
                            Individual Message
                            <img src="{{ asset('public/merchemtAssets/images/arrow_view.png')}}" alt="arrow_view" width="15px">
                        </a>
                    </div>
                </div>
                <div class="col-md-12">
                    <label>Visit/Purchase rating</label>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                        <select class="form-control text-color">
                            <option>6</option>
                            <option>s</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                        <select class="form-control text-color">
                            <option>Set action</option>
                            <option>s</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 text-right">
                    <div class="pro-service Message">
                        <a href="#" data-toggle="modal" data-target="#Message-popup">
                            Individual Message
                            <img src="{{ asset('public/merchemtAssets/images/arrow_view.png')}}" alt="arrow_view" width="15px">
                        </a>
                    </div>
                </div>
                <div class="col-md-12">
                    <label>Birthday</label>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                        <select class="form-control text-color">
                            <option>2</option>
                            <option>s</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4 col-sm-4"></div>
                <div class="col-md-12"> </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary bgcolor">Update Changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@section('pagejs')
<script>
</script>
@stop