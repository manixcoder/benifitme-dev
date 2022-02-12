@extends('merchent.master')
@section('pageTitle', 'Product')
@section('content')
@section('pageCss')
<style>
</style>
@stop
<div class="add-newoffer appoint-ment">
    @if(Session::has('status'))
    <div class="alert alert-{{ Session::get('status') }}">
        <i class="fa fa-building-o" aria-hidden="true"></i>
        {{ Session::get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    @endif
    <div class="dashboard-heading">
        <h3>
            <span class="products-hedmrtop">Products &amp; Services </span>
        </h3>
    </div>
    <div class="new-requests">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                    Products
                </a>
            </li>
            <li role="presentation">
                <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                    Services
                </a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                <a href="{{ url('merchant/product-management/create') }}" class="addproduct-btn pull-right">Add New Product</a>
                <div class="current-offer">
                    @php
                    $productData = DB::table('products')->where('merchent_id', Auth::user()->id)->where('product_type','1')->orderby('id','DESC')->get();
                    $id= '59595'
                    @endphp

                    @forelse ($productData as $key => $product)

                    <div class="current-offerBox">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="imgbox">
                                    @if($product->pro_image !='')
                                    <img src="{{ URL::asset('/public/uploads/') }}/{{ $product->pro_image }}" alt="icon">
                                    @else
                                    <img src="{{ asset('public/merchemtAssets/images/vivo.jpg')}}" alt="icon">
                                    @endif

                                </div>
                                <div class="current-offercont">
                                    <h5>#{{ $key +$id }}</h5>
                                    <h4>
                                        {{ $product->product_name }}
                                        <span>
                                            {{ $product->pro_category }}
                                        </span>
                                    </h4>
                                    <p>
                                        $ {{ $product->pro_price }}
                                        <span class="discount-cont">
                                            {{ $product->pro_discount }}% Discount
                                        </span>
                                        <span class="redclr">
                                            Offer Valid till : {{ date('d M y', strtotime( $product->pro_valid_till )) }}
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ul class="socialIcon">
                                    <li>
                                        <a href="#">
                                            <i>
                                                <img src="{{ asset('public/merchemtAssets/images/likes.png')}}" alt="icon">
                                            </i>
                                            30 Likes
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i>
                                                <img src="{{ asset('public/merchemtAssets/images/availed.png')}}" alt="icon">
                                            </i>
                                            12 Availed
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="shareicon">
                                            <i>
                                                <img src="{{ asset('public/merchemtAssets/images/share.png')}}" alt="icon">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="deleteicon">
                                            <i>
                                                <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon">
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-12 prabox">
                                <p>
                                    {{ $product->pro_description }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="current-offerBox">
                        <div class="row">
                            <div class="col-md-6">

                                <p>Product Not found</p>

                            </div>
                        </div>
                    </div>
                    @endforelse

                    <!--div class="current-offerBox">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="imgbox">
                                    <img src="{{ asset('public/merchemtAssets/images/ideapad.jpeg')}}" alt="icon">
                                </div>
                                <div class="current-offercont">
                                    <h5>#59595</h5>
                                    <h4>HUAWEI P50 Pro <span>Cellphone</span></h4>
                                    <p>$ 1200 <span class="discount-cont">70% Discount</span> <span class="redclr">Offer Valid till : 10 Oct 21</span></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ul class="socialIcon">
                                    <li><a href="#"><i><img src="{{ asset('public/merchemtAssets/images/likes.png')}}" alt="icon"></i>30 Likes</a></li>
                                    <li><a href="#"><i><img src="{{ asset('public/merchemtAssets/images/availed.png')}}" alt="icon"></i>12 Availed</a></li>
                                    <li><a href="#" class="shareicon"><i><img src="{{ asset('public/merchemtAssets/images/share.png')}}" alt="icon"></i></a></li>
                                    <li><a href="#" class="deleteicon"><i><img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-md-12 prabox">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                    <div class="current-offerBox">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="imgbox">
                                    <img src="{{ asset('public/merchemtAssets/images/vivo-1.jpg')}}" alt="icon">
                                </div>
                                <div class="current-offercont">
                                    <h5>#59595</h5>
                                    <h4>HUAWEI P50 Pro <span>Cellphone</span></h4>
                                    <p>$ 1200 <span class="discount-cont">70% Discount</span> <span class="redclr">Offer Valid till : 10 Oct 21</span></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ul class="socialIcon">
                                    <li><a href="#"><i><img src="{{ asset('public/merchemtAssets/images/likes.png')}}" alt="icon"></i>30 Likes</a></li>
                                    <li><a href="#"><i><img src="{{ asset('public/merchemtAssets/images/availed.png')}}" alt="icon"></i>12 Availed</a></li>
                                    <li><a href="#" class="shareicon"><i><img src="{{ asset('public/merchemtAssets/images/share.png')}}" alt="icon"></i></a></li>
                                    <li><a href="#" class="deleteicon"><i><img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-md-12 prabox">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div -->
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
                <a href="{{ url('merchant/product-management/create-service') }}" class="addproduct-btn pull-right">Add New Service</a>
                <div class="current-offer">
                    @php
                    $productData = DB::table('products')
                    ->where('merchent_id', Auth::user()->id)
                    ->where('product_type','2')
                    ->orderby('id','DESC')
                    ->get();
                    $id= '59595';
                    @endphp
                    @forelse ($productData as $key => $product)
                    <div class="current-offerBox">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="imgbox">
                                    @if($product->pro_image !='')
                                    <img src="{{ URL::asset('/public/uploads/') }}/{{ $product->pro_image }}" alt="icon">
                                    @else
                                    <img src="{{ asset('public/merchemtAssets/images/vivo.jpg')}}" alt="icon">
                                    @endif
                                </div>
                                <div class="current-offercont">
                                    <h5>#{{ $key + $id }}</h5>
                                    <h4>
                                        {{ $product->product_name }}
                                        <span>
                                            {{ $product->pro_category }}
                                        </span>
                                    </h4>
                                    <p>
                                        <span class="discount-cont">
                                            {{ $product->pro_discount }}% Discount
                                        </span>
                                        <span class="redclr">
                                            Offer Valid till :
                                            {{ date('d M y', strtotime( $product->pro_valid_till )) }}
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ul class="socialIcon">
                                    <li><a href="#">
                                            <i>
                                                <img src="{{ asset('public/merchemtAssets/images/likes.png')}}" alt="icon">
                                            </i>
                                            30 Likes
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i>
                                                <img src="{{ asset('public/merchemtAssets/images/availed.png')}}" alt="icon">
                                            </i>
                                            12 Availed
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="shareicon">
                                            <i>
                                                <img src="{{ asset('public/merchemtAssets/images/share.png')}}" alt="icon">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="deleteicon">
                                            <i>
                                                <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon">
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-12 prabox">
                                <p>
                                    {{ $product->pro_description }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="current-offerBox">
                        <div class="row">
                            <div class="col-md-6">

                                <p>Service Not found</p>

                            </div>
                        </div>
                    </div>
                    @endforelse

                    <!-- div class="current-offerBox">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="imgbox">
                                    <img src="{{ asset('public/merchemtAssets/images/vivo-1.jpg')}}" alt="icon">
                                </div>
                                <div class="current-offercont">
                                    <h5>#59595</h5>
                                    <h4>Mobile Repairing <span>Repair</span></h4>
                                    <p>
                                        $ 1200
                                        <span class="discount-cont">
                                            70% Discount
                                        </span>
                                        <span class="redclr">
                                            Offer Valid till : 10 Oct 21
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ul class="socialIcon">
                                    <li>
                                        <a href="#">
                                            <i>
                                                <img src="{{ asset('public/merchemtAssets/images/likes.png')}}" alt="icon">
                                            </i>
                                            30 Likes
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i>
                                                <img src="{{ asset('public/merchemtAssets/images/availed.png')}}" alt="icon">
                                            </i>
                                            12 Availed
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="shareicon">
                                            <i>
                                                <img src="{{ asset('public/merchemtAssets/images/share.png')}}" alt="icon">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="deleteicon">
                                            <i>
                                                <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon">
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-12 prabox">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('pagejs')
<script>
</script>
@stop