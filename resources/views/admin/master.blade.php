<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png" href="{{ asset('public/adminAssets/images/header_logo.png')}}" sizes="16x16">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('public/adminAssets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('public/adminAssets/Fonts/font.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('public/adminAssets/css/style.css')}}">
  @yield('pageCss')
  <title>{{ config('app.name', 'Laravel') }} @yield('pageTitle')</title>
</head>

<body>
  <header>
    <div class="benefitme">
      <div class="col-md-6 col-sm-6 ">
        <a href="{{ URL::to('/') }}">
          <img src="{{ asset('public/adminAssets/images/header_logo.png')}}" alt="header_logo" width="220px">
        </a>
      </div>
      <div class="col-md-6 col-sm-6 text-right">
        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          <img src="{{ asset('public/adminAssets/images/logout.png')}}" alt="logout" width="20px"> Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>
    </div>
  </header>
  @include('admin.includes.sidebar')
  <div class="add-newuser-add company-categroy">
    @yield('content')
  </div>
  @yield('pagejs')
  
  <!-- Data Table ---->
  <!--script type="text/javascript" src="{{ asset('public/adminAssets/plugins/data-tables/js/data-table.min.js') }}"></script-->
  <script type="text/javascript" src="{{ asset('public/adminAssets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('public/adminAssets/plugins/datatables/extra-plugins/dataTables.buttons.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('public/adminAssets/plugins/datatables/extra-plugins/buttons.html5.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('public/adminAssets/plugins/datatables/extra-plugins/buttons.colVis.min.js') }}"></script>
 
  <script src="{{ asset('public/adminAssets/js/libaury.js') }}"></script>
  <script src="{{ asset('public/adminAssets/js/bootstrap.min.js') }}"></script>
</body>

</html>