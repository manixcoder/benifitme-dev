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
    <title>Subscription</title>
</head>

<body>
    <div class="Subscription">
        <div class="container">
            @php
            $freePlan = DB::table('subscription_plans')->where('plan_price', '=', '0')->first();
            @endphp
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h3>Subscription Plan</h3>
                    <p>By choosing the free plan, you don't <br> get to enjoy the following features -</p>
                    <ul>
                        <li>
                            <img src="{{ asset('public/merchemtAssets/images/Path 851.png')}}" alt="Path" width="20px">
                            Products Promotions
                        </li>
                        <li>
                            <img src="{{ asset('public/merchemtAssets/images/Path 851.png')}}" alt="Path" width="20px">
                            Advertisements
                        </li>
                        <li>
                            <img src="{{ asset('public/merchemtAssets/images/Path 851.png')}}" alt="Path" width="20px">
                            Times Service
                        </li>
                    </ul>
                    <form action="{{ url('/subscription-plan') }}" method="post">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                        <input type="hidden" name="plan_id" value="{{ $freePlan->id }}">
                        <button type="submit" class="btn btn-primary form-control btn-free">
                            Continue with free
                        </button>
                    </form>
                    <!-- <a href="#">
                        Continue with free
                    </a> -->
                </div>
                <div class="col-md-4 col-sm-4">
                    <figure>
                        <img src="{{ asset('public/merchemtAssets/images/graphic_two.png')}}" alt="graphic_two" width="100%">
                    </figure>
                </div>
            </div>
        </div>
    </div>
    @php
    $subscriptionPlan = DB::table('subscription_plans')->where('plan_price', '!=', '0')->get();
    @endphp
    <div class="subscri-features">
        <div class="container">
            <h3>Subscribe for more features</h3>
            <p>Get a Subscription plan to unveil more facilitated features</p>
            <div class="row">
                <div class="standard">
                    @forelse($subscriptionPlan as $subscription)
                    <form action="{{ url('/subscription-plan') }}" method="post">
                        @csrf
                        <div class="col-md-4 col-sm-4">
                            <p>{{ $subscription->plan_name }}
                                <span class="pull-right month"> $ {{ $subscription->plan_price }}/month</span>
                            </p>
                            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                            <input type="hidden" name="plan_id" value="{{ $subscription->id }}">
                            <div class="products-promotions">
                                <ul>
                                    <li>
                                        <img src="{{ asset('public/merchemtAssets/images/mark_green.png')}}" alt="mark_green">
                                        Products Promotions
                                    </li>
                                    <li>
                                        <img src="{{ asset('public/merchemtAssets/images/mark_red.png')}}" alt="mark_red">
                                        Advertisements
                                    </li>
                                    <li>
                                        <img src="{{ asset('public/merchemtAssets/images/mark_red.png')}}" alt="mark_red">
                                        Times Service
                                    </li>
                                </ul>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary form-control  ">
                                        Buy Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    @empty
                    <div class="col-md-4 col-sm-4">No users</div>
                    @endforelse


                    <!--div class="col-md-4 col-sm-4">
                        <p class="bg-stand">Standard
                            <span class="pull-right color-month">$ 35/month</span>
                        </p>
                        <div class="products-promotions">
                            <ul>
                                <li>
                                    <img src="{{ asset('public/merchemtAssets/images/mark_green.png')}}" alt="mark_green">
                                    Products Promotions
                                </li>
                                <li>
                                    <img src="{{ asset('public/merchemtAssets/images/mark_red.png')}}" alt="mark_red">
                                    Advertisements
                                </li>
                                <li>
                                    <img src="{{ asset('public/merchemtAssets/images/mark_red.png')}}" alt="mark_red">
                                    Times Service
                                </li>
                            </ul>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary form-control  ">
                                    Buy Now
                                </button>
                            </div>
                        </div>
                    </!--div>

                    <div class="col-md-4 col-sm-4">
                        <p class="bg-premiun">Premium
                            <span class="pull-right bg-month">$ 45/month</span>
                        </p>
                        <div class="products-promotions">
                            <ul>
                                <li>
                                    <img src="{{ asset('public/merchemtAssets/images/mark_green.png')}}" alt="mark_green">
                                    Products Promotions
                                </li>
                                <li>
                                    <img src="{{ asset('public/merchemtAssets/images/mark_red.png')}}" alt="mark_red">
                                    Advertisements
                                </li>
                                <li>
                                    <img src="{{ asset('public/merchemtAssets/images/mark_red.png')}}" alt="mark_red">
                                    Times Service
                                </li>
                            </ul>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary form-control  ">
                                    Buy Now
                                </button>
                            </div>
                        </div>
                    </div -->


                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('public/merchemtAssets/js/libaury.js')}}"></script>
    <script src="{{ asset('public/merchemtAssets/js/bootstrap.min.js')}}"></script>
</body>

</html> `