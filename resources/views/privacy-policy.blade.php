@extends('frontend.master')
@section('content')

<div class="about-us">
    <label>
        <figure>
            <img src="{{ asset('public/frontendAssets/images/graphic_t_and_c(1).png')}}" alt="graphic_about_us" width="120px">
        </figure>
        Privacy Policy
    </label>
</div>
<div class="our-story terms-condition">
    <div class="container">
        <div class="col-md-12 col-sm-12">
            <h3>The standard Lorem Ipsum passage, used since the 1500s</h3>
        </div>
        <div class="col-md-12 col-sm-12">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        </div>
        <div class="col-md-12 col-sm-12">
            <h3>Section 1.10.32 of "de Finibus Bonorum et Malorum.</h3>
        </div>
        <div class="col-md-12 col-sm-12">
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
        </div>
        <div class="col-md-12 col-sm-12">
            <h3>The standard Lorem Ipsum passage, used since the 1500s</h3>
        </div>
        <div class="col-md-12 col-sm-12">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        </div>
        <div class="col-md-12 col-sm-12">
            <h3>Section 1.10.32 of "de Finibus Bonorum et Malorum.</h3>
        </div>
        <div class="col-md-12 col-sm-12">
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
        </div>
    </div>
</div>



<!--Model --->
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
<div class="modal fade" id="referralModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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

                                <form>
                                    <h3>Referral Code</h3>
                                    <p>Enter Referral Code to get loyalty points <br> in your account</p>
                                    <div class="form-box-sec">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Enter Referral Code" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#verificationModal">Done</a>
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
<div class="modal fade" id="verificationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                                <form>
                                    <h3>Verification</h3>
                                    <p>We've sent an OTP to verify on <b>9000000209</b> </p>
                                    <div class="form-box-sec otp-below">
                                        <ul>
                                            <label>Enter OTP Below</label>
                                            <li>
                                                <input type="name" placeholder="0" maxlength="1" required>
                                            </li>
                                            <li>
                                                <input type="name" placeholder="0" maxlength="1" required>
                                            </li>
                                            <li>
                                                <input type="name" placeholder="0" maxlength="1" required>
                                            </li>
                                            <li>
                                                <input type="name" placeholder="0" maxlength="1" required>
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

</script>
@stop