@extends('admin.master')
@section('pageTitle', 'Comapany Details')
@section('content')
@section('pageCss')
<style>

</style>
@stop
<div class="add-newuser company-sec">
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <p>
                <span class="user-color">Companies</span>
                <span> &gt; #{{ $merchants->uid_number }}</span>
            </p>
        </div>
    </div>
</div>
<div class="sub-category">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">
            <a href="#home" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true">
                Company Info
            </a>
        </li>
        <li role="presentation" class="">
            <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false">
                Menu's
            </a>
        </li>
        <li role="presentation">
            <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
                Tables
            </a>
        </li>
        <li role="presentation">
            <a href="#Promotions" aria-controls="Promotions" role="tab" data-toggle="tab">
                Promotions
            </a>
        </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
            <div class="companyinfo-banner">
                <img src="{{ asset('public/adminAssets/images/sfouw-clock-bar.webp')}}" alt="img">
            </div>
            <?php // dd($merchants); 
            ?>
            <div class="parallax-resturent-sec">
                <div class="imgleft">
                    <img src="{{ asset('public/adminAssets/images/background2.png')}}" alt="img">
                </div>
                <div class="right-pracont">
                    <h3>{{ $merchants->company_name }}
                        <ul class="social-cont pull-right">
                            <li><a href="#"><img src="{{ asset('public/adminAssets/images/s_instagram.png')}}" alt="icon"></a></li>
                            <li><a href="#"><img src="{{ asset('public/adminAssets/images/s_facebook.png')}}" alt="icon"></a></li>
                            <li><a href="#"><img src="{{ asset('public/adminAssets/images/s_twitter.png')}}" alt="icon"></a></li>
                        </ul>
                    </h3>
                    <div class="freeversion-sec">
                        <h4>Restaurant <span>Mexican</span></h4>
                        <h4 class="red">Free Version</h4>
                        <div class="pull-right msg-sec">
                            <a href="#"><img src="{{ asset('public/adminAssets/images/message.png')}}" alt="icon"></a>
                            <a href="#"><img src="{{ asset('public/adminAssets/images/call.png')}}" alt="icon"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="praadress-cont fw">
                <h4><i><img src="{{ asset('public/adminAssets/images/full_address.png')}}" alt="icon"></i>{{ $merchants->address }}, {{ $merchants->city }}, {{ $merchants->zip_code }}</h4>
                <h4 class="mrtop20"><span>VAT/UID Number :</span> {{ $merchants->uid_number }}</h4>
                <h4 class="mrtop20"><span>Opening hours :</span> Open - 8:00 am <span class="dots">.</span> Close - 11:30 pm
                </h4>
                <h4 class="mrtop20"><span>Website link :</span><a href="#">{{ $merchants->website_link }}</a></h4>
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
                <?php
                $role = Auth::user()->roles->first();
                ?>
                <h4 class="mrtop20"><span>Role :</span> Manager</h4>
                <h4 class="mrtop20"><span>First Name :</span> {{ $merchants->first_name }}</h4>
                <h4 class="mrtop20"><span>Last Name :</span> {{ $merchants->last_name }}</h4>
                <h4 class="mrtop20"><span>Email Address :</span> {{ $merchants->email }}</h4>
                <h4 class="mrtop20"><span>Mobile Number :</span>{{ $merchants->mobile }}</h4>
                <h4 class="mrtop20"><span>Date of Birth :</span>{{ $merchants->date_birthday }}</h4>
                <h4 class="mrtop20"><span>Gender :</span>{{ $merchants->gender }} </h4>
                <p class="pra">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                    vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="profile">
            <div class="table-responsive">
                <?php
                $disesData = DB::table('food_dises')->where('merchent_id', $merchants->id)->get();
                //dd($disesData);
                ?>
                <table border="0" class="company-name Companies menu-table">
                    <tbody>
                        @forelse ($disesData as $dises)

                        <tr>
                            <td class=" mexican">
                                <figure>
                                    @if($dises->disk_image !=null)
                                    <img src="{{ URL::asset('/public/uploads/') }}/{{ $dises->disk_image }}" alt="pizza" width="200px" height="120px">
                                    @else
                                    <img src="{{ asset('public/adminAssets/images/pizza.jpg')}}" alt="pizza" width="200px" height="120px">
                                    @endif

                                </figure>
                            </td>
                            <td class="left-right wave-pizza">
                                <label>{{ $dises->dise_name }}</label>
                                <p>{{ $dises->dise_description }}</p>
                                <h3>$ {{ $dises->disk_price }}
                                    <span class="pull-right active-icon">
                                        Active
                                        <img src="{{ asset('public/adminAssets/images/toggle_on.png')}}" alt="toggle_on" width="30px">
                                    </span>
                                </h3>
                                <p class="discount-fish">{{ $dises->disk_discount }}% Discount</p>
                            </td>
                        </tr>
                        @empty
                        <p>No users</p>
                        @endforelse

                        <!--tr>
                            <td class=" mexican">
                                <figure>
                                    <img src="{{ asset('public/adminAssets/images/pizza1.jpg')}}" alt="pizza1" width="200px">
                                </figure>
                            </td>
                            <td class="left-right wave-pizza">
                                <label>Deluxe veggie pizza</label>
                                <p>With cheese &amp; oregano</p>
                                <h3>$ 20
                                    <span class="pull-right active-icon"> Active <img src="{{ asset('public/adminAssets/images/toggle_on.png')}}" alt="toggle_on" width="30px"></span>
                                </h3>
                            </td>
                        </tr>
                        <tr>
                            <td class=" mexican">
                                <figure>
                                    <img src="{{ asset('public/adminAssets/images/pizza2.jpg')}}" alt="pizza2" width="200px">
                                </figure>
                            </td>
                            <td class="left-right wave-pizza">
                                <label>Farm house pizza</label>
                                <p>With cheese &amp; oregano</p>
                                <h3>$ 40
                                    <span class="pull-right active-icon"> Inactive <img src="{{ asset('public/adminAssets/images/toggle_off.png')}}" alt="toggle_of" width="30px"></span>
                                </h3>
                                <p class="discount-fish">30% Discount</p>
                            </td>
                        </tr>
                        <tr>
                            <td class=" mexican">
                                <figure>
                                    <img src="{{ asset('public/adminAssets/images/pizza.jpg')}}" alt="pizza" width="200px">
                                </figure>
                            </td>
                            <td class="left-right wave-pizza">
                                <label>Mexican green wave pizza</label>
                                <p>With cheese &amp; oregano</p>
                                <h3>$ 40
                                    <span class="pull-right active-icon"> Active <img src="images/toggle_on.png" alt="toggle_on" width="30px"></span>
                                </h3>
                                <p class="discount-fish">30% Discount</p>
                            </td>
                        </tr>
                        <tr>
                            <td class=" mexican">
                                <figure>
                                    <img src="{{ asset('public/adminAssets/images/pizza1.jpg')}}" alt="pizza1" width="200px">
                                </figure>
                            </td>
                            <td class="left-right wave-pizza">
                                <label>Deluxe veggie pizza</label>
                                <p>With cheese &amp; oregano</p>
                                <h3>$ 20
                                    <span class="pull-right active-icon"> Active <img src="images/toggle_on.png" alt="toggle_on" width="30px"></span>
                                </h3>
                            </td>
                        </tr>
                        <tr>
                            <td class=" mexican">
                                <figure>
                                    <img src="{{ asset('public/adminAssets/images/pizza.jpg')}}" alt="pizza" width="200px">
                                </figure>
                            </td>
                            <td class="left-right wave-pizza">
                                <label>Mexican green wave pizza</label>
                                <p>With cheese &amp; oregano</p>
                                <h3>$ 40
                                    <span class="pull-right active-icon"> Active <img src="images/toggle_on.png" alt="toggle_on" width="30px"></span>
                                </h3>
                                <p class="discount-fish">30% Discount</p>
                            </td>
                        </tr>
                        <tr>
                            <td class=" mexican">
                                <figure>
                                    <img src="{{ asset('public/adminAssets/images/pizza1.jpg')}}" alt="pizza1" width="200px">
                                </figure>
                            </td>
                            <td class="left-right wave-pizza">
                                <label>Deluxe veggie pizza</label>
                                <p>With cheese &amp; oregano</p>
                                <h3>$ 20
                                    <span class="pull-right active-icon"> Active <img src="images/toggle_on.png" alt="toggle_on" width="30px"></span>
                                </h3>
                            </td>
                        </tr -->
                    </tbody>
                </table>
            </div>
        </div>
        <div role="tabpane1" class="tab-pane" id="messages">
            <div class="table-responsive">
                <table border="0" class="Companies ">
                    <tbody>
                        <tr>
                            <td class="mexican table-for">
                                <figure>
                                    <img src="{{ asset('public/adminAssets/images/table_two.png')}}" alt="table_two" width="100px">
                                </figure>
                            </td>
                            <td class="left-right wave-pizza">
                                <div>
                                    <span class="mr-left">Table for : <b>2</b></span>
                                    <span>Number of Table : <b>3</b></span>
                                    <br>
                                    <label>Table Name 1</label>
                                    <span class="pull-right active-icon"> Active <img src="{{ asset('public/adminAssets/images/toggle_on.png')}}" alt="toggle_on" width="30px"></span>
                                    <div>
                                        <span class="mr-left">Avarage Booking Time : </span>
                                        <small> 2 hour</small>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="mexican table-for">
                                <figure>
                                    <img src="{{ asset('public/adminAssets/images/table_four.png')}}" alt="table_four" width="100px">
                                </figure>
                            </td>
                            <td class="left-right wave-pizza">
                                <div>
                                    <span class="mr-left">Table for : <b>4</b></span>
                                    <span>Number of Table : <b>6</b></span>
                                    <br>
                                    <label>Table Name 1</label>
                                    <span class="pull-right active-icon">
                                        Inactive
                                        <img src="{{ asset('public/adminAssets/images/toggle_off.png')}}" alt="toggle_off" width="30px">
                                    </span>
                                    <div>
                                        <span class="mr-left">Avarage Booking Time : </span>
                                        <small> 2 hour</small>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="mexican table-for">
                                <figure>
                                    <img src="{{ asset('public/adminAssets/images/table_six.png')}}" alt="table_six" width="100px">
                                </figure>
                            </td>
                            <td class="left-right wave-pizza">
                                <div>
                                    <span class="mr-left">Table for : <b>6</b></span>
                                    <span>Number of Table : <b>3</b></span>
                                    <br>
                                    <label>Table Name 1</label>
                                    <span class="pull-right active-icon">
                                        Active
                                        <img src="{{ asset('public/adminAssets/images/toggle_on.png')}}" alt="toggle_on" width="30px">
                                    </span>
                                    <div>
                                        <span class="mr-left">Avarage Booking Time : </span>
                                        <small> 2 hour</small>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="mexican table-for">
                                <figure>
                                    <img src="{{ asset('public/adminAssets/images/table_two.png')}}" alt="table_two" width="100px">
                                </figure>
                            </td>
                            <td class="left-right wave-pizza">
                                <div>
                                    <span class="mr-left">Table for : <b>2</b></span>
                                    <span>Number of Table : <b>3</b></span>
                                    <br>
                                    <label>Table Name 1</label>
                                    <span class="pull-right active-icon"> Active <img src="{{ asset('public/adminAssets/images/toggle_on.png')}}" alt="toggle_on" width="30px"></span>
                                    <div>
                                        <span class="mr-left">Avarage Booking Time : </span>
                                        <small> 2 hour</small>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="Promotions">
            <div class="table-responsive">
                <table border="0" class="company-name Companies menu-table">
                    <tbody>
                        <tr>
                            <td class=" mexican">
                                <figure>
                                    <img src="{{ asset('public/adminAssets/images/pizza.jpg')}}" alt="pizza" width="200px">
                                </figure>
                            </td>
                            <td class="left-right wave-pizza">
                                <label>Advertisement Title</label>
                                <p>Lenovo Ideapad 5</p>
                                <a>https://www.benifitme.com/Lenovo Ideapad 5DSGVYF24&amp;marketplace
                                    <span class="pull-right active-icon"> Active <img src="{{ asset('public/adminAssets/images/toggle_on.png')}}" alt="toggle_on" width="30px"></span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class=" mexican">
                                <figure>
                                    <img src="{{ asset('public/adminAssets/images/pizza1.jpg')}}" alt="pizza1" width="200px">
                                </figure>
                            </td>
                            <td class="left-right wave-pizza">
                                <label>Advertisement Title</label>
                                <p>Lenovo Ideapad 5</p>
                                <a>https://www.benifitme.com/Lenovo Ideapad 5DSGVYF24&amp;marketplace
                                    <span class="pull-right active-icon"> Inactive <img src="{{ asset('public/adminAssets/images/toggle_off.png')}}" alt="toggle_off" width="30px"></span>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection
@section('pagejs')
<script>

</script>
@stop