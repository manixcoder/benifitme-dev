@extends('admin.master')
@section('pageTitle', 'Dashboard')
@section('content')
@section('pageCss')
<style></style>
@stop
<div class="add-newuser">
    <p>
        <span class="user-color">Subscriptions</span>
        <span>&gt;Add New Subcription Plan</span>
    </p>
</div>
<div class="user-name">
    <div class="row">
        <form action="#">
            <div class="col-md-6 col-sm-6">
                <div class="form-group">
                    <label>Plan Name</label>
                    <select class="form-control">
                        <option selected="">Basic</option>
                        <option selected="">Standard</option>
                        <option selected="">Premium</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="form-group">
                    <label>Price</label>
                    <input type="name" class="form-control extrapad" placeholder="$">
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label>Validity</label>
                    <div class="rediocheck-box">
                        <div class="rediocheck-cont">
                            <input type="radio" class="redio-input">
                            <label>Per Month</label>
                        </div>
                        <div class="rediocheck-cont">
                            <input type="radio" class="redio-input">
                            <label>Per Year</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="add-newuser-add fw">
                    <h3>Feature accessibility</h3>
                    <div class=" normal-business">
                        <div class="form-group">
                            <span class="box-input">
                                <input type="checkbox">
                                <small></small>
                            </span>
                            <label>Dashboard</label>
                        </div>
                        <div class="form-group">
                            <span class="box-input">
                                <input type="checkbox">
                                <small></small>
                            </span>
                            <label>Messages</label>
                        </div>
                        <div class="form-group">
                            <span class="box-input">
                                <input type="checkbox">
                                <small></small>
                            </span>
                            <label>Menu</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-group">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Cancel</button>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary bgcolor">Add</button>
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