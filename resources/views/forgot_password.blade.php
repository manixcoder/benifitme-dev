<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('public/adminAssets/images/header_logo.png')}}" sizes="16x16">
    <link rel="stylesheet" href="{{ asset('public/adminAssets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/adminAssets/Fonts/font.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('public/adminAssets/css/style.css')}}">
    <title>Forgot Password</title>
</head>

<body>
    <div class="login-to-access">
        <form method="POST" action="{{ url('/send-otp') }}">
            @csrf
            <div class="login-form">
                <figure>
                    <a href="{{ URL::to('/') }}">
                        <img src="{{ asset('public/adminAssets/images/Group.svg')}}" alt="Group" width="100px">
                    </a>
                </figure>
                <div class="form-group">
                    <h3>Forgot Password</h3>
                    <p>Enter your registered mobile number, you'll get an OTP to verification</p>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Registered email address" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary bg-color">Send Me OTP</button>
                </div>
            </div>
        </form>
    </div>
    <script src="{{ asset('public/adminAssets/js/libaury.js')}}"></script>
    <script src="{{ asset('public/adminAssets/js/bootstrap.min.js')}}"></script>
</body>

</html>