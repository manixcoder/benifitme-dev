@extends('frontend.master')
@section('pageCss')
<style>
    #verificationModal.in {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1040;
        background-color: rgba(0, 0, 0, .5);
    }
</style>
@stop
@section('content')
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
<section class="service-slider fw text-center">
    <div class="fadeOut owl-carousel owl-theme">
        <div class="item">
            <div class="service-slider-cont">
                <div class="service_img">
                    <img src="{{ asset('public/frontendAssets/images/slider1.png')}}" alt="slider1">
                </div>
                <!-- <div class="slider-cont"></div> -->
            </div>
        </div>
        <div class="item">
            <div class="service-slider-cont">
                <div class="service_img">
                    <img src="{{ asset('public/frontendAssets/images/slider2.jpg')}}" alt="slider1">
                </div>
            </div>
        </div>
        <div class="item">
            <div class="service-slider-cont">
                <div class="service_img">
                    <img src="{{ asset('public/frontendAssets/images/slider1.png')}}" alt="slider1">
                </div>

            </div>
        </div>
        <div class="item">
            <div class="service-slider-cont">
                <div class="service_img">
                    <img src="{{ asset('public/frontendAssets/images/slider2.jpg')}}" alt="slider1">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="topstores-sec fw text-center">
    <div class="container">
        <div class="site-heading">
            <h3>Top Stores</h3>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="store-contbox">
                    <figure class="radius-box">
                        <img src="{{ asset('public/frontendAssets/images/grocery-img.jpg')}}" alt="img" />
                    </figure>
                    <div class="store-cont">
                        <h3>Grocery Mania</h3>
                        <p>20 offers</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="store-contbox">
                    <figure class="radius-box">
                        <img src="{{ asset('public/frontendAssets/images/shoping-img.jpg')}}" alt="img" />
                    </figure>
                    <div class="store-cont">
                        <h3>Shopping Creative</h3>
                        <p>30 offers</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="store-contbox">
                    <figure class="radius-box">
                        <img src="{{ asset('public/frontendAssets/images/giptshop.jpg')}}" alt="img" />
                    </figure>
                    <div class="store-cont">
                        <h3>Gift Shop</h3>
                        <p>25 offers</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="store-contbox">
                    <figure class="radius-box">
                        <img src="{{ asset('public/frontendAssets/images/migeez.jpg')}}" alt="img" />
                    </figure>
                    <div class="store-cont">
                        <h3>Migeez</h3>
                        <p>18 offers</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="store-contbox">
                    <figure class="radius-box">
                        <img src="{{ asset('public/frontendAssets/images/youme-img.jpeg')}}" alt="img" />
                    </figure>
                    <div class="store-cont">
                        <h3>You&Me Shop</h3>
                        <p>You&Me Shop</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="todayhot-discount fw">
    <div class="container">
        <div class="site-heading">
            <h3>Today's Hot Discount</h3>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="store-contbox text-center">
                    <figure class="store-icon">
                        <span class="redtext fw">70% Discount</span>
                        <img src="{{ asset('public/frontendAssets/images/migeez.jpg')}}" alt="img" />
                    </figure>
                    <div class="store-cont text-center">

                        <h3>Migeez</h3>
                        <p>The great gen : Upto 70% Off on Personal Care Appliances</p>
                        <a href="#" class="grab-offer">Grab The Offer</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="store-contbox text-center">
                    <figure class="store-icon">
                        <span class="redtext fw">75% Discount</span>
                        <img src="{{ asset('public/frontendAssets/images/youme-img.jpeg')}}" alt="img" />
                    </figure>
                    <div class="store-cont text-center">
                        <h3>You&Me Shop</h3>
                        <p>The great gen : Upto 75% Off on Home appliances</p>
                        <a href="#" class="grab-offer">Grab The Offer</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="store-contbox text-center">
                    <figure class="store-icon">
                        <span class="redtext fw">60% Discount</span>
                        <img src="{{ asset('public/frontendAssets/images/shoping-img.jpg')}}" alt="img" />
                    </figure>
                    <div class="store-cont text-center">
                        <h3>Shopping Creative</h3>
                        <p>The great gen : Upto 75% Off on Men's Shoes & T-Shirt</p>
                        <a href="#" class="grab-offer">Grab The Offer</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="store-contbox text-center">
                    <figure class="store-icon">
                        <span class="redtext fw">80% Discount</span>
                        <img src="{{ asset('public/frontendAssets/images/grocery-img.jpg')}}" alt="img" />
                    </figure>
                    <div class="store-cont text-center">
                        <h3>Grocery Mania</h3>
                        <p>The great gen : Upto 75% Off on Fresh vegetables & fruits</p>
                        <a href="#" class="grab-offer">Grab The Offer</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="store-contbox text-center">
                    <figure class="store-icon">
                        <span class="redtext fw">60% Discount</span>
                        <img src="{{ asset('public/frontendAssets/images/shoping-img.jpg')}}" alt="img" />
                    </figure>
                    <div class="store-cont text-center">
                        <h3>Shopping Creative</h3>
                        <p>The great gen : Upto 75% Off on Men's Shoes & T-Shirt</p>
                        <a href="#" class="grab-offer">Grab The Offer</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="store-contbox text-center">
                    <figure class="store-icon">
                        <span class="redtext fw">80% Discount</span>
                        <img src="{{ asset('public/frontendAssets/images/grocery-img.jpg')}}" alt="img" />
                    </figure>
                    <div class="store-cont text-center">
                        <h3>Grocery Mania</h3>
                        <p>The great gen : Upto 75% Off on Fresh vegetables & fruits</p>
                        <a href="#" class="grab-offer">Grab The Offer</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="store-contbox text-center">
                    <figure class="store-icon">
                        <span class="redtext fw">70% Discount</span>
                        <img src="{{ asset('public/frontendAssets/images/migeez.jpg')}}" alt="img" />
                    </figure>
                    <div class="store-cont text-center">
                        <h3>Migeez</h3>
                        <p>The great gen : Upto 70% Off on Personal Care Appliances</p>
                        <a href="#" class="grab-offer">Grab The Offer</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="store-contbox text-center">
                    <figure class="store-icon">
                        <span class="redtext fw">75% Discount</span>
                        <img src="{{ asset('public/frontendAssets/images/youme-img.jpeg')}}" alt="img" />
                    </figure>
                    <div class="store-cont text-center">
                        <h3>You&Me Shop</h3>
                        <p>The great gen : Upto 75% Off on Home appliances</p>
                        <a href="#" class="grab-offer">Grab The Offer</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="seemore-btn-sec">
                    <a href="#" class="seemore-btn">
                        See More
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="hotels-restaurants fw">
    <div class="container">
        <div class="site-heading text-center">
            <h3>Hotels & Restaurants</h3>
            @php
            $hotleRestroData = DB::table('users')
            ->whereIn('company_type', [2, 3])
            ->get();
            @endphp
        </div>
        <div class="restaurants-slider">
            <div class="loop owl-carousel owl-theme">
                @forelse ($hotleRestroData as $resthotel)
                <div class="item">
                    <div class="hotel-bgbox">
                        <div class="hotel-img">
                            <figure>
                                <img src="{{ asset('public/frontendAssets/images/hotel-img1.jpg')}}" alt="img" />
                            </figure>
                            @if($resthotel->company_type =='2')
                            <span>Restaurant</span>
                            @else
                            <span>Hotel</span>
                            @endif
                        </div>
                        <div class="hotel-cont">
                            <h3>{{ $resthotel->company_name }}</h3>
                            <h4><i><img src="{{ asset('public/frontendAssets/images/full_address.png')}}" alt="icon" /></i>{{ $resthotel->city }}</h4>
                        </div>
                    </div>
                </div>
                @empty
                <div class="item">
                    <div class="hotel-bgbox">
                    </div>
                </div>
                @endforelse
                
            </div>
        </div>
    </div>
