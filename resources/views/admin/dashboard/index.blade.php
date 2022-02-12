@extends('admin.master')
@section('pageTitle', 'Dashboard')
@section('content')
@section('pageCss')
<style></style>
@stop

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
  <p><span>Dashboard</span></p>
</div>
<div class="row">
  <div class="col-md-4 col-sm-4">
    <div class="total-user">
      <p>Total User
        <span class="pull-right view-all"><a href="{{ url('admin/user-management') }}">{{ $user_data }}</a></span>
      </p>
    </div>
  </div>
  <div class="col-md-4 col-sm-4">
    <div class="total-user">
      <p>Total Company
        <span class="pull-right view-all"><a href="{{ url('admin/company-management') }}">{{ $merchent_data }}</a></span>
      </p>
    </div>
  </div>
  <div class="col-md-4 col-sm-4">
    <div class="total-user">
      <p>New Messages
        <span class="pull-right view-all"><a href="#">78</a></span>
      </p>
    </div>
  </div>
  <div class="col-md-12 col-sm-12">
    <h3>Registration Requests
      <span class="pull-right view-all"><a href="{{ url('admin/company-management') }}">View all</a></span>
    </h3>
  </div>
</div>

<div class="table-responsive requests-table">

  <table border="0" class="company-name">
    <tbody>
      @foreach($incommerchant as $merchant)
      @php
      $categorydata = DB::table('categories')->where('id', $merchant->company_type)->first();
      $subcategorydata = DB::table('categories')->where('id', $merchant->sub_restaurant_type)->first();
      $usercategorydata = DB::table('categories')->where('id', $merchant->user_type)->first();
      @endphp
      <tr>
        <td>
          <p>#{{ $merchant->uid_number }}</p>
          <h3>{{ $merchant->company_name }}</h3>
          <p>{{ $categorydata->name }}</p>
          <p>{{ $merchant->address }} , {{ $merchant->city }} , {{ $merchant->zip_code }} </p>
          <h3>VAT/UID Numb<er /h3>
        </td>
        <td>
          <p class="text-right">
            @if($merchant->last_login)
            {{ date('d M Y | H:i a', strtotime($merchant->last_login)) }}
            @endif
          </p>
          <span class="pull-right view-all">
            <a href="{{ url('admin/company-management') . '/' . $merchant->id.'/show' }}">
              View Details
            </a>
            <button type="submit" class="btn btn-primary">
              Decline
            </button>
            <button type="submit" class="btn btn-primary bgcolor">
              Accept
            </button>
          </span>
        </td>
      </tr>
      @endforeach

      <!--tr>
        <td>
          <p>#NUD5449595</p>
          <h3>Company Name</h3>
          <p>Hotel</p>
          <p>2700 Cliffside Drive, Syracuse, 13202</p>
          <h3>VAT/UID Numb<er /h3>
        </td>
        <td>
          <p class="text-right">10 Jun 21 | 10:30 am</p>
          <span class="pull-right view-all"><a href="#">View Details</a>
            <button type="submit" class="btn btn-primary">Decline</button>
            <button type="submit" class="btn btn-primary bgcolor">Accept</button>
          </span>
        </td>
      </tr>
      <tr>
        <td>
          <p>#NUD5449595</p>
          <h3>Company Name</h3>
          <p>Restaurant Mexican</p>
          <p>2700 Cliffside Drive, Syracuse, 13202</p>
          <h3>VAT/UID Numb<er /h3>
        </td>
        <td>
          <p class="text-right">10 Jun 21 | 10:30 am</p>
          <span class="pull-right view-all"><a href="#">View Details</a>
            <button type="submit" class="btn btn-primary">Decline</button>
            <button type="submit" class="btn btn-primary bgcolor">Accept</button>
          </span>
        </td>
      </tr>
      <tr>
        <td>
          <p>#NUD5449595</p>
          <h3>Company Name</h3>
          <p>Hotel</p>
          <p>2700 Cliffside Drive, Syracuse, 13202</p>
          <h3>VAT/UID Numb<er /h3>
        </td>
        <td>
          <p class="text-right">10 Jun 21 | 10:30 am</p>
          <span class="pull-right view-all"><a href="#">View Details</a>
            <button type="submit" class="btn btn-primary">Decline</button>
            <button type="submit" class="btn btn-primary bgcolor">Accept</button>
          </span>
        </td>
      </tr-->
    </tbody>
  </table>
</div>

@endsection