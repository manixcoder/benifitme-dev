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
    <title>Create New Password</title>
</head>

<body>
    <div class="login-to-access">

        <form method="POST" action="{{ url('/update-password') }}">
            @csrf
            <div class="login-form">
                <figure>
                    <a href="{{ URL::to('/') }}">
                        <img src="{{ asset('public/adminAssets/images/Group.svg')}}" alt="Group" width="100px">
                    </a>
                </figure>
                <div class="form-group">
                    <h3>Create New Password</h3>
                </div>
                <?php
                $user_id = Session::get('user_id');
                $userData = DB::table('users')->where('id', $user_id)->first();

                // dd($user_id); 
                ?>
                <input type="hidden" name="user_id" value="{{ $user_id }}">
                <div class="form-group">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="New Password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $password }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="Password" class="form-control @error('password_confirmation') is-invalid @enderror password-show" name="password_confirmation" placeholder="Confirm Password">
                    @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $password_confirmation }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary bg-color">Done</button>
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