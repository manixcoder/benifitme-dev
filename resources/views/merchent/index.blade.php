@extends('merchent.master')
@section('pageTitle', 'Merchent')
@section('content')
@section('pageCss')
<style>
</style>
@stop

<div class="add-newoffer">
    <div class="dashboard-heading">
        <h3>Dashboard</h3>
    </div>
    <div class="registered-customer">
        <h3>Registered Customer</h3>
        <div class="customer-box-sec">
            <div class="row">
                <div class="col-md-4">
                    <div class="customerbox">
                        <h4>Total <b>1125</b></h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="customerbox lightblue">
                        <h4>Weekly <b>852</b></h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="customerbox lightorg">
                        <h4>Monthly <b>78</b></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard-chartbox">
        <div class="row">
            <div class="col-md-6">
                <div class="chartbox-sec">
                    <h4>
                        Actions
                        <select class="selectbox">
                            <option selected="">Oct</option>
                            <option>Nov</option>
                            <option>Dec</option>
                            <option>Jan</option>
                        </select>
                    </h4>
                    <div class="pieID pie">

                        <div class="slice s0-0" style="transform: rotate(-1deg) translate3d(0px, 0px, 0px);"><span style="transform: rotate(-107.319deg) translate3d(0px, 0px, 0px); background-color: cornflowerblue;"></span></div>
                        <div class="slice s1-0" style="transform: rotate(70.6805deg) translate3d(0px, 0px, 0px);"><span style="transform: rotate(-125.988deg) translate3d(0px, 0px, 0px); background-color: olivedrab;"></span></div>
                        <div class="slice s2-0" style="transform: rotate(123.692deg) translate3d(0px, 0px, 0px);"><span style="transform: rotate(-92.3444deg) translate3d(0px, 0px, 0px); background-color: orange;"></span></div>
                        <div class="slice s3-0" style="transform: rotate(210.348deg) translate3d(0px, 0px, 0px);"><span style="transform: rotate(-144.657deg) translate3d(0px, 0px, 0px); background-color: tomato;"></span></div>
                        <div class="slice s4-0" style="transform: rotate(244.691deg) translate3d(0px, 0px, 0px);"><span style="transform: rotate(-64.6905deg) translate3d(0px, 0px, 0px); background-color: crimson;"></span></div>
                    </div>
                    <ul class="pieID legend">
                        <li style="border-color: cornflowerblue;">
                            <em>Oct</em>
                            <span>718</span>
                        </li>
                        <li style="border-color: olivedrab;">
                            <em>Nov</em>
                            <span>531</span>
                        </li>
                        <li style="border-color: orange;">
                            <em>Dec</em>
                            <span>868</span>
                        </li>
                        <li style="border-color: tomato;">
                            <em>Jan</em>
                            <span>344</span>
                        </li>
                        <li style="border-color: crimson;">
                            <em>Fub</em>
                            <span>1145</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="chartbox-sec">
                    <h4>
                        % of total sales
                        <select class="selectbox">
                            <option selected="">Oct</option>
                            <option>Nov</option>
                            <option>Dec</option>
                            <option>Jan</option>
                        </select>
                    </h4>
                    <canvas id="c" width="490" height="267"></canvas>
                    <div class="label">text</div>
                </div>
            </div>
        </div>
    </div>
    <div class="current-offer">
        <h3>Your Current Offer</h3>
        <div class="current-offerBox">
            <div class="row">
                <div class="col-md-6">
                    <div class="imgbox">
                        <img src="{{ asset('public/merchemtAssets/images/vivo.jpg')}}" alt="icon">
                    </div>
                    <div class="current-offercont">
                        <h5>#59595</h5>
                        <h4>HUAWEI P50 Pro <span>Cellphone</span></h4>
                        <p>$ 1200 <span class="discount-cont">70% Discount</span> <span class="redclr">Offer Valid till : 10 Oct 21</span></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="socialIcon">
                        <li><a href="#"><i><img src="{{ asset('public/merchemtAssets/images/likes.png')}}" alt="icon"></i>30 Likes</a></li>
                        <li><a href="#"><i><img src="{{ asset('public/merchemtAssets/images/availed.png')}}" alt="icon"></i>12 Availed</a></li>
                        <li><a href="#" class="shareicon"><i><img src="{{ asset('public/merchemtAssets/images/share.png')}}" alt="icon"></i></a></li>
                        <li><a href="#" class="deleteicon"><i><img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-12 prabox">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
        </div>
        <div class="current-offerBox">
            <div class="row">
                <div class="col-md-6">
                    <div class="imgbox">
                        <img src="{{ asset('public/merchemtAssets/images/ideapad.jpeg')}}" alt="icon">
                    </div>
                    <div class="current-offercont">
                        <h5>#59595</h5>
                        <h4>HUAWEI P50 Pro <span>Cellphone</span></h4>
                        <p>$ 1200 <span class="discount-cont">70% Discount</span> <span class="redclr">Offer Valid till : 10 Oct 21</span></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="socialIcon">
                        <li><a href="#"><i><img src="{{ asset('public/merchemtAssets/images/likes.png')}}" alt="icon"></i>30 Likes</a></li>
                        <li><a href="#"><i><img src="{{ asset('public/merchemtAssets/images/availed.png')}}" alt="icon"></i>12 Availed</a></li>
                        <li><a href="#" class="shareicon"><i><img src="{{ asset('public/merchemtAssets/images/share.png')}}" alt="icon"></i></a></li>
                        <li><a href="#" class="deleteicon"><i><img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-12 prabox">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
        </div>
        <div class="current-offerBox">
            <div class="row">
                <div class="col-md-6">
                    <div class="imgbox">
                        <img src="{{ asset('public/merchemtAssets/images/vivo-1.jpg')}}" alt="icon">
                    </div>
                    <div class="current-offercont">
                        <h5>#59595</h5>
                        <h4>HUAWEI P50 Pro <span>Cellphone</span></h4>
                        <p>$ 1200 <span class="discount-cont">70% Discount</span> <span class="redclr">Offer Valid till : 10 Oct 21</span></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="socialIcon">
                        <li><a href="#"><i><img src="{{ asset('public/merchemtAssets/images/likes.png')}}" alt="icon"></i>30 Likes</a></li>
                        <li><a href="#"><i><img src="{{ asset('public/merchemtAssets/images/availed.png')}}" alt="icon"></i>12 Availed</a></li>
                        <li><a href="#" class="shareicon"><i><img src="{{ asset('public/merchemtAssets/images/share.png')}}" alt="icon"></i></a></li>
                        <li><a href="#" class="deleteicon"><i><img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-12 prabox">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
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