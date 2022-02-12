@extends('admin.master')
@section('pageTitle', 'Category')
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
            <p>Business Category</p>
        </div>
        <div class="col-md-6 text-right">
            <a href="#">
                
            </a>
        </div>
    </div>
</div>
<div class="sub-category">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">
            <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                Company Category
            </a>
        </li>
        <li role="presentation">
            <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                Sub Category
            </a>
        </li>
        <li role="presentation">
            <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
                User Category
            </a>
        </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
            <div class="table-responsive">
                <div class="col-md-6 text-right">
                    <a href="{{ url('admin/category-management/company-category') }}">
                        Add New Company Category
                    </a>
                </div>
                <table border="0" class="table">
                    <tbody>
                        @php
                        $business_categories = DB::table('categories')->where('parent_id','=','0')->where('c_type','=','1')->get();
                        @endphp

                        @forelse ($business_categories as $key =>$categories)
                        <tr>
                            <td class="text-left">{{ ucfirst($categories->name) }}</td>
                            <td class="text-right">
                                <span class="edit-icon">
                                    <a href="{{ url('admin/category-management') . '/' . $categories->id.'/edit-category' }}">
                                        <img src="{{ asset('public/adminAssets/images/edit.png') }}" alt="edit" width="15px">
                                    </a>
                                </span>
                                <span class="delete-icon">
                                    <a href="{{ url('admin/category-management') . '/delete/' . $categories->id }}">
                                        <img src="{{ asset('public/adminAssets/images/delete.png') }}" alt="delete" width="15px">
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
        <div role="tabpanel" class="tab-pane" id="profile">
            @php
            $bsubcategories = DB::table('categories')->where('parent_id','!=','0')->where('c_type','=','1')->get();
            @endphp
            <div class="table-responsive">
                <div class="col-md-6 text-right">
                    <a href="{{ url('admin/category-management/add-sub-category') }}">
                        Add New Sub Category
                    </a>
                </div>
                <table border="0" class="table">
                    <tbody>
                        @forelse ($bsubcategories as $cat)
                        @php
                        $businessCategories = DB::table('categories')->where('id','=',$cat->parent_id)->first();
                        @endphp
                        <tr>
                            <td class="text-left">
                                <span class="restaurant">{{ ucfirst($businessCategories->name) }}</span>
                                <br>
                                {{ ucfirst($cat->name) }}
                            </td>
                            <td class="text-right">
                                <span class="edit-icon">
                                    <a href="{{ url('admin/category-management') . '/' . $cat->id.'/edit-sub-category' }}">
                                        <img src="{{ asset('public/adminAssets/images/edit.png')}}" alt="edit" width="15px">
                                    </a>
                                </span>
                                <span class="delete-icon">
                                    <a href="{{ url('admin/category-management') . '/delete/' . $cat->id }}">
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
                        <!--
                            <tr>
                            <td class="text-left ">
                                <span class="restaurant">Restaurant</span>
                                <br>
                                Restaurant Type 1
                            </td>
                            <td class="text-right">
                                <span class="edit-icon">
                                    <a href="#">
                                        <img src="{{ asset('public/adminAssets/images/edit.png')}}" alt="edit" width="15px">
                                    </a>
                                </span>
                                <span class="delete-icon">
                                    <a href="#">
                                        <img src="{{ asset('public/adminAssets/images/delete.png')}}" alt="delete" width="15px">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left ">
                                <span class="restaurant">Restaurant</span>
                                <br>
                                Restaurant Type 1
                            </td>
                            <td class="text-right">
                                <span class="edit-icon">
                                    <a href="#">
                                        <img src="{{ asset('public/adminAssets/images/edit.png')}}" alt="edit" width="15px">
                                    </a>
                                </span>
                                <span class="delete-icon">
                                    <a href="#">
                                        <img src="{{ asset('public/adminAssets/images/delete.png')}}" alt="delete" width="15px">
                                    </a>
                                </span>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="messages">
            <div class="table-responsive">
                <div class="col-md-6 text-right">
                    <a href="{{ url('admin/category-management/user-category') }}">
                        Add New User Category
                    </a>
                </div>
                @php
                $business_categories = DB::table('categories')->where('c_type','=','2')->get();
                @endphp
                <table border="0" class="table">
                    <tbody>

                        @forelse ($business_categories as $key =>$categories)
                        <tr>
                            <td class="text-left">{{ ucfirst($categories->name) }}</td>
                            <td class="text-right">
                                <span class="edit-icon">
                                    <a href="{{ url('admin/category-management') . '/' . $categories->id.'/edit-user-category' }}">
                                        <img src="{{ asset('public/adminAssets/images/edit.png')}}" alt="edit" width="15px">
                                    </a>
                                </span>
                                <span class="delete-icon">
                                    <a href="{{ url('admin/category-management') . '/delete/' . $categories->id }}">
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
                        <!-- <tr>

                            <td class="text-left "> Manager</td>
                            <td class="text-right">
                                <span class="edit-icon">
                                    <a href="#">
                                        <img src="{{ asset('public/adminAssets/images/edit.png')}}" alt="edit" width="15px">
                                    </a>
                                </span>
                                <span class="delete-icon">
                                    <a href="#">
                                        <img src="{{ asset('public/adminAssets/images/delete.png')}}" alt="delete" width="15px">
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <tr>

                            <td class="text-left "> Accountant</td>
                            <td class="text-right">
                                <span class="edit-icon">
                                    <a href="#">
                                        <img src="{{ asset('public/adminAssets/images/edit.png')}}" alt="edit" width="15px">
                                    </a>
                                </span>
                                <span class="delete-icon">
                                    <a href="#">
                                        <img src="{{ asset('public/adminAssets/images/delete.png')}}" alt="delete" width="15px">
                                    </a>
                                </span>
                            </td>
                        </tr> -->
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