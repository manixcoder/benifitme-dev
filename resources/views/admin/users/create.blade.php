@extends('admin.master')
@section('pageTitle', 'Users')
@section('content')
@section('pageCss')
<style></style>
@stop
<div class="add-newuser">
    <p>
        <span class="user-color">
            Users
        </span>
        <span>>Add New User</span>
    </p>
</div>
<div class="user-name">
    <div class="row">
        <form method="POST" action="{{ url('/admin/user-management/save-user') }}" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6 col-sm-6">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="first_name" class="form-control @error('first_name') has-danger @enderror" placeholder="John">
                    @error('first_name')
                    <small class="form-control-feedback">{{ $errors->first('first_name') }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="last_name" class="form-control @error('last_name') has-danger @enderror" placeholder="Doe">
                    @error('last_name')
                    <small class="form-control-feedback">{{ $errors->first('last_name') }}</small>
                    @enderror
                </div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="form-group">
                    <label>Username</label>
                    <input type="name" name="name" class="form-control @error('name') has-danger @enderror" placeholder="John">
                    @error('name')
                    <small class="form-control-feedback">{{ $errors->first('name') }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" class="form-control @error('email') has-danger @enderror" placeholder="doejohn33@gmail.com">
                    @error('email')
                    <small class="form-control-feedback">{{ $errors->first('email') }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="form-group">
                    <label>Mobile Number</label>
                    <input type="text" name="mobile" class="form-control @error('mobile') has-danger @enderror" placeholder="9600000052">
                    @error('mobile')
                    <small class="form-control-feedback">{{ $errors->first('mobile') }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>Select Gender</label>
                        <select class="form-control @error('gender') has-danger @enderror givepoint-img" value="{{ old('gender') }}" name="gender" required>
                            <option value="">Select Gender</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                            <option value="0">Other</option>
                            @error('gender')
                            <small class="form-control-feedback">
                                {{ $errors->first('gender') }}
                            </small>
                            @enderror
                        </select>
                    </div>
                </div>
            <div class="col-md-6 col-sm-6">
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control @error('password') has-danger @enderror" placeholder="DoeJohn@0052">
                    @error('password')
                    <small class="form-control-feedback">{{ $errors->first('password') }}</small>
                    @enderror
                </div>
            </div>

            <div class="btn-group">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <a href="{{ url('admin/user-management') }}" class="btn btn-primary">Cancel</a>
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