@extends('frontend.master')
@section('pageTitle', 'Users')
@section('content')
@section('pageCss')
<style>

</style>
@stop
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
            <h3>Hotels & Restaurants1</h3>
            
        </div>
        <div class="restaurants-slider">
            <div class="loop owl-carousel owl-theme">
                <div class="item">
                    <div class="hotel-bgbox">
                        <div class="hotel-img">
                            <figure>
                                <img src="{{ asset('public/frontendAssets/images/hotel-img1.jpg')}}" alt="img" />
                            </figure>
                            <span>Hotel</span>
                        </div>
                        <div class="hotel-cont">
                            <h3>Emerald Bay Inn</h3>
                            <h4><i><img src="{{ asset('public/frontendAssets/images/full_address.png')}}" alt="icon" /></i>New York</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="hotel-bgbox">
                        <div class="hotel-img">
                            <figure>
                                <img src="{{ asset('public/frontendAssets/images/hotelnew-img1.jpg')}}" alt="img" />
                            </figure>
                            <span>Hotel</span>
                        </div>
                        <div class="hotel-cont">
                            <h3>Emerald Bay Inn</h3>
                            <h4><i><img src="{{ asset('public/frontendAssets/images/full_address.png')}}" alt="icon" /></i>New York</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="hotel-bgbox">
                        <div class="hotel-img">
                            <figure>
                                <img src="{{ asset('public/frontendAssets/images/hotelnew-img2.jpg')}}" alt="img" />
                            </figure>
                            <span>Hotel</span>
                        </div>
                        <div class="hotel-cont">
                            <h3>Emerald Bay Inn</h3>
                            <h4><i><img src="{{ asset('public/frontendAssets/images/full_address.png')}}" alt="icon" /></i>New York</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="hotel-bgbox">
                        <div class="hotel-img">
                            <figure>
                                <img src="{{ asset('public/frontendAssets/images/hotelnew-img3.jpg')}}" alt="img" />
                            </figure>
                            <span>Hotel</span>
                        </div>
                        <div class="hotel-cont">
                            <h3>Emerald Bay Inn</h3>
                            <h4><i><img src="{{ asset('public/frontendAssets/images/full_address.png')}}" alt="icon" /></i>New York</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="hotel-bgbox">
                        <div class="hotel-img">
                            <figure>
                                <img src="{{ asset('public/frontendAssets/images/tabel-hotel.jpg')}}" alt="img" />
                            </figure>
                            <span>Hotel</span>
                        </div>
                        <div class="hotel-cont">
                            <h3>Emerald Bay Inn</h3>
                            <h4><i><img src="{{ asset('public/frontendAssets/images/full_address.png')}}" alt="icon" /></i>New York</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="hotel-bgbox">
                        <div class="hotel-img">
                            <figure>
                                <img src="{{ asset('public/frontendAssets/images/hotelnew-img1.jpg')}}" alt="img" />
                            </figure>
                            <span>Hotel</span>
                        </div>
                        <div class="hotel-cont">
                            <h3>Emerald Bay Inn</h3>
                            <h4><i><img src="{{ asset('public/frontendAssets/images/full_address.png')}}" alt="icon" /></i>New York</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="hotel-bgbox">
                        <div class="hotel-img">
                            <figure>
                                <img src="{{ asset('public/frontendAssets/images/hotelnew-img2.jpg')}}" alt="img" />
                            </figure>
                            <span>Hotel</span>
                        </div>
                        <div class="hotel-cont">
                            <h3>Emerald Bay Inn</h3>
                            <h4><i><img src="{{ asset('public/frontendAssets/images/full_address.png')}}" alt="icon" /></i>New York</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="hotel-bgbox">
                        <div class="hotel-img">
                            <figure>
                                <img src="{{ asset('public/frontendAssets/images/hotelnew-img3.jpg')}}" alt="img" />
                            </figure>
                            <span>Hotel</span>
                        </div>
                        <div class="hotel-cont">
                            <h3>Emerald Bay Inn</h3>
                            <h4><i><img src="{{ asset('public/frontendAssets/images/full_address.png')}}" alt="icon" /></i>New York</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="hotel-bgbox">
                        <div class="hotel-img">
                            <figure>
                                <img src="{{ asset('public/frontendAssets/images/tabel-hotel.jpg')}}" alt="img" />
                            </figure>
                            <span>Hotel</span>
                        </div>
                        <div class="hotel-cont">
                            <h3>Emerald Bay Inn</h3>
                            <h4><i><img src="{{ asset('public/frontendAssets/images/full_address.png')}}" alt="icon" /></i>New York</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('pagejs')
<script>

</script>
@stop