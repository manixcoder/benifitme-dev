<?php
//dd($categoryDise)
?>

@if(count($categoryDise) > 0)
@foreach($categoryDise as $dise)
<div role="tabpanel" class="tab-pane active">

    <div class="john-doe-box">
        <div class="row">
            <div class="col-md-6 text-left">
                <figure class="pizza-sec">
                    @if($dise->disk_image !='')
                    <img src="{{ asset('public/uploads/')}}/{{ $dise->disk_image }}" style="height:130px;" alt="circle">
                    @else
                    <img src="{{ asset('public/merchemtAssets/images/pizza.jpg')}}" style="height:130px;" alt="circle">
                    @endif
                </figure>
                <div class="Jessica-pra text-contant">
                    <h3>{{ $dise->dise_name }}</h3>
                    <p>{{ $dise->dise_description }}</p>
                    <h3>$ {{ $dise->disk_price }}</h3>
                    @if($dise->disk_discount !='')
                    <span class="offer">
                        {{ $dise->disk_discount }}% Discount
                    </span>
                    @endif
                </div>
            </div>
            <div class="col-md-6 text-right">
                <ul>
                    <li>
                        <a href="{{ url('merchant/menu-management')}}/{{ $dise->id }}/edit">
                            <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="18px">
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('merchant/menu-management')}}/{{ $dise->id }}/delete">
                            <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="18px">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>
@endforeach
@else
<div role="tabpanel" class="tab-pane active">
    <div class="john-doe-box">
        <div class="row">
            <div class="col-md-6 text-left">
                <figure class="pizza-sec">
                    <!-- <img src="{{ asset('public/merchemtAssets/images/pizza.jpg')}}" alt="circle"> -->
                </figure>
                <div class="Jessica-pra text-contant">
                    Data not found
                </div>
            </div>
        </div>
    </div>
</div>
@endif