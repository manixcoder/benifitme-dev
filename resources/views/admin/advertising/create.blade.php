@extends('admin.master')
@section('pageTitle', 'Create Advertising')
@section('content')
@section('pageCss')
<style>

</style>
@stop
<div class="add-newuser">
    <p>
        <span class="user-color">Advertising</span>
        <span>>Add New Advertising Banner</span>
    </p>
</div>
<div class="user-name">
    <div class="row">
        <form method="POST" action="{{ url('/admin/advertising-management/save-advertising') }}" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12 col-sm-12">
                <div class="col-md-6 ">
                    <p>Advertising Name</p>
                </div>
                <input type="text" name="ad_name" class="form-control @error('ad_name') has-danger @enderror">
                @error('ad_name')
                <small class="form-control-feedback">{{ $errors->first('ad_name') }}</small>
                @enderror
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="upload-file">
                    <div class="form-group">
                        <span>
                            <input type="file" name="ad_image" class="form-control @error('ad_image') has-danger @enderror choise-file" placeholder="Upload advertisement banner">
                            <figure>
                                <img src="{{ asset('public/adminAssets/images/upload.png')}}" alt="upload">
                            </figure>
                            Upload advertisement banner
                            @error('ad_image')
                            <small class="form-control-feedback">{{ $errors->first('ad_image') }}</small>
                            @enderror
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="col-md-6 ">
                    <p>Link</p>
                </div>
                <input type="text" name="link" class="form-control @error('ad_image') has-danger @enderror">
                @error('link')
                <small class="form-control-feedback">{{ $errors->first('link') }}</small>
                @enderror
            </div>
            <div class="btn-group">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Cancel</button>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary bgcolor">Publish</button>
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