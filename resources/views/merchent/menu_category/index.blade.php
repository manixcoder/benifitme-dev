@extends('merchent.master')
@section('pageTitle', 'Menu Category')
@section('content')
@section('pageCss')
<style>
</style>
@stop

<div class="category-sec">
    @if(Session::has('status'))
    <div class="alert alert-{{ Session::get('status') }}">
        <i class="fa fa-building-o" aria-hidden="true"></i> {{ Session::get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
    </div>
    @endif
    <div class="menu-category">
        <div class="col-md-6 text-left">
            <span class="color-text">Menu</span>
            <span>> Categories</span>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ url('merchant/menu-category-management/create') }}">Add New Category</a>
        </div>
    </div>
    <div class="table-responsive">
        <table border="0" class="table">
            <tbody>
                <?php
                $foodCategoryData = DB::table('food_category')->where('merchent_id', Auth::user()->id)->get();
                ?>
                @forelse($foodCategoryData as $foodCategory)
                <tr>
                    <td class="text-left">{{ $foodCategory->category_name }}</td>
                    <td class="text-right">
                        <a href="{{ url('merchant/menu-category-management')}}/{{ $foodCategory->id }}/edit">
                            <img src="{{ asset('public/merchemtAssets/images/edit.png')}}" alt="icon">
                        </a>
                        <a href="{{ url('merchant/menu-category-management')}}/{{ $foodCategory->id }}/delete">
                            <img src="{{ asset('public/merchemtAssets/images/delete.png')}}" alt="icon">
                        </a>
                    </td>
                </tr>

                @empty
                <tr>
                    <td class="text-left"></td>
                </tr>
                @endforelse

            </tbody>
        </table>
    </div>
</div>
@endsection
@section('pagejs')
<script>
</script>
@stop