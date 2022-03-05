@extends('merchent.master')
@section('pageTitle', 'Servies')
@section('content')
@section('pageCss')
<style>
</style>
@stop
<div class="add-newoffer">
    <div class="dashboard-heading">
        <h3>Add New Product</h3>
    </div>
    <div class="form-box">
        <div class="row">
            <div class="generate  Customer-journey">
                <form method="POST" action="{{ url('/merchant/product-management/save-product') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group ">
                            <div class="coutome-uploadbtn">
                                <input type="file" class="form-control upload-file" name="pro_image" placeholder="Mobile Number">
                                <span>
                                    <figure>
                                        <img src="{{ asset('public/merchemtAssets/images/upload_img.png')}}" alt="upload_img " width="40px">
                                    </figure>
                                    Upload an image
                                </span>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="product_type" value="2">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="product_name" class="form-control @error('product_name') is-invalid @enderror" value="{{ old('product_name') }}" placeholder="Service Name">
                            @error('product_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        @php
                        $productCategory = DB::table('services_category')->get();

                        @endphp
                        @if(count($productCategory) > 0)
                        <div class="form-group">
                            <select name="pro_category" id="pro_category" class="form-control @error('pro_category') is-invalid @enderror">
                                <option value="">Select category</option>
                                @foreach($productCategory as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                            <a href="{{ url('/merchant/services-category-management/create') }}">Create New Category</a>
                            <!-- <input type="text" name="pro_category" class="form-control @error('pro_category') is-invalid @enderror" value="{{ old('pro_category') }}" placeholder="Category"> -->
                            @error('pro_category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        @else
                        <div class="form-group">
                            <select name="pro_category" id="pro_category" class="form-control @error('pro_category') is-invalid @enderror">
                                <option value="">Select category</option>
                            </select>
                        </div>
                        <a href="{{ url('/merchant/services-category-management/create') }}">Create New Category</a>
                        @endif
                    </div>
                    <!-- <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="pro_price" class="form-control @error('pro_price') is-invalid @enderror" value="{{ old('pro_price') }}" placeholder="$ Price">
                            @error('pro_price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div> -->
                    <div class="col-md-6 col-sm-6">

                        <div class="form-group">
                            <input type="text" name="pro_discount" class="form-control discount-sale @error('pro_discount') is-invalid @enderror" value="{{ old('pro_discount') }}" placeholder="Discount">
                            @error('pro_discount')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <input type="date" name="pro_valid_till" class="form-control @error('pro_valid_till') is-invalid @enderror" value="{{ old('pro_valid_till') }}" placeholder="Valid Till">
                            @error('pro_valid_till')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control @error('product_name') is-invalid @enderror" value="{{ old('pro_description') }}" name="pro_description"></textarea>
                            @error('pro_description')
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
                            <button type="submit" class="btn btn-primary bgcolor">Save</button>
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