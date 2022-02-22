@extends('merchent.master')
@section('pageTitle', 'Adverting')
@section('content')
@section('pageCss')
<style>
</style>
@stop
<div class="appoint-ment">
    <div class="appoint-sec">
        <div class="row">
            <div class="col-md-6 text-left">
                <p>Menu</p>
            </div>
            <div class="col-md-6 text-right">
                <a href="{{ url('merchant/adverting-management/create') }}">New Ad</a>
            </div>
        </div>
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
    @php
    $advertingData = DB::table('merchent_advertings')->where('merchent_id', Auth::user()->id)->get();
    @endphp
    <div class="new-requests">
        @forelse ($advertingData as $adverting)
        @php
        $productData = DB::table('products')->where('id', $adverting->ad_product)->first();
        @endphp
        <div class="john-doe-box">
            <div class="row">
                <div class="col-md-10 text-left">
                    <figure class="pizza-sec">
                        @if($adverting->banner_image !='')
                        <img src="{{ asset('public/uploads')}}/{{ $adverting->banner_image }}" alt="circle">
                        @else
                        <img src="{{ asset('public/merchemtAssets/images/mega-sale.jpeg')}}" alt="circle">
                        @endif
                    </figure>
                    <div class="Jessica-pra text-contant">
                        <h3>{{ $adverting->ad_title }}</h3>
                        <p>{{ $productData->product_name}}</p>
                        <a href="{{ $adverting->product_url }}" target="_blank">{{ $adverting->product_url}}</a>

                    </div>
                </div>
                <div class="col-md-2 text-right">
                    <ul>
                        <li>
                            <a href="{{ url('/merchant/adverting-management/'.$adverting->id.'/edit') }}">
                                <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="18px">
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/merchant/adverting-management/delete/'.$adverting->id) }}">
                                <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="18px">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @empty
        <div class="john-doe-box">
            <div class="row">
            </div>
        </div>
        @endforelse
        <!--div class="john-doe-box">
            <div class="row">
                <div class="col-md-10 text-left">
                    <figure class="pizza-sec">
                        <img src="{{ asset('public/merchemtAssets/images/big-sale.jpeg')}}" alt="circle">
                    </figure>
                    <div class="Jessica-pra text-contant">
                        <h3>Advertisement Title</h3>
                        <p>Lenovo Ideapad 5</p>
                        <a href="#">https://www.benifitme.com/Lenovo Ideapad 5DSGVYF24&amp;marketplace </a>
                    </div>
                </div>
                <div class="col-md-2 text-right">
                    <ul>
                        <li><a href="#"> <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="18px"></a></li>
                        <li><a href="#"> <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="18px"></a></li>
                    </ul>
                </div>
            </div>
        </!--div>
        <div class="john-doe-box">
            <div class="row">
                <div class="col-md-10 text-left">
                    <figure class="pizza-sec">
                        <img src="{{ asset('public/merchemtAssets/images/fashion-sale.jpeg')}}" alt="circle">
                    </figure>
                    <div class="Jessica-pra text-contant">
                        <h3>Advertisement Title</h3>
                        <p>Lenovo Ideapad 5</p>
                        <a href="#">https://www.benifitme.com/Lenovo Ideapad 5DSGVYF24&amp;marketplace</a>
                    </div>
                </div>
                <div class="col-md-2 text-right">
                    <ul>
                        <li><a href="#"> <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="18px"></a></li>
                        <li><a href="#"> <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="18px"></a></li>
                    </ul>
                </div>
            </div>
        </div -->
    </div>
</div>


@endsection
@section('pagejs')
<script>
</script>
@stop