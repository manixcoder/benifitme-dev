@extends('merchent.master')
@section('pageTitle', 'Menu')
@section('content')
@section('pageCss')
<style>
</style>
@stop
<div class="category-sec">
    <div class="menu-category menu-switch">
        <div class="col-md-6 text-left">
            <span> Menu</span>
        </div>
        @if(Session::has('status'))
        <div class="alert alert-{{ Session::get('status') }}">
            <i class="fa fa-building-o" aria-hidden="true"></i> {{ Session::get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
        </div>
        @endif
        <div class="col-md-6 text-right">
            <span class="refresh">
                <a href="{{ url('merchant/menu-management/') }}">
                    <i class="fa fa-refresh" aria-hidden="true"></i> Switch to created menu
                </a></span>
            <a href="{{ url('merchant/menu-management/create-card') }}">Add New Dise</a>
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="menu-images">
            <figure>
                <img src="{{ asset('public/merchemtAssets/images/dinner.jpg')}}" alt="dinner" width="100%">
            </figure>

            <span class="delete-icon"><a href="#"><img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="delete" width="15px"></a></span>
        </div>
    </div>
</div>

@endsection
@section('pagejs')
<script>
</script>
@stop