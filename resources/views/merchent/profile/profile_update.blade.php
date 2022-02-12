@extends('merchent.master')
@section('pageTitle', 'Merchent')
@section('content')
@section('pageCss')
<style>
</style>
@stop
<div class="appoint-ment">
    <div class="appoint-sec">
        <div class="col-md-6 text-left">
            <p>My Profile</p>
        </div>
    </div>
    <div class="new-requests">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#home" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true">
                    Company Info
                </a>
            </li>
            <li role="presentation" class="">
                <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false">
                    User Info
                </a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">

                <div class="companyinfo-banner">
                    <img src="http://localhost/benifitme/public/adminAssets/images/sfouw-clock-bar.webp" alt="img">
                </div>
                <div class="parallax-resturent-sec">
                    <div class="imgleft">
                        <img src="http://localhost/benifitme/public/adminAssets/images/background2.png" alt="img">
                    </div>
                    <div class="right-pracont">
                        <h3>ARK NEW TECH
                            <ul class="social-cont pull-right">
                                <li><a href="#"><img src="http://localhost/benifitme/public/adminAssets/images/s_instagram.png" alt="icon"></a></li>
                                <li><a href="#"><img src="http://localhost/benifitme/public/adminAssets/images/s_facebook.png" alt="icon"></a></li>
                                <li><a href="#"><img src="http://localhost/benifitme/public/adminAssets/images/s_twitter.png" alt="icon"></a></li>
                            </ul>
                        </h3>
                        <div class="freeversion-sec">
                            <h4>Restaurant <span>Mexican</span></h4>
                            <h4 class="red">Free Version</h4>
                            <div class="pull-right msg-sec">
                                <a href="#"><img src="http://localhost/benifitme/public/adminAssets/images/message.png" alt="icon"></a>
                                <a href="#"><img src="http://localhost/benifitme/public/adminAssets/images/call.png" alt="icon"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="praadress-cont fw">
                    <h4><i><img src="http://localhost/benifitme/public/adminAssets/images/full_address.png" alt="icon"></i>3245 Twin House Lane, Springfield, 94885</h4>
                    <h4 class="mrtop20"><span>VAT/UID Number :</span> 4894 484734 384904</h4>
                    <h4 class="mrtop20"><span>Opening hours :</span> Open - 8:00 am <span class="dots">.</span> Close - 11:30 pm
                    </h4>
                    <h4 class="mrtop20"><span>Website link :</span><a href="#">www.company.com</a></h4>
                </div>
                <div class="company-aboutpra-cont">
                    <h3>About</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                        rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                        explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
                        dolorem ipsum quia dolor sit amet, consectetur.</p>
                </div>
                <div class="praadress-cont fw">
                    <h3>User Info</h3>
                    <h4 class="mrtop20"><span>Role :</span> Manager</h4>
                    <h4 class="mrtop20"><span>First Name :</span> John</h4>
                    <h4 class="mrtop20"><span>Last Name :</span>Doe</h4>
                    <h4 class="mrtop20"><span>Email Address :</span>doejohn484@gamil.com</h4>
                    <h4 class="mrtop20"><span>Mobile Number :</span>9600000025</h4>
                    <h4 class="mrtop20"><span>Date of Birth :</span>12 Jun 1995</h4>
                    <h4 class="mrtop20"><span>Gender :</span>Male</h4>
                    <p class="pra">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                        vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                </div>

                <!-- <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra">
                                <p>#NUD5449595</p>
                                <h3>John Doe</h3>
                                <p>doejohn33@gmail.com</p>
                                <p>9600000052</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>Appontment for : <span>10 Jun 21 | 10:30 am</span></p>
                            </div>
                            <span><button>Decline</button></span>
                            <span><button class="accept-bg">Accept</button></span>
                        </div>
                    </div>
                </div> -->







            </div>

            <div role="tabpanel" class="tab-pane" id="profile">
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra">
                                <p>#NUD5449595</p>
                                <h3>John Doe</h3>
                                <p>doejohn33@gmail.com</p>
                                <p>9600000052</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="appointment-for">
                                <p>Appontment for : <span>10 Jun 21 | 10:30 am</span></p>
                            </div>
                            <ul>
                                <li><a href="#"> <img src="{{ asset('public/merchemtAssets/images/c_location.png')}}" alt="icon" width="35px"></a></li>
                                <li><a href="#"> <img src="{{ asset('public/merchemtAssets/images/c_message.png')}}" alt="icon" width="35px"></a></li>
                                <li><a href="#"> <img src="{{ asset('public/merchemtAssets/images/c_call.png')}}" alt="icon" width="35px"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>






            </div>
        </div>

    </div>
</div>
@endsection
@section('pagejs')
<script>
</script>
@stop