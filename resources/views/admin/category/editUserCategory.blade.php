@extends('admin.master')
@section('pageTitle', 'Update User Category')
@section('content')
@section('pageCss')
<style>

</style>
@stop
<div class="add-newuser">
    <p>
        <span class="user-color">
            User Category
        </span>
        <span>&gt;Update User Category</span>
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
        <form method="POST" action="{{ url('/admin/category-management/'.$categoryData->id.'/update-categary') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="cat_type" value="usercat">
            <div class="col-md-6 col-sm-6">
                <div class="form-group">
                    <label>User Category</label>
                    <input type="text" name="name" class="form-control @error('name') has-danger @enderror" value="{{ $categoryData->name }}" placeholder="User Category">
                    @error('name')
                    <small class="form-control-feedback">{{ $errors->first('name') }}</small>
                    @enderror
                </div>
            </div>
            <div class="btn-group">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <a href="http://localhost/benifitme/admin/user-management" class="btn btn-primary">Cancel</a>
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