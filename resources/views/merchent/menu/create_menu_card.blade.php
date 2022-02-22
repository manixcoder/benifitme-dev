@extends('merchent.master')
@section('pageTitle', 'Menu')
@section('content')
@section('pageCss')
<style>
</style>
@stop
<div class="add-newoffer">
    <div class="pra-sec">
        <p>Add New Dish</p>
    </div>
    @if(Session::has('status'))
    <div class="alert alert-{{ Session::get('status') }}">
        <i class="fa fa-building-o" aria-hidden="true"></i> {{ Session::get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
    </div>
    @endif
    <div class="form-box">
        <div class="row">
            <?php
            $foodCategoryData = DB::table('food_category')->where('merchent_id', Auth::user()->id)->get();
            ?>
            <div class="generate  Customer-journey">
                <form method="POST" action="{{ url('/merchant/menu-management/save-menu-card') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group ">
                            <div class="coutome-uploadbtn">
                                <input type="file" name="disk_image" class="form-control @error('disk_image') is-invalid @enderror upload-file">
                                <span>
                                    <figure>
                                        <img src="{{ asset('public/merchemtAssets/images/upload_img.png')}}" alt="upload_img " width="40px">
                                    </figure>
                                    Upload menu image
                                    <br>
                                    .pdf .jpg .png
                                </span>
                                @error('disk_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="is_with_category" id="is_with_category" value="1">

                    <div class="col-md-12"></div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <button type="button" class="btn btn-primary">Cancel</button>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary bgcolor">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@section('pagejs')
<script>
</script>
@stop