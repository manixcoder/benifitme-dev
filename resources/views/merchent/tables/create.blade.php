@extends('merchent.master')
@section('pageTitle', 'Tables')
@section('content')
@section('pageCss')
<style>
</style>
@stop
<div class="add-newoffer">
    <div class="pra-sec">
        <p>Add New Table</p>
    </div>
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
    <div class="form-box  Customer-journey">
        <div class="row category-mr">
            <div class="generate">
                <form method="POST" action="{{ url('/merchant/table-management/save-table') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12 col-sm-12">
                        <div class="col-md-4 col-sm-4">
                            
                            <div class="form-group">
                                <label>Table Name</label>
                                <input type="text" class="form-control  @error('table_name') is-invalid @enderror" placeholder="Table Name" value="{{ old('table_name') }}" name="table_name" id="table_name">
                                @error('table_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label>Table For</label>
                                <select class="form-control text-color @error('table_for') is-invalid @enderror" value="{{ old('table_for') }}" name="table_for">
                                    <option>Select Table For</option>
                                    <option value="2">2</option>
                                    <option value="4">4</option>
                                    <option value="6">6</option>
                                </select>
                                @error('table_for')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label>Average Booking Time (in hours)</label>
                            <div class="form-group">
                                <select class="form-control text-color @error('booking_time') is-invalid @enderror" value="{{ old('booking_time') }}" name="booking_time">
                                    <option>Select Booking Time</option>
                                    <option value="2">2</option>
                                    <!-- <option value="4">4</option> -->
                                </select>
                                @error('booking_time')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4"></div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label>Number of Tables</label>
                                <select class="form-control text-color @error('number_tables') is-invalid @enderror" value="{{ old('number_tables') }}" name="number_tables">
                                    <option>Select Number of Tables</option>
                                    <option value="2">2</option>
                                    <!-- <option value="5">5</option> -->
                                </select>
                                @error('number_tables')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <button type="button" class="btn btn-primary">Cancel</button>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary bgcolor">Add</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('pagejs')
<script>
</script>
@stop