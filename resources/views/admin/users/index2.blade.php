@extends('admin.master')
@section('pageTitle', 'Users')
@section('content')
@section('pageCss')
<style></style>
@stop
<?php
// dd($users);  
?>
<div class="add-newuser">
    <div class="row">
        @if(Session::has('status'))
        <div class="alert alert-{{ Session::get('status') }}">
            <i class="ti-user"></i> {{ Session::get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
        </div>
        @endif
        <div class="col-md-6 text-left">
            <p>
                <span>users</span>
            </p>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ url('admin/user-management/create') }}">
                Add New User
            </a>
        </div>
    </div>
</div>
<div class="john-doe">
    <div class="table-responsive m-t-40">
        @if(Session::has('status'))
        <div class="alert alert-{{ Session::get('status') }}">
            <i class="fa fa-building-o" aria-hidden="true"></i> {{ Session::get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
        </div>
        @endif
        <table id="dataTable" class=" table table-striped table-bordered dataTable  ">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>website</th>
                    <th>Logo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>


<!--div class="john-doe">
    <div class="row">
        <div class="col-md-2 col-sm-2">
            <figure>
                <img src="{{ asset('public/adminAssets/images/background2.png')}}" alt="background2" width="120px">
            </figure>
        </div>
        <div class="col-md-3 col-sm-3">
            <h3></h3>
            <p></p>
            <p></p>
        </div>
        <div class="col-md-7 col-sm-7 text-right">
            <p class="lost-login">Last Login :
                <span></span>
            </p>
            <div class="toggle-img">
                <span>Active</span>
                <img src="{{ asset('public/adminAssets/images/toggle_on.png')}}" alt="toggle_on" width="30px">
                <img src="{{ asset('public/adminAssets/images/message.png')}}" alt="message" width="30px">
                <img src="{{ asset('public/adminAssets/images/call.png')}}" alt="call" width="30px">
            </div>
        </div>
    </div>
</div-->


<!--div class="john-doe">
    <div class="row">
        <div class="col-md-2 col-sm-2">
            <figure>
                <img src="{{ asset('public/adminAssets/images/backup.png')}}" alt="backup" width="120px">
            </figure>
        </div>
        <div class="col-md-3 col-sm-3">
            <h3>Jessica Johnson</h3>
            <p>jessicajohn94@gmail.com</p>
            <p>9800000058</p>
        </div>
        <div class="col-md-7 col-sm-7 text-right">
            <p class="lost-login">Last Login :
                <span>10 Jun 21 | 10:30 am</span>
            </p>
            <div class="toggle-img">
                <span>Inactive</span>
                <img src="{{ asset('public/adminAssets/images/toggle_off.png')}}" alt="toggle_of" width="30px">
                <img src="{{ asset('public/adminAssets/images/message.png')}}" alt="message" width="30px">
                <img src="{{ asset('public/adminAssets/images/call.png')}}" alt="call" width="30px">
            </div>
        </div>
    </div>
</div>
<div class="john-doe">
    <div class="row">
        <div class="col-md-2 col-sm-2">
            <figure>
                <img src="{{ asset('public/adminAssets/images/circle.jpg')}}" alt="circle" width="120px">
            </figure>
        </div>
        <div class="col-md-3 col-sm-3">
            <h3>John Doe</h3>
            <p>doejohn33@gmail.com</p>
            <p>9600000052</p>
        </div>
        <div class="col-md-7 col-sm-7 text-right">
            <p class="lost-login">Last Login :
                <span>10 Jun 21 | 10:30 am</span>
            </p>
            <div class="toggle-img">
                <span>Inactive</span>
                <img src="{{ asset('public/adminAssets/images/toggle_on.png')}}" alt="toggle_on" width="30px">
                <img src="{{ asset('public/adminAssets/images/message.png')}}" alt="message" width="30px">
                <img src="{{ asset('public/adminAssets/images/call.png')}}" alt="call" width="30px">
            </div>
        </div>
    </div>
</div>
<div class="john-doe">
    <div class="row">
        <div class="col-md-2 col-sm-2">
            <figure>
                <img src="{{ asset('public/adminAssets/images/backup.png')}}" alt="backup" width="120px">
            </figure>
        </div>
        <div class="col-md-3 col-sm-3">
            <h3>Jessica Johnson</h3>
            <p>jessicajohn94@gmail.com</p>
            <p>9800000058</p>
        </div>
        <div class="col-md-7 col-sm-7 text-right">
            <p class="lost-login">Last Login :
                <span>10 Jun 21 | 10:30 am</span>
            </p>
            <div class="toggle-img">
                <span>Inactive</span>
                <img src="{{ asset('public/adminAssets/images/toggle_off.png')}}" alt="toggle_of" width="30px">
                <img src="{{ asset('public/adminAssets/images/message.png')}}" alt="message" width="30px">
                <img src="{{ asset('public/adminAssets/images/call.png')}}" alt="call" width="30px">
            </div>
        </div>
    </div>
</div -->

@endsection
@section('pagejs')
<script type="text/javascript">
    $(function() {
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            lengthMenu: [5, 10, 50, 100],
            order: [
                [1, 'desc']
            ],
            ajax: '{!! url("/admin/user-management/user-data") !!}',
            columns: [{
                    data: 'name',
                    name: 'name',
                    orderable: true
                },
                {
                    data: 'email',
                    name: 'email',
                    orderable: true
                },
                {
                    data: 'website',
                    name: 'website',
                    orderable: true
                },
                {
                    data: 'company_logo',
                    "render": function(data, type, row) {
                        return '<img src="{{url(' / public / uploads / university_logo / ') }}/' + data + '" style="width:80px;hight:80px;" />';
                    }
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                },
            ],
            dom: 'Blfrptip',
            buttons: [{
                extend: 'colvis',
                text: "Show / Hide Columns"
            }],
            oLanguage: {
                sProcessing: "<img height='80' width='80' src='{{ url('public/assets/admin/images/loading.gif') }}' alt='loader'/>",
                "oPaginate": {
                    "sPrevious": "Previous", // This is the link to the previous page
                    "sNext": "Next",
                },
                "sSearch": "Search",
                "sLengthMenu": "Show _MENU_ entries",
                "sInfo": "Showing _START_ to _END_ of _TOTAL_ enteris",
                "sInfoEmpty": "Showing 0 to 0 of 0 entries",
                "sInfoFiltered": "search filtered entries",
                "sZeroRecords": "No matching records found",
                "sEmptyTable": "No data available in table",
            },
            initComplete: function() {
                this.api().columns().every(function() {
                    var column = this;
                    var input = document.createElement("input");
                    $(input).appendTo($(column.footer()).empty())
                        .on('change', function() {
                            column.search($(this).val(), false, false, true).draw();
                        });
                });
            }
        });
    });
    $(document).on('click', '.delete', function() {
        var id = $(this).data('id');
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false

        }).then(function(isConfirm) {

            if (isConfirm.value === true) {
                $('#dataTable_processing').show();
                $.ajax({
                    url: '{{ url("/admin/university-management/delete") }}' + '/' + id,
                    type: 'GET',
                    success: function() {
                        $('#dataTable_processing').hide();
                        swal(
                            'Deleted!',
                            'University has been deleted successfully.',
                            'success'
                        ).then(function() {
                            window.location.href = '{{ url("/admin/university-management") }}';
                        });
                    }
                });
            }
        })
    });
</script>
@stop