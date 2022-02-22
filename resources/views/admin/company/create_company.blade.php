@extends('admin.master')
@section('pageTitle', 'Create Company')
@section('content')
@section('pageCss')
<style>

</style>
@stop
<div class="add-newuser">
    <p>
        <span class="user-color">Companies</span>
        <span>> Add New Company</span>
    </p>
</div>
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
<div class="user-name">
    <div class="row">
        <form method="POST" action="{{ url('/admin/company-management/save-company') }}" enctype="multipart/form-data">
            @csrf
            <section>
                <div class="col-md-12" style="margin-bottom: 15px;">
                    <h3>Company Info</h3>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>Company Name</label>
                        <input type="text" name="company_name" class="form-control @error('company_name') has-danger @enderror" value="{{ old('company_name') }}" placeholder="Company Name" required>
                        @error('company_name')
                        <small class="form-control-feedback">{{ $errors->first('company_name') }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        @php
                        $businessCategories = DB::table('categories')->where('parent_id','=','0')->where('c_type','=','1')->get();
                        @endphp
                        <label>Category</label>
                        <select class="form-control @error('company_type') form-control-danger @enderror givepoint-img" id="company_type" value="{{ old('company_type') }}" placeholder="company_type" name="company_type" onChange="getCategory(this);" required>
                            <option value="">Select Category</option>
                            @foreach($businessCategories as $key =>$categories)
                            <option value="{{ $categories->id }}">{{ ucfirst($categories->name) }}</option>
                            @endforeach
                        </select>
                        @error('company_type')
                        <small class="form-control-feedback">
                            {{ $errors->first('company_type') }}
                        </small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>Subcategory</label>
                        @php
                        $business_subcategories = DB::table('categories')->where('parent_id','=','0')->where('c_type','=','1')->get();
                        @endphp
                        <select class="form-control @error('sub_restaurant_type') form-control-danger @enderror" id="sub_category" value="{{ old('sub_restaurant_type') }}" placeholder="Subcategory" name="sub_restaurant_type" required>
                            <option value=""> --Select Options-- </option>
                        </select>

                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control @error('address') has-danger @enderror" value="{{ old('address') }}" placeholder="2700 Cliffside Drive" required>
                        @error('address')
                        <small class="form-control-feedback">
                            {{ $errors->first('address') }}
                        </small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" name="city" class="form-control @error('city') has-danger @enderror" value="{{ old('city') }}" placeholder="Syracuse" required>
                        @error('city')
                        <small class="form-control-feedback">
                            {{ $errors->first('city') }}
                        </small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>Zip Code</label>
                        <input type="text" name="zip_code" class="form-control @error('zip_code') has-danger @enderror" value="{{ old('zip_code') }}" placeholder="13202" maxlength="6" required>
                        @error('zip_code')
                        <small class="form-control-feedback">
                            {{ $errors->first('zip_code') }}
                        </small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>VAT/UID Number</label>
                        <input type="text" name="uid_number" class="form-control @error('uid_number') has-danger @enderror" value="{{ old('uid_number') }}" placeholder="HdKH88494JH98" required>
                        @error('uid_number')
                        <small class="form-control-feedback">
                            {{ $errors->first('uid_number') }}
                        </small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>General Loyalty Point</label>
                        <select class="form-control @error('general_layality') has-danger @enderror givepoint-img" value="{{ old('general_layality') }}" name="general_layality" required>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        @error('general_layality')
                        <small class="form-control-feedback">
                            {{ $errors->first('general_layality') }}
                        </small>
                        @enderror
                    </div>
                </div>
                <div class="btn-group">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <a href="{{ url('/admin/company-management') }}" type="text" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <a href="#" type="text" class="btn btn-primary bgcolor">Next</a>
                        </div>
                    </div>
                </div>
            </section>
            <section>

                <div class="col-md-12">
                    <h3>User Info</h3>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        @php
                        $categoriesUser = DB::table('categories')->where('parent_id','=','0')->where('c_type','=','2')->get();
                        @endphp
                        <label>User Type</label>
                        <select class="form-control @error('user_type') has-danger @enderror givepoint-img" value="{{ old('user_type') }}" name="user_type" required>
                            <option>Select User Type</option>
                            @foreach($categoriesUser as $key =>$categories)
                            <option value="{{ $categories->id }}">{{ ucfirst($categories->name) }}</option>
                            @endforeach
                        </select>
                        @error('sub_category')
                        <small class="form-control-feedback">
                            {{ $errors->first('sub_category') }}
                        </small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="first_name" class="form-control @error('first_name') has-danger @enderror" value="{{ old('first_name') }}" placeholder="First Name" required>
                        @error('first_name')
                        <small class="form-control-feedback">
                            {{ $errors->first('first_name') }}
                        </small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="last_name" class="form-control @error('last_name') has-danger @enderror" value="{{ old('last_name') }}" placeholder="Last Name" required>
                        @error('last_name')
                        <small class="form-control-feedback">
                            {{ $errors->first('last_name') }}
                        </small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="date" name="date_birthday" class="form-control @error('date_birthday') has-danger @enderror" value="{{ old('date_birthday') }}" required>
                        @error('date_birthday')
                        <small class="form-control-feedback">
                            {{ $errors->first('date_birthday') }}
                        </small>
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
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control @error('email') has-danger @enderror" value="{{ old('email') }}" placeholder="doejohn484@gamil.com" required>
                        @error('email')
                        <small class="form-control-feedback">{{ $errors->first('email') }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <input type="text" name="mobile" maxlength="10" class="form-control @error('mobile') has-danger @enderror" value="{{ old('mobile') }}" placeholder="9600000025" required>
                        @error('mobile')
                        <small class="form-control-feedback">{{ $errors->first('mobile') }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control @error('password') has-danger @enderror" required>
                        @error('password')
                        <small class="form-control-feedback">
                            {{ $errors->first('password') }}
                        </small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <input class="form-check-input" type="checkbox" name="is_audience" id="is_audience">
                        <label class="form-check-label" for="is_audience">
                            This person gave me permission to email them
                            <span>
                                This person wil not receive a confirmation email from Mailchimp.
                                Since you're adding this recipient manually, they won't have an opt-in IP address or date in your records,
                                so be extra sure you have permission first.<a href="">Learn more</a>
                            </span>
                        </label>
                        @error('is_audience')
                        <small class="form-control-feedback">
                            {{ $errors->first('is_audience') }}
                        </small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input class="form-check-input" type="checkbox" name="is_confirmation_chk" id="is_confirmation_chk">
                        <label class="form-check-label" for="is_confirmation_chk">
                            If this person is already in my audience,update their profile

                        </label>
                        @error('is_confirmation_chk')
                        <small class="form-control-feedback">
                            {{ $errors->first('is_confirmation_chk') }}
                        </small>
                        @enderror
                    </div>
                </div>

                <div class="btn-group">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <a href="#" class="btn btn-primary">Previous</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary bgcolor">Add</button>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
</div>
@endsection
@section('pagejs')
<script type="text/javascript">
    function getCategory(obj) {
        let categoryId = $(obj).val();
        //alert(categoryId);
        $.ajax({
            url: '{{ url("/request/get-sub-category") }}' + '/' + categoryId,
            type: 'GET',
            success: function(rtnData) {
                // console.log(rtnData);
                if (rtnData.status == 'success') {
                    var classList = rtnData.list;
                    let options = "<option value=''> --Select Options-- </option>";
                    $.each(classList, function(key, value) {
                        options += '<option value=' + value.id + '>' + value.name + '</option>';
                    });
                    $('#sub_category').html(options);
                } else {
                    console.log(rtnData.msg);
                }
            }
        });
    }
</script>
@stop