@extends('merchent.master')
@section('pageTitle', 'Menu')
@section('content')
@section('pageCss')
<style>
</style>
@stop

<div class="appoint-ment">
    <div class="appoint-sec">
        @if(Session::has('status'))
        <div class="alert alert-{{ Session::get('status') }}">
            <i class="fa fa-building-o" aria-hidden="true"></i> {{ Session::get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
        </div>
        @endif
        <div class="row">
            <div class="col-md-6 text-left">
                <p>Menu</p>
            </div>
            <div class="col-md-6 text-right">
                <a href="{{ url('merchant/menu-management/menu-list') }}" class="refresh-box"><i class="fa fa-refresh" aria-hidden="true"></i> Switch to created menu</a>
                <a href="{{ url('merchant/menu-category-management') }}">Categories</a>
                <a href="{{ url('merchant/menu-management/create') }}">Add New Dish</a>
            </div>
        </div>
    </div>
    <div class="new-requests">
        <!-- Nav tabs -->
        <?php
        $foodCategoryData = DB::table('food_category')->where('merchent_id', Auth::user()->id)->get();
        $pageTitle = 'Menu';
        ?>
        <ul class="nav nav-tabs" role="tablist">
            <?php $i = 0; ?>
            @forelse ($foodCategoryData as $key=> $foodCategory)
            <li role="presentation" <?php if ($pageTitle == 'Menu' && $i == '0') { ?> class="active" <?php } ?>>
                <a href="#{{ $foodCategory->category_name }}" data-id="{{ $foodCategory->id }}" class="delete" aria-controls="{{ $foodCategory->category_name }}" role="tab" data-toggle="tab">
                    {{ $foodCategory->category_name }}</a>
            </li>
            <?php $i++ ?>
            @empty
           
            @endforelse
        </ul>
        <!-- Tab panes -->
        <?php
        if(count($foodCategoryData) > 0){
        $foodCategoryData = DB::table('food_category')->where('merchent_id', Auth::user()->id)->orderBy('id', 'ASC')->first();
        $diseData = DB::table('food_dises')->where('disk_category_id', $foodCategoryData->id)->where('merchent_id', Auth::user()->id)->get();
        
        ?>

        <div class="tab-content" id="listings_list">
            

            <div id="default_div">
                @foreach($diseData as $dise)
                <div role="tabpanel" class="tab-pane active">
                    <div class="john-doe-box">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <figure class="pizza-sec">
                                    @if($dise->disk_image !='')
                                    <img src="{{ asset('public/uploads/')}}/{{ $dise->disk_image }}" alt="upload_img " style="height:130px;">
                                    @else
                                    <img src="{{ asset('public/merchemtAssets/images/pizza.jpg')}}" alt="circle" style="height:130px;">
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
            </div>
            @php 
              }
            @endphp


            <!--div role="tabpanel" class="tab-pane" id="profile">
                2
            </div>
            <div role="tabpanel" class="tab-pane" id="messages">
                3
            </div>
            <div role="tabpanel" class="tab-pane" id="category">
                4
            </div -->
        </div>
    </div>
</div>


@endsection
@section('pagejs')
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    $(document).on('click', '.delete', function() {
        var id = $(this).attr("data-id");
        $('#default_div').css({
            'display': 'none',
        });
        $('#dataTable_processing').show();
        $.ajax({
            url: '{{ url("/merchant/menu-category-management/getcategoryData") }}' + '/' + id,
            type: 'GET',
            success: function(data) {
                if (data.status == 'success') {
                    $("#listings_list").html(data.currentData);
                } else if (data.status == 'danger') {
                    $("#listings_list").html("<p>" + data.message + "</p>");
                } else {
                    console.log(data);
                    $('.error').html('');
                    $('.error').parent().removeClass('has-error');
                    $.each(data, function(key, value) {
                        if (value != "") {
                            $("#error-" + key).text(value);
                            $("#error-" + key).parent().addClass('has-error');
                        }
                    });
                }
            }
        });
    });
</script>
@stop