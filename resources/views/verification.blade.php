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
    <title>Verification</title>
</head>

<body>
    <div class="login-to-access">

        <form method="POST" action="{{ url('/verify-otp') }}">
            @csrf
            <div class="login-form">
                <figure>
                    <a href="{{ URL::to('/') }}">
                        <img src="{{ asset('public/adminAssets/images/Group.svg')}}" alt="Group" width="100px">
                    </a>
                </figure>
                <div class="form-group">
                    <h3>Verification</h3>
                    <?php
                    $user_id = Session::get('user_id');
                    $user_email = Session::get('user_email');
                    $otp = Session::get('otp');
                    // dd($user_email);
                    // $userData = DB::table('users')->where('id', $user_id)->first();
                    //dd($userData); 
                    ?>
                    <p>OTP has been sent to <b><?php echo $user_email  ?></b> </p>
                    <p>OTP has been sent to <b></b><?php echo $otp ?> </p>
                </div>
                <ul>
                    <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
                    <li><input type="text" name="vcode[]" placeholder="0" maxlength="1" required></li>
                    <li><input type="text" name="vcode[]" placeholder="0" maxlength="1" required></li>
                    <li><input type="text" name="vcode[]" placeholder="0" maxlength="1" required></li>
                    <li><input type="text" name="vcode[]" placeholder="0" maxlength="1" required></li>
                </ul>
                <div class="form-group">
                    <a href="#">Resend me OTP</a>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary bg-color">Verify</button>
                </div>
                @if(Session::has('status'))
                <div class="alert alert-{{ Session::get('status') }}">
                    <i class="fa fa-building-o" aria-hidden="true"></i> {{ Session::get('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
                @endif
            </div>
        </form>
    </div>
    <script src="{{ asset('public/adminAssets/js/libaury.js')}}"></script>
    <script src="{{ asset('public/adminAssets/js/bootstrap.min.js')}}"></script>
</body>

</html>