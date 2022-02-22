@extends('merchent.master')
@section('pageTitle', 'Table Edit')
@section('content')
@section('pageCss')
<style>
</style>
@stop
<div class="add-newoffer">
    <div class="dashboard-heading">
        <h3>Edit Table</h3>
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
                <form method="POST" action="{{ url('/merchant/table-management/'.$table->id.'/update-table') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12 col-sm-12">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label>Table For</label>
                                <input type="text" name="table_name" class="form-control  @error('table_name') is-invalid @enderror" placeholder="Table Name" value="{{ $table->table_name }}" placeholder="Table name 1">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label>Table for</label>
                            <div class="form-group">
                                <select class="form-control text-color @error('table_for') is-invalid @enderror" name="table_for">
                                    <option>Select Table For</option>
                                    <option value="2" {{ $table->table_for == '2' ? 'selected' : '' }}>2</option>
                                    <option value="4" {{ $table->table_for == '4' ? 'selected' : '' }}>4</option>
                                    <option value="6" {{ $table->table_for == '6' ? 'selected' : '' }}>6</option>
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
                                <select class="form-control text-color @error('booking_time') is-invalid @enderror" name="booking_time">
                                    <option>Select Booking Time</option>
                                    <option value="2" {{ $table->booking_time == '2' ? 'selected' : '' }}>2</option>

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
                                <button type="button" class="btn btn-primary">Cancel</button>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary bgcolor">Save</button>
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