@extends('layout.app')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
            <h6 class="slim-pagetitle">Add Manager </h6>
        </div>

        <div class="section-wrapper">
            <form id="agentForm" novalidate>
                {{-- <div class="form-group row">
                    <label for="assignAgent" class="col-sm-2 col-form-label">Assign Agent*</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="assignAgent" name="assignAgent" required>
                            <option value="0">Select Agent</option>
                            @foreach($agents as $row)
                            <option value="{{$row->admin_detail_id}}">{{$row->admin_name}}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Please select an agent.
                        </div>
                    </div>
                </div> --}}
                <div class="form-group row">
                    <label for="userName" class="col-sm-2 col-form-label">User Name*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="userName" name="userName" required>
                        <div class="invalid-feedback">
                            Please enter a user name.
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password*</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password" required>
                        <div class="invalid-feedback">
                            Please enter a password.
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password_confirmation" class="col-sm-2 col-form-label">Confirm Password*</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        <div class="invalid-feedback">
                            Passwords do not match.
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="emailId" class="col-sm-2 col-form-label">Email ID*</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="emailId" name="emailId" required>
                        <div class="invalid-feedback">
                            Please enter a valid email address.
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Add Manager</button>
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#agentForm').on('submit', function(event) {
            event.preventDefault();

            // Check for password match
            let password = $('#password').val();
            let password_confirmation = $('#password_confirmation').val();

            if (password !== password_confirmation) {
                $('#password_confirmation').addClass('is-invalid');
                return;
            } else {
                $('#password_confirmation').removeClass('is-invalid');
            }

            // Perform front-end validation
            if (this.checkValidity() === false) {
                event.stopPropagation();
                $(this).addClass('was-validated');
            } else {

                $.ajax({
                    url: '{{ route("create-manager") }}',
                    method: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        toastr.success('Manager Created !');
                        $('#agentForm')[0].reset();
                        $('#agentForm').removeClass('was-validated');
                    },
                    error: function(response) {
                        toastr.error('An error occurred while submitting the form.');
                    }
                });
            }
        });
    });
</script>
@endsection
