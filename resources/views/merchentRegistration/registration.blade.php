<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('public/adminAssets/images/header_logo.png')}}" sizes="16x16">
    <link rel="stylesheet" href="{{ asset('public/merchemtAssets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/merchemtAssets/Fonts/font.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('public/merchemtAssets/css/style.css')}}">

    <title>{{ config('app.name', 'Laravel') }} @yield('pageTitle')</title>
</head>

<body>
    <div class="login">
        <div class="login-form">
            <div class="login-form-sec">
                <div class="contrary-popular">
                    <figure>
                        <img src="{{ asset('public/merchemtAssets/images/OBJECTS.svg')}}" alt="OBJECTS">
                    </figure>
                    <h3>Contrary to popular belief </h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
                <div class="login-with sign-up-benefitme">
                    <figure>
                        <img src="{{ asset('public/merchemtAssets/images/logo_onboarding.png')}}" alt="logo_onboarding" width="80px">
                    </figure>
                    <h3>Sign up with Benefit.me</h3>
                    <form method="POST" action="{{ url('/merchent-registration/save-merchent') }}" enctype="multipart/form-data">
                        @csrf
                        <section>
                            <div class="form-box-sec">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}" placeholder="Company Name">
                                    @error('company_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group ">
                                    @php
                                    $business_categories = DB::table('categories')->where('parent_id','=','0')->where('c_type','=','1')->get();
                                    @endphp
                                    <select class="form-control @error('company_type') form-control-danger @enderror givepoint-img" id="company_type" value="{{ old('company_type') }}" placeholder="company_type" name="company_type" onChange="getCategory(this);">
                                        <option value="">Select Category</option>
                                        @foreach($business_categories as $key =>$categories)
                                        <option value="{{ $categories->id }}">{{ ucfirst($categories->name) }}</option>
                                        @endforeach
                                    </select>
                                    @error('company_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group ">
                                    @php
                                    $business_subcategories = DB::table('categories')->where('parent_id','=','0')->where('c_type','=','1')->get();
                                    @endphp
                                    <select class="form-control @error('sub_restaurant_type') form-control-danger @enderror" id="sub_category" value="{{ old('sub_restaurant_type') }}" placeholder="Subcategory" name="sub_restaurant_type">
                                        <option value=""> --Select Options-- </option>
                                    </select>
                                    @error('sub_restaurant_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" placeholder="Address">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" placeholder="City">
                                    @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('zip_code') is-invalid @enderror" value="{{ old('zip_code') }}" name="zip_code" placeholder="Zip Code">
                                    @error('zip_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('uid_number') is-invalid @enderror" alue="{{ old('uid_number') }}" name="uid_number" placeholder="VAT/ UDI Number">
                                    @error('uid_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <span class="pull-left General">General Loyalty point
                                        <img src="{{ asset('public/merchemtAssets/images/hint.png')}}" alt="hint" width="10px">
                                    </span>
                                    <label class="switch ">
                                        <input type="checkbox" name="general_layality">
                                        <span class="slider click"></span>
                                    </label>
                                    <!-- <label class="switch off-cilck">
                                        <input type="checkbox" name="first_name">
                                        <span class="slider click bg-color"></span>
                                    </label> -->
                                </div>
                                <br><br><br><br>

                                <div class="form-group">
                                    <div class="form-group">
                                        <a href="" class="btn btn-primary">Cancel</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <a href="" class="btn btn-primary">Next</a>
                                    </div>
                                </div>
                                <!-- <div class="login-facebook">
                                <p>Already have an account ? <span>Login</span> </p>
                            </div> -->
                            </div>
                        </section>


                        <section>
                            <div class="form-box-sec">
                                <div class="form-group ">
                                    @php
                                    $categoriesUser = DB::table('categories')->where('parent_id','=','0')->where('c_type','=','2')->get();
                                    @endphp
                                    <select class="form-control @error('user_type') is-invalid @enderror sign-up" value="{{ old('user_type') }}" name="user_type">
                                        @foreach($categoriesUser as $key =>$categories)
                                        <option value="{{ $categories->id }}">{{ ucfirst($categories->name) }}</option>
                                        @endforeach
                                    </select>
                                    @error('user_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" placeholder="First Name">
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" placeholder="last_name">
                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="date" class="form-control @error('date_birthday') is-invalid @enderror" name="date_birthday" value="{{ old('date_birthday') }}" placeholder="date_birthday">
                                    @error('date_birthday')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group ">
                                    <select class="form-control @error('gender') is-invalid @enderror sign-up" value="{{ old('gender') }}" name="gender">
                                        <option value="">Gender </option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                        <option value="3">Special</option>
                                    </select>
                                    @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" placeholder="Email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('mobile') is-invalid @enderror" value="{{ old('mobile') }}" name="mobile" placeholder="Mobile">
                                    @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" name="password" placeholder="password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Sign Up</button>
                                    </div>
                                </div>
                                <div class="login-facebook">
                                    <p>Already have an account ? <span>Login</span> </p>
                                </div>
                            </div>
                        </section>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('public/merchemtAssets/js/libaury.js')}}"></script>
    <script src="{{ asset('public/merchemtAssets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript">
        function getCategory(obj) {
            let categoryId = $(obj).val();
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
</body>

</html>