</section>

<!--Login Modal  -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="login">
                    <div class="login-form">
                        <div class="login-form-sec">
                            <div class="login-with">
                                <figure>
                                    <img src="{{ asset('public/frontendAssets/images/logo_onboarding.png')}}" alt="logo_onboarding" width="80px">
                                </figure>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <h3>Login with Benefit.me</h3>
                                    <div class="form-box-sec">
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Login</button>
                                            </div>
                                        </div>
                                        <div class="login-facebook">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <a href="" class="btn btn-primary">
                                                            <img src="{{ asset('public/frontendAssets/images/l_facebook.png')}}" alt="facebook" width="22px">
                                                            Login with facebook
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <a href="" type="submit" class="btn btn-primary text-color ">
                                                            <img src="{{ asset('public/frontendAssets/images/l_google.png')}}" alt="" width="22px">
                                                            Login with Google
                                                        </a>
                                                    </div>
                                                </div>
                                                <p>
                                                    Don't have an account ?
                                                    <a href="javascript:void(0);" data-toggle="modal" id="singup_mod" data-target="#singupModal">
                                                        <span>
                                                            Sign up
                                                        </span>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--sing up Modal  -->
<div class="modal fade" id="singupModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="login">
                    <div class="login-form">
                        <div class="login-form-sec">
                            <div class="login-with">
                                <figure>
                                    <img src="{{ asset('public/frontendAssets/images/logo_onboarding.png')}}" alt="logo_onboarding" width="80px">
                                </figure>
                                <form method="POST" action="{{ url('/user-registration') }}" enctype="multipart/form-data">
                                    @csrf
                                    <h3>Sign up with benefit.me</h3>
                                    <div class="form-box-sec">
                                        <div class="form-group">
                                            <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control @error('first_name') has-danger @enderror" placeholder="First Name" required>
                                            @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control @error('last_name') has-danger @enderror" placeholder="Last Name" required>
                                            @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') has-danger @enderror" placeholder="Username" required>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="mobile" value="{{ old('mobile') }}" class="form-control @error('mobile') has-danger @enderror" placeholder="Mobile Number" required>
                                            @error('mobile')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') has-danger @enderror" placeholder="Email Address" required>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" value="{{ old('password') }}" class="form-control @error('password') has-danger @enderror password-show" placeholder="Create Password" required>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <a class="referralhref" href="javascript:void(0);" data-toggle="modal" data-target="#referralModal">Have Referral Code ?</a>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">SIgn up</button>
                                            </div>
                                        </div>
                                        <div class="login-facebook">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <a href="" type="submit" class="btn btn-primary">
                                                            <img src="{{ asset('public/frontendAssets/images/l_facebook.png')}}" alt="facebook" width="22px">
                                                            Login with facebook
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <a href="" type="submit" class="btn btn-primary text-color ">
                                                            <img src="{{ asset('public/frontendAssets/images/l_google.png')}}" alt="" width="22px">
                                                            Login with Google
                                                        </a>
                                                    </div>
                                                </div>
                                                <p>Don't have an account ?
                                                    <a href="javascript:void(0);" data-toggle="modal" id="login_mod" data-target="#loginModal">
                                                        <span>
                                                            Login
                                                        </span>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Referral Code  Modal  -->

