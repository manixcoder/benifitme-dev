@extends('frontend.master')
@section('content')

<div class="about-us">
    <label>
        <figure>
            <img src="{{ asset('public/frontendAssets/images/graphic_about_us.png')}}" alt="graphic_about_us" width="120px">
        </figure>
        About Us
    </label>
</div>
<div class="our-story">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,</p>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="line">
                    <div class="border-sec"></div>
                    <h3>Our Story</h3>
                    <div class="border"> </div>
                </div>
            </div>
            <div class="imges-sec">
                <div class="col-md-5 col-sm-5">
                    <img src="{{ asset('public/frontendAssets/images/graphic_one(1).png')}}" alt="graphic_one" width="100%">
                </div>
                <div class="col-md-7 col-sm-7">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                </div>
            </div>
            <div class="imges-sec">
                <div class="col-md-7 col-sm-7">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>

                </div>
                <div class="col-md-5 col-sm-5">
                    <img src="{{ asset('public/frontendAssets/images/graphic_two(2).png')}}" alt="graphic_one" width="100%">
                </div>
            </div>
            <div class="imges-sec">
                <div class="col-md-5 col-sm-5">
                    <img src="{{ asset('public/frontendAssets/images/graphic_one(1).png')}}" alt="graphic_one" width="100%">
                </div>
                <div class="col-md-7 col-sm-7">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                </div>
            </div>
            <div class="imges-sec">
                <div class="col-md-7 col-sm-7">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>

                </div>
                <div class="col-md-5 col-sm-5">
                    <img src="{{ asset('public/frontendAssets/images/graphic_two(2).png')}}" alt="graphic_one" width="100%">
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