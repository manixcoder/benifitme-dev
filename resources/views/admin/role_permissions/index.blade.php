@extends('admin.master')
@section('pageTitle', 'Payment')
@section('content')
@section('pageCss')
<style></style>
@stop
<div class="add-newuser">
    <p>
        <span>Role Access Company Category Wise</span>
    </p>
</div>
<div class="row">
    <?php // dd($roles); 
    ?>
    @foreach($roles as $key => $role)
    <div class="col-md-12">
        <h3><?php echo  ucfirst($role['name']);  ?></h3>
    </div>
    <div class=" normal-business">
        @foreach($permission as $key => $single)
        <div class="col-md-3 col-sm-3">

            <div class="form-group">
                <span class="box-input">
                    <input type="checkbox" value="{{ $single->id }}" class="custom-control-input permissionsId" data-roleId="{{ $role['id'] }}" data-permissionId="{{ $single->id }}" name="permissions" id="permissionsId" @if (array_search($single->id, array_column($role['AllPermissions'], 'permission_id')) !== false)
                    {{ "checked" }}
                    @endif />
                    <small></small>
                </span>
                <label>{{ $single->name }}</label>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach
</div>
@endsection
@section('pagejs')
<script type="text/javascript">
    $(document).ready(function() {
        alert("Hello Here");
        $('.permissionsId').on('change', function() {
            alert("hello Here");
            var roleId = $(this).attr("data-roleId");
            var permissionId = $(this).attr("data-permissionId");
            //var ch = $("input[type='checkbox']").val();
            //alert("roleId "+roleId);
            //alert("permissionId "+permissionId);

            var newForm = {
                roleId: roleId,
                permissionId: permissionId,
                "_token": "{{ csrf_token() }}"
            };
            $.ajax({
                'url': "{!!  url( '/admin/permissions-management/change-permission') !!}",
                'method': 'post',
                'dataType': 'json',
                'data': newForm,

                success: function(data) {
                    if (data.status == 'success') {
                        console.log(data.status);
                    } else if (data.status == 'exception' || data.status == 'danger') {
                        swal("Error", data.message, "error");
                    } else {
                        swal("Action failed", "Please fill required fields", "error");
                        $('.error').html('');
                        $('.error').parent().removeClass('has-danger');
                        $.each(data, function(key, value) {
                            if (value != "") {
                                $("#error-" + key).text(value);
                                $("#error-" + key).parent().addClass('has-danger');
                            }
                        });
                    }
                }
            });

        });
    });

    $(document).on('submit', '#permissionForm', function() {
        $.ajax({
            'url': "{!!  url( '/admin/permissions-management/save-permission') !!}",
            'method': 'post',
            'dataType': 'json',
            'data': $(this).serialize(),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                if (data.status == 'success') {
                    swal("Success", data.message, "success").then(function() {
                        window.location.href = "{!! url( '/admin/permissions-management') !!}"
                    });
                } else if (data.status == 'exception' || data.status == 'danger') {
                    swal("Error", data.message, "error");
                } else {
                    swal("Action failed", "Please fill required fields", "error");
                    $('.error').html('');
                    $('.error').parent().removeClass('has-danger');
                    $.each(data, function(key, value) {
                        if (value != "") {
                            $("#error-" + key).text(value);
                            $("#error-" + key).parent().addClass('has-danger');
                        }
                    });
                }
            }
        });
        return false;
    });
</script>
@stop