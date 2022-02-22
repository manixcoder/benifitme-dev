@extends('merchent.master')
@section('pageTitle', 'Menu')
@section('content')
@section('pageCss')
<style>
</style>
@stop


<div class="add-newoffer">
    <div class="pra-sec">
        <p>Edit Dish</p>
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
                <form method="POST" action="{{ url('/merchant/menu-management/'.$dise->id.'/update-menu') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group ">
                            <div class="coutome-uploadbtn">

                                <input type="file" name="disk_image" class="form-control upload-file">

                                @error('disk_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <span>
                                    <figure>
                                        @if($dise->disk_image !='')
                                        <img src="{{ asset('public/uploads/')}}/{{ $dise->disk_image }}" alt="upload_img " width="40px">
                                        @else
                                        <img src="{{ asset('public/merchemtAssets/images/upload_img.png')}}" alt="upload_img " width="40px">
                                        @endif
                                    </figure>
                                    Upload an image
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label>Dish Name</label>
                        <div class="form-group">
                            <input type="text" name="dise_name" class="form-control  @error('dise_name') is-invalid @enderror" value="{{ $dise->dise_name }}" placeholder="Mexican green wave pizza">
                            @error('dise_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label>Short Description</label>
                        <div class="form-group">
                            <input type="text" name="dise_description" class="form-control @error('dise_description') is-invalid @enderror" value="{{ $dise->dise_description }}" placeholder="With cheese &amp; oregano">
                            @error('dise_description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label>Category</label>
                        <div class="form-group">
                            <select class="form-control givepoint-img @error('disk_category_id') is-invalid @enderror" id="type" name="disk_category_id" required>
                                <option>Select category</option>
                                @foreach($foodCategoryData as $foodCategory)
                                <option value="{{ $foodCategory->id}}" {{ $foodCategory->id == $dise->disk_category_id ? 'selected' : '' }}>{{ $foodCategory->category_name}}</option>
                                @endforeach
                            </select>
                            @error('disk_category_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label>Price</label>
                        <div class="form-group">
                            <input type="text" name="disk_price" class="form-control @error('disk_price') is-invalid @enderror" value="{{ $dise->disk_price }}" placeholder="$    40">
                            @error('disk_price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label>Discount</label>
                        <div class="form-group">
                            <input type="text" name="disk_discount" class="form-control discount-sale @error('disk_discount') is-invalid @enderror" value="{{ $dise->disk_discount }}" placeholder="20">
                            @error('disk_discount')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label>Validity</label>
                        <div class="form-group">
                            <input type="date" name="disk_valid" class="form-control @error('disk_valid') is-invalid @enderror" value="{{$dise->disk_valid}}" placeholder="Valid Till">
                            @error('disk_valid')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 text-right click-bar">
                        <span class="pull-left">Available</span>
                        <label class="switch right-click">
                            <input type="checkbox" class="form-control @error('is_available') is-invalid @enderror" name="is_available">
                            <span class="slider round"></span>
                            @error('is_available')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </label>
                    </div>
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