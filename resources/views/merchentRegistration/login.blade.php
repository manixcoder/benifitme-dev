<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('public/merchemtAssets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/merchemtAssets/Fonts/font.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('public/merchemtAssets/css/style.css')}}">


    <title>login</title>
</head>

<body>
    <div class="login">
        <div class="login-form">
            <div class="login-form-sec">
                <div class="contrary-popular">
                    <figure>
                        <img src="{{ asset('public/merchemtAssets/images/OBJECTS.svg')}}" alt="OBJECTS">
                    </figure>
                    <h3>Contrary to popular belief </h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
                <div class="login-with">
                    <figure>
                        <img src="{{ asset('public/merchemtAssets/images/logo_onboarding.png')}}" alt="logo_onboarding" width="80px">
                    </figure>
                    <h3>Login with Benefit.me</h3>
                    <form method="POST" action="{{ url('/merchent-login') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-box-sec">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Mobile or Email Address">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control password-showee" placeholder="Password">
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
                                                <img src="{{ asset('public/merchemtAssets/images/l_facebook.png')}}" alt="facebook" width="22px">
                                                Login with facebook
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <a href="" class="btn btn-primary text-color ">
                                                <img src="{{ asset('public/merchemtAssets/images/l_google.png')}}" alt="" width="22px">
                                                Login with Google
                                            </a>
                                        </div>
                                    </div>
                                    <p>Don't have an account ? <a href="{{ url('/merchent-sign-up') }}"><span>Sign up</span></a> </p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('public/merchemtAssets/js/libaury.js')}}"></script>
    <script src="{{ asset('public/merchemtAssets/js/bootstrap.min.js')}}"></script>
</body>

</html>