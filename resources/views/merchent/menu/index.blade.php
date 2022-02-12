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
                <button><i class="fa fa-refresh" aria-hidden="true"></i> Switch to created menu</button>
                <a href="{{ url('merchant/menu-category-management') }}">Categories</a>
                <a href="{{ url('merchant/menu-management') }}">Add New Menu</a>
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
            @if(count($foodCategoryData) > 0)
            <?php $i = 0; ?>
            @foreach($foodCategoryData as $key=> $foodCategory)
            <li role="presentation" <?php if ($pageTitle == 'Menu' && $i == '0') { ?> class="active" <?php } ?>>
                <a href="#{{ $foodCategory->category_name }}" data-id="{{ $foodCategory->id }}" class="delete" aria-controls="{{ $foodCategory->category_name }}" role="tab" data-toggle="tab">
                    {{ $foodCategory->category_name }}</a>
            </li>
            <?php $i++ ?>
            @endforeach
            @else
            @endif
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            @if(count($foodCategoryData) > 0)
            <?php $i = 0; ?>
            @foreach($foodCategoryData as $key=> $foodCategory)
            <div role="tabpanel" class="tab-pane <?php if ($pageTitle == 'Menu' && $i == '0') { ?> active <?php } ?>" id="{{ $foodCategory->category_name }}">
                <?php echo $foodCategory->id; ?>
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure class="pizza-sec">
                                <img src="{{ asset('public/merchemtAssets/images/pizza.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra text-contant">
                                <h3>Mexican green wave pizza</h3>
                                <p>With cheese & oregano</p>
                                <h3>$ 40</h3>
                                <span class="offer">30% Discount</span>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="18px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="18px">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure class="pizza-sec">
                                <img src="{{ asset('public/merchemtAssets/images/pizza1.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra text-contant">
                                <h3>Deluxe veggie pizza</h3>
                                <p>With cheese & oregano</p>
                                <h3>$ 20</h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="18px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="18px">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="john-doe-box">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <figure class="pizza-sec">
                                <img src="{{ asset('public/merchemtAssets/images/pizza2.jpg')}}" alt="circle">
                            </figure>
                            <div class="Jessica-pra text-contant">

                                <h3>Farm house pizza</h3>
                                <p>With cheese & oregano</p>
                                <h3>$ 40</h3>
                                <span class="offer">30% Discount</span>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon" width="18px">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon" width="18px">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php $i++ ?>
            @endforeach
            @else

            @endif

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
    // $(".delete").click(function() {
    //     var button = $(this).val();
    //     alert(button);
    // });

    $(document).on('click', '.delete', function() {
        var id = $(this).attr("data-id");
        $('#dataTable_processing').show();
        $.ajax({
            url: '{{ url("/merchant/menu-category-management/getcategoryData") }}' + '/' + id,
            type: 'GET',
            success: function() {
                $('#dataTable_processing').hide();
                swal(
                    'Deleted!',
                    'Student has been deleted successfully.',
                    'success'
                ).then(function() {
                    window.location.href = '{{ url("/merchant/menu-category-management") }}';
                });
            }
        });


    });
</script>
@stop