@extends('admin.master')
@section('pageTitle', 'Service & Product Category')
@section('content')
@section('pageCss')
<style></style>
@stop
<div class="company-sec">
    @if(Session::has('status'))
    <div class="alert alert-{{ Session::get('status') }}">
        <i class="ti-user"></i> {{ Session::get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
    </div>
    @elseif(Session::get('status') == "danger")
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ Session::get('message') }}
        <a href="#" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </a>
    </div>
    @endif
    <div class="row">
        <div class="col-md-6 ">
            <p>Service & Product Category</p>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ url('admin/services-category-management/create') }}">
                Add New Sub Category
            </a>
        </div>
    </div>
</div>
<div class="sub-category">

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
            <!-- <div class="col-md-12 text-right">
                <a class="add_new_button mrdown" href="{{ url('admin/services-category-management/create') }}">
                    Add New Sub Category
                </a>
            </div> -->
            <div class="table-responsive">

                @php
                $categorydata = DB::table('services_category')->get();
                @endphp
                <table border="0" class="table">
                    <tbody>
                        @forelse ($categorydata as $cat)
                        @php
                        $businessCategories = DB::table('services_category')->where('id','=',$cat->parent_id)->first();
                        @endphp
                        <tr>
                            <td class="text-left">
                                <span class="restaurant">
                                    {{ $cat->category_name }}
                                    @if($cat->parent_id !='0')
                                    <br>
                                    <span class="restaurant">
                                        -- {{ $businessCategories->category_name }}
                                    </span>
                                    @else

                                    @endif
                                </span>
                                <br>

                            </td>
                            <td class="text-right">
                                <span class="edit-icon">
                                    <a href="{{ url('/admin/services-category-management/'.$cat->id.'/edit') }}">
                                        <img src="{{ asset('public/adminAssets/images/edit.png')}}" alt="edit" width="15px">
                                    </a>
                                </span>
                                <span class="delete-icon">
                                    <a href="{{ url('/admin/services-category-management/delete/'.$cat->id) }}">
                                        <img src="{{ asset('public/adminAssets/images/delete.png')}}" alt="delete" width="15px">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td class="text-left">
                                Record not found
                            </td>
                        </tr>
                        @endforelse

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