<!--Referral Code  Modal  -->
<div class="modal fade in" id="verificationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: block;">
    <div class="modal-dialog" role="document">
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

        <?php // dd($userData) 
        ?>

        <div class="modal-content">
            <div class="modal-body">
                <div class="login">
                    <div class="login-form">
                        <div class="login-form-sec">
                            <div class="login-with">
                                <figure>
                                    <img src="{{ asset('public/frontendAssets/images/logo_onboarding.png')}}" alt="logo_onboarding" width="80px">
                                </figure>
                                <form method="POST" action="{{ url('/user-verify-otp') }}" enctype="multipart/form-data">
                                    @csrf
                                    <h3>Verification</h3>
                                    <p>We've sent an OTP to verify on <b>{{ $userData->mobile }}</b> OTP {{ $userData->otp}}</p>
                                    <input type="hidden" name="user_id" value="{{ $userData->id }}">
                                    <div class="form-box-sec otp-below">
                                        <ul>
                                            <label>Enter OTP Below</label>
                                            <li>
                                                <input type="text" name="otp[]" placeholder="0" maxlength="1" required>
                                            </li>
                                            <li>
                                                <input type="text" name="otp[]" placeholder="0" maxlength="1" required>
                                            </li>
                                            <li>
                                                <input type="text" name="otp[]" placeholder="0" maxlength="1" required>
                                            </li>
                                            <li>
                                                <input type="text" name="otp[]" placeholder="0" maxlength="1" required>
                                            </li>
                                            <label>Didn't Receive ? <span>Resend</span></label>
                                        </ul>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Verify</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('pagejs')
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $("#singup_mod").click(function() {
            $('#loginModal').modal('hide');
        });



        $("#login_mod").click(function() {
            $('#singupModal').modal('hide');

        });
    });
</script>
@stop