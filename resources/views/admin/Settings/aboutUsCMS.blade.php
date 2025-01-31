@extends('layout.app')
@section('content')
<style>
    label.error {
        color: red;
        font-size: 0.9rem;
        margin-top: 0.25rem;
    }

    input.error,
    select.error,
    textarea.error {
        border-color: red;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
            <h6 class="slim-pagetitle">Add Renter</h6>
        </div>

        <div class="section-wrapper">
            <!-- <form id="renterForm" novalidate="">
                
                <div class="form-row justify-content-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary ml-2">Reset</button>
                </div>
            </form> -->

            <form id="aboutUsForm" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Title:</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $aboutUs->title ?? '' }}" required>
                </div>

                <div class="form-group">
                    <label>Heading:</label>
                    <input type="text" name="heading" id="heading" class="form-control" value="{{ $aboutUs->heading ?? '' }}" required>
                </div>

                <div class="form-group">
                    <label>Description:</label>
                    <textarea name="description" id="description" class="form-control" required>{{ $aboutUs->description ?? '' }}</textarea>
                </div>

                <div class="form-group">
                    <label>Image:</label>
                    <input type="file" name="image" id="image" class="form-control">

                    {{-- Show old image preview if exists --}}
                    @if(isset($aboutUs->image))
                    <img id="preview-image" src="{{ $aboutUs->image }}" class="img-thumbnail mt-2" width="150">
                    @else
                    <img id="preview-image" class="img-thumbnail mt-2 d-none" width="150">
                    @endif
                </div>

                <button type="submit" class="btn btn-primary mt-3" id="submit-btn">Update</button>
            </form>

        </div>
    </div>
</div>
<!-- <script></script> -->




<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Function to preview new image before upload
        $('#image').change(function(e) {
            let file = e.target.files[0];
            if (file) {
                let reader = new FileReader();
                reader.onload = function(e) {
                    $('#preview-image').attr('src', e.target.result).removeClass('d-none');
                };
                reader.readAsDataURL(file);
            }
        });

        $('#aboutUsForm').submit(function(event) {
            event.preventDefault();

            let formData = new FormData(this);
            let submitBtn = $('#submit-btn');

            submitBtn.prop('disabled', true).text('Updating...');

            $.ajax({
                url: "{{ route('aboutus.update') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.success) {
                        $('#success-message').removeClass('d-none').text(response.message);

                        // Update preview image if new image uploaded
                        if (response.image) {
                            $('#preview-image').attr('src', response.image).removeClass('d-none');
                        }
                    } else {
                        $('#error-message').removeClass('d-none').text('Something went wrong.');
                    }
                    submitBtn.prop('disabled', false).text('Update');
                },
                error: function(xhr) {
                    let errors = xhr.responseJSON.errors;
                    let errorMsg = '';

                    if (errors) {
                        Object.keys(errors).forEach(function(key) {
                            errorMsg += errors[key][0] + '<br>';
                        });
                    } else {
                        errorMsg = 'An unexpected error occurred.';
                    }

                    $('#error-message').removeClass('d-none').html(errorMsg);
                    submitBtn.prop('disabled', false).text('Update');
                }
            });
        });
    });
</script>
@endsection