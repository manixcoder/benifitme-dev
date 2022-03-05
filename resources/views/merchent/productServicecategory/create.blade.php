@extends('merchent.master')
@section('pageTitle', 'Service & Product Category')
@section('content')
@section('pageCss')
<style>

</style>
@stop
<div class="add-newuser">
    <p>
        <span class="user-color">
            Service & Product Category
        </span>
        <span>&gt;Add New Category</span>
    </p>
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
<div class="user-name">
    <div class="row">
        @php
        $categorydata = DB::table('services_category')->get();
        @endphp
        <form method="POST" action="{{ url('/merchant/services-category-management/save-services-category') }}" enctype="multipart/form-data">
            @csrf

            <div class="col-md-6 col-sm-6">
                <div class="form-group">
                    <label>Service & Product Category Name</label>
                    <input type="text" name="category_name" class="form-control @error('category_name') has-danger @enderror" value="{{ old('category_name') }}" placeholder="Service & Product Category Name">
                    @error('category_name')
                    <small class="form-control-feedback">{{ $errors->first('category_name') }}</small>
                    @enderror
                </div>
            </div>
            @if(count($categorydata) > 0)
            <div class="col-md-6 col-sm-6">
                <div class="form-group">
                    <label>Service & Product Category</label>
                    <select name="parent" class="form-control">
                        <option value="" selected>Select Service & Product Category Name</option>
                        @foreach($categorydata as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>

                </div>
            </div>
            @endif

            <div class="btn-group">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <a href="{{ url('admin/services-category-management/') }}" class="btn btn-primary">Cancel</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary bgcolor">Add</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section('pagejs')
<script>

</script>
@stop