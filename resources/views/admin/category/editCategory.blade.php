@extends('admin.master')
@section('pageTitle', 'Company Category')
@section('content')
@section('pageCss')
<style>

</style>
@stop
<div class="add-newuser">
    <p>
        <span class="user-color">
            Comapany Category
        </span>
        <span>&gt;Add New Category</span>
    </p>
</div>
<div class="user-name">
    <div class="row">
        <form method="POST" action="{{ url('/admin/category-management/'.$categoryData->id.'/update-categary') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="cat_type" value="campany_cat">
            <div class="col-md-6 col-sm-6">
                <div class="form-group">
                    <label>Comapany Category</label>
                    <input type="text" name="name" class="form-control @error('name') has-danger @enderror" value="{{ $categoryData->name }}" placeholder="Comapany Category">
                    @error('name')
                    <small class="form-control-feedback">{{ $errors->first('name') }}</small>
                    @enderror
                </div>
            </div>
            <div class="btn-group">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <a href="http://localhost/benifitme/admin/category-management" class="btn btn-primary">Cancel</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary bgcolor">Update</button>
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