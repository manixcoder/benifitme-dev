@extends('admin.master')
@section('pageTitle', 'Awards')
@section('content')
@section('pageCss')
<style>

</style>
@stop
@php
$awardsData = DB::table('awards')->first();
// dd($awardsData);
@endphp
<div class="add-newuser">
    @if(Session::has('status'))
    <div class="alert alert-{{ Session::get('status') }}">
        <i class="fa fa-building-o" aria-hidden="true"></i> {{ Session::get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">
                ×
            </span>
        </button>
    </div>
    @elseif(Session::get('status') == "danger")
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ Session::get('message') }}
        <a href="#" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </a>
    </div>
    @endif
    <p>
        <span>Awards</span>
    </p>
</div>

<div class="user-name">
    <div class="row">
        <form method="post" action="{{ url('/admin/awards-management/'. $awardsData->id .'/update') }}">
            @csrf
            <input type="hidden" name="id" value="<?php echo $awardsData->id ?>">
            <div class="col-md-6 col-sm-6">
                <div class="form-group">
                    <label>Regular Visitor</label> 
                    <select class="form-control givepoint-img" name="regular_visitor">
                        <option value="10 Days" {{$awardsData->regular_visitor == '10 Days'  ? 'selected' : ''}}>10 Days</option>
                        <option value="15 Days" {{$awardsData->regular_visitor == '15 Days'  ? 'selected' : ''}}>15 Days</option>
                        <option value="20 Days" {{$awardsData->regular_visitor == '20 Days'  ? 'selected' : ''}}>20 Days</option>
                        <option value="25 Days" {{$awardsData->regular_visitor == '25 Days'  ? 'selected' : ''}}>25 Days</option>
                        <option value="30 Days" {{$awardsData->regular_visitor == '30 Days'  ? 'selected' : ''}}>30 Days</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="form-group">
                    <label>Award</label>
                    <input type="text" value="<?php echo $awardsData->visitor_points ?>" class="form-control" placeholder="10 Points" name="visitor_points">
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="form-group">
                    <label>Big Spender</label>
                    <input type="text" name="big_spender" value="<?php echo $awardsData->big_spender ?>" class="form-control" placeholder="> 700 €">
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="form-group">
                    <label>Award</label>
                    <input type="text" class="form-control" name="spendor_point" value="<?php echo $awardsData->spendor_point ?>" placeholder="15 Points">
                </div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="form-group">
                    <label>Sharing App</label>
                    <input type="text" name="sharing_app_points" value="<?php echo $awardsData->sharing_app_points ?>" class="form-control" placeholder="15 Points">
                </div>
            </div>
            <div class="btn-group">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary bgcolor">Update Changes</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section('pagejs')
<script>

</script>
@stop