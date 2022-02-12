<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('public/frontendAssets/css/aos.css')}}" rel="stylesheet">
    <link href="{{ asset('public/frontendAssets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('public/frontendAssets/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('public/frontendAssets/css/animate.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('public/frontendAssets/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('public/frontendAssets/fonts/fonts.css')}}" rel="stylesheet">
    <!-- <link href="{{ asset('public/frontendAssets/css/responsive.css')}}" rel="stylesheet"> -->
    <link rel="icon" href="{{ asset('public/frontendAssets/images/favicon.png')}}" type="skype-img" />
    <title>{{ config('app.name', 'Laravel') }} Customer @yield('pageTitle')</title>
</head>

<body>
    
    @include('frontend.includes.header')
    @yield('content')
    <footer class="site-footer fw">
        <div class="container">
            <div class="footertop-sec">
                <div class="row">
                    <div class="col-md-4">
                        <a href="{{ url('/') }}" class="logo-footer">
                            <img src="{{ asset('public/frontendAssets/images/footer_logo.png')}}" alt="icon" />
                        </a>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                        <h4>Download the app</h4>
                        <div class="appimg-footer">
                            <span>
                                <a href="https://en.softonic.com/downloads/app-store">
                                    <img src="{{ asset('public/frontendAssets/images/download_app_store.png')}}" alt="icon">
                                </a>
                            </span>
                            <span>
                                <a href="https://play.google.com/store">
                                    <img src="{{ asset('public/frontendAssets/images/download_google_play.png')}}" alt="icon">
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-leftpad">
                            <h5>Quick Links</h5>
                            <ul>
                                <li><a href="#">Browse Offers</a></li>
                                <li><a href="#">Hot Discounts</a></li>
                                <li><a href="#">Calendar</a></li>
                                <li><a href="#">Be a Partner</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-leftpad">
                            <div class="pull-right">
                                <h5>Legal</h5>
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footercopy-sec text-center">
                <p>© 2021. All Rights Reserved. Proudly Designed By BenefitMe Design Team.</p>
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="{{ asset('public/frontendAssets/js/jequery-main3.5.js') }}"></script>
    <script src="{{ asset('public/frontendAssets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/frontendAssets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/frontendAssets/js/owl.animate.js') }}"></script>
    <script src="{{ asset('public/frontendAssets/js/aos.js') }}"></script>

    <script>
        $(window).bind("load", function() {
            if (document.readyState === "complete") {
                // aos init
                AOS.init({
                    once: false,
                    duration: 1000,
                });
            }
        })
        jQuery(document).ready(function($) {
            $('.fadeOut').owlCarousel({
                items: 1,
                animateOut: 'fadeOut',
                loop: true,
                margin: 0,
                autoplay: true,

            });
        });
        $('.loop').owlCarousel({
            center: true,
            items: 2,
            loop: true,
            margin: 10,
            responsive: {
                600: {
                    items: 4
                }
            }
        });
    </script>
    <script type='text/javascript'>
        $(document).ready(function() {
            $(".notification-icon").click(function() {
                $(".notifactionBox-pg").addClass("notifactionBox-open");
            });
        });
        $(document).ready(function() {
            $(".notifaction-sec h4 span").click(function() {
                $(".notifactionBox-pg").removeClass("notifactionBox-open");
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.header-menu li a').click(function() {
                $('.header-menu li a').removeClass('active');
                $(this).addClass('active');
            })
        });
    </script>
</body>

</html>