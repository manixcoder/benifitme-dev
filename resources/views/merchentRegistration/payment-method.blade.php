<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('public/adminAssets/images/header_logo.png')}}" sizes="16x16">
    <link rel="stylesheet" href="{{ asset('public/merchemtAssets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/merchemtAssets/Fonts/font.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('public/merchemtAssets/css/style.css')}}">


    <title>Payment Method</title>
</head>

<body>
    <div class="login">
        <div class="login-form">
            <div class="login-form-sec">
                <div class="contrary-popular basic-sec">
                    <div class="standard  text-left">
                        <figure>
                            <img src="{{ asset('public/merchemtAssets/images/logo_onboarding.png')}}" alt="logo_onboarding" width="80px">
                        </figure>
                        <h3>Your Chosen Plan</h3>
                        <p class="text-left">Basic
                            <span class="pull-right month">$ 30/month</span>
                        </p>
                        <div class="products-promotions">
                            <ul>
                                <li> <img src="{{ asset('public/merchemtAssets/images/mark_green.png')}}" alt="mark_green"> Products Promotions</li>
                                <li> <img src="{{ asset('public/merchemtAssets/images/mark_red.png')}}" alt="mark_red"> Advertisements</li>
                                <li> <img src="{{ asset('public/merchemtAssets/images/mark_red.png')}}" alt="mark_red">Times Service</li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="login-with ">
                    <form>
                        <div class="form-box-sec payment">
                            <h3>Payment Method</h3>
                            <p>Pay by debit/credit card</p>
                            <div class="form-group">
                                <input type="name" class="form-control" placeholder="Card Holder Name">
                            </div>
                            <div class="form-group">
                                <input type="Last Name" class="form-control" placeholder="Card Number">
                            </div>
                            <div class="form-group">
                                <input type="name" class="form-control bg-calender" placeholder="Exp. Date">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Security Number">
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Pay</button>
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