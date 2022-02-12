@guest
<header class="customer-header fw">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-3">
                <a href="{{URL::to('/')}}" class="site-logo">
                    <img src="{{ asset('public/frontendAssets/images/header_logo.png')}}" alt="logo" />
                </a>
            </div>
            <div class="col-md-10 col-sm-9 text-right">
                <ul class="header-menu">
                    <li class="active">
                        <a href="{{URL::to('/')}}">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Browse Offers
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Hot Discounts
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="btn-login" data-toggle="modal" data-target="#loginModal">
                            Login/Sign up
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
@endguest
@auth
<?php
if (Auth::check()) {
    $role = Auth::user()->roles->first();
    // dd($role);
    // if (!empty($role)) {
    //     return redirect('/' . $role->name);
    // }
}
?>
<header class="customer-header  fw">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-3">
                <a href="{{ URL::to('/') }}/{{ $role->name }}" class="site-logo">
                    <img src="{{ asset('public/frontendAssets/images/header_logo.png')}}" alt="logo" />
                </a>
            </div>
            <div class="col-md-10 col-sm-9 text-right">
                <ul class="account-custmoer">
                    <li>
                        <a href="{{URL::to('/users/favourite')}}" class="logo-icon">
                            <img src="{{ asset('public/frontendAssets/images/he_favourite.png')}}" alt="icon">
                        </a>
                    </li>
                    <li>
                        <a href="#" class="notification-icon">
                            <img src="{{ asset('public/frontendAssets/images/he_notification.png')}}" alt="icon">
                        </a>
                    </li>
                    <li class="dropdown userheader-icon">
                        <a class="profile-img" id="dLabel" data-target="#dLabel" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ asset('public/frontendAssets/images/profile_placeholder.png')}}" alt="icon">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                            <li>
                                <a href="{{ URL::to('/') }}/{{ $role->name }}">
                                    <i>
                                        <img src="{{ asset('public/frontendAssets/images/m_my_account.png')}}" alt="icon">
                                    </i>
                                    My Account
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i>
                                        <img src="{{ asset('public/frontendAssets/images/m_transactions.png')}}" alt="icon">
                                    </i>
                                    Transactions
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i>
                                        <img src="{{ asset('public/frontendAssets/images/m_scan_qr_code.png')}}" alt="icon">
                                    </i>
                                    Scan QR Code
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i>
                                        <img src="{{ asset('public/frontendAssets/images/m_messages.png')}}" alt="icon">
                                    </i>
                                    Messages
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i>
                                        <img src="{{ asset('public/frontendAssets/images/m_logout.png')}}" alt="icon">
                                    </i>
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="header-menu">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Browse Offers</a></li>
                    <li><a href="#">Hot Discounts</a></li>
                    <li><a href="#">calendar</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="notifactionBox-pg">
        <div class="notifaction-sec">
            <h4>
                Notifications
                <span>
                    <img src="{{ asset('public/frontendAssets/images/close_popup.png')}}" alt="icon" />
                </span>
            </h4>
            <div class="notifactionBox-sec">
                <div class="notifactionBox fw">
                    <figure>
                        <img src="{{ asset('public/frontendAssets/images/hotelbg-img.jpg')}}" alt="img" />
                    </figure>
                    <div class="notifactionCont">
                        <h5>Booking Confirmed</h5>
                        <p>Your booking has been confirmed for Superior Double or Twin Room in Huyatt Dynamite,</p>
                    </div>
                </div>
                <div class="notifactionBox fw">
                    <figure>
                        <img src="{{ asset('public/frontendAssets/images/hotelbg-img.jpg')}}" alt="img" />
                    </figure>
                    <div class="notifactionCont">
                        <h5>20 Points Received</h5>
                        <p>You received 20 point for visiting the Migeez Store.</p>
                    </div>
                </div>
                <div class="notifactionBox fw">
                    <figure>
                        <img src="{{ asset('public/frontendAssets/images/hotelbg-img.jpg')}}" alt="img" />
                    </figure>
                    <div class="notifactionCont">
                        <h5>Booking Confirmed</h5>
                        <p>Your booking has been confirmed for Superior Double or Twin Room in Huyatt Dynamite,</p>
                    </div>
                </div>
                <div class="notifactionBox fw">
                    <figure>
                        <img src="{{ asset('public/frontendAssets/images/hotelbg-img.jpg')}}" alt="img" />
                    </figure>
                    <div class="notifactionCont">
                        <h5>20 Points Received</h5>
                        <p>Your booking has been confirmed for Superior Double or Twin Room in Huyatt Dynamite,</p>
                    </div>
                </div>
                <div class="notifactionBox fw">
                    <figure>
                        <img src="{{ asset('public/frontendAssets/images/hotelbg-img.jpg')}}" alt="img" />
                    </figure>
                    <div class="notifactionCont">
                        <h5>Booking Confirmed</h5>
                        <p>Your booking has been confirmed for Superior Double or Twin Room in Huyatt Dynamite,</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>




@endauth