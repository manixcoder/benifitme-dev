@extends('merchent.master')
@section('pageTitle', 'Adverting')
@section('content')
@section('pageCss')
<style>
</style>
@stop

<div class="add-newoffer">
    <div class="pra-sec">
        <p> Edit Ad</p>
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
    <?php // dd($addsData); ?>
    <div class="form-box">
        <div class="row">
            <div class="generate  Customer-journey">
                <form method="POST" action="{{ url('/merchant/adverting-management/'.$addsData->id.'/update-adverting') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group ">
                            <div class="coutome-uploadbtn">
                                <input type="file" name="banner_image" class="form-control @error('parent') has-danger @enderror upload-file">
                                <span>
                                    <figure>
                                        @if($addsData->banner_image !='')
                                        <img src="{{ asset('public/uploads')}}/{{ $addsData->banner_image }}" alt="upload_img " width="40px">
                                        @else
                                        <img src="{{ asset('public/merchemtAssets/images/upload_img.png')}}" alt="upload_img " width="40px">
                                        @endif
                                    </figure>
                                    Upload an ad banner
                                </span>
                            </div>
                            @error('banner_image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label>Advertisement Title</label>
                        <div class="form-group">
                            <input type="text" name="ad_title" class="form-control @error('ad_title') has-danger @enderror" value="{{ $addsData->ad_title }}" placeholder="Advertisement Title">
                            @error('ad_title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label>Product</label>
                        @php
                        $productData = DB::table('products')->where('merchent_id', Auth::user()->id)->where('product_type','1')->get();
                        @endphp
                        <div class="form-group">
                            <select class="form-control @error('ad_product') has-danger @enderror givepoint-img" name="ad_product">
                                <option value="">Select Product</option>
                                @foreach($productData as $product)
                                <option value="{{ $product->id }}" {{ $product->id == $addsData->ad_product ? 'selected' : '' }}>{{ $product->product_name }}</option>
                                @endforeach
                            </select>
                            @error('ad_product')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label>Target (product url)</label>
                        <div class="form-group">
                            <input type="text" name="product_url" class="form-control @error('product_url') has-danger @enderror" value="{{ $addsData->product_url }}" placeholder="https://www.benifitme.com/Lenovo Ideapad 5DSGVYF24&marketplace">
                            @error('product_url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
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