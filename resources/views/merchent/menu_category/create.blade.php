@extends('merchent.master')
@section('pageTitle', 'Menu Category')
@section('content')
@section('pageCss')
<style>
</style>
@stop
<div class="add-newoffer">
    <div class="pra-sec">
        <p>Add New Category</p>
    </div>
    @if(Session::has('status'))
        <div class="alert alert-{{ Session::get('status') }}">
            <i class="fa fa-building-o" aria-hidden="true"></i> {{ Session::get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
        </div>
        @endif
    <div class="form-box  Customer-journey">
        <div class="row category-mr">
            <div class="generate">
                <form method="POST" action="{{ url('merchant/menu-category-management/save-menu-category') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12 col-sm-12">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="text" name="category_name" class="form-control" placeholder="Category 2">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">

                        </div>
                        <div class="col-md-4 col-sm-4"></div>
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <button type="button" class="btn btn-primary">Cancel</button>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary bgcolor">Add</button>
                            </div>
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