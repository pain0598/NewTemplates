@extends('layout.app')
@section('content')

<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
            <h6 class="slim-pagetitle"> Manage Footer </h6>
        </div>

        <div class="section-wrapper">
            <label class="section-title">Manage Footer Section Content </label>

            <div class="card-body">
                <!-- The form id is added for jQuery to target it -->
                <form id="footerForm">
                    <div class="form-group">
                        <label for="">Short Description <span class="text-danger">*</span></label>
                        <textarea name="short_description" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Address <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="address" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Email <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="email" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Phone <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="phone" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Copyright <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="copyright" value="">
                    </div>

                    <div class="form-layout-footer mt-3">
                        <button class="btn btn-primary bd-0" type="button" id="manageFooter">Submit Form</button>
                        <button class="btn btn-secondary bd-0" type="button" id="cancel">Cancel</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#manageFooter').on('click', function() {
            var formData = new FormData($('#footerForm')[0]); // Get form data using form ID

            $.ajax({
                url: "{{ route('update-footer') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.success) {
                        toastr.success('Footer updated successfully!');
                    } else {
                        toastr.error('An error occurred while updating the footer.');
                    }
                },
                error: function(xhr, status, error) {
                    toastr.error('Something went wrong. Please try again.');
                }
            });
        });

        // Cancel button to clear the form
        $('#cancel').on('click', function() {
            $('#footerForm')[0].reset(); // Clear form on cancel
        });
    });
</script>
@endsection