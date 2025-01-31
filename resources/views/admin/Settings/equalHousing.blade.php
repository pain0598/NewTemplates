@extends('layout.app')
@section('content')
<style>
    * {
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    .settings-vertical-tabs-container {
        display: flex;
        width: 100%;
        margin: 20px auto;
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
    }

    .settings-vertical-tabs {
        width: 30%;
        background: #f4f4f4;
        padding: 10px;
        border-right: 1px solid #ddd;
    }

    .settings-vertical-tabs button {
        display: block;
        width: 100%;
        padding: 12px;
        margin: 5px 0;
        background: none;
        border: none;
        text-align: left;
        cursor: pointer;
        font-size: 16px;
    }

    .settings-vertical-tabs button.settings-active {
        background: #007BFF;
        color: white;
        font-weight: bold;
        border-radius: 4px;
    }

    .settings-vertical-tab-content {
        width: 70%;
        padding: 20px;
    }

    .settings-vertical-content {
        display: none;
    }

    .settings-vertical-content.settings-active {
        display: block;
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
            <div class="settings-vertical-tabs-container">
                <!-- Tabs -->
                <div class="settings-vertical-tabs">
                    @foreach($managerterms as $index => $term)
                    <button class="settings-tab-link {{ $index == 0 ? 'settings-active' : '' }}" onclick="openSettingsTab(event, 'tab{{ $index }}')">
                        {{ $term->title }} {{ $index + 1 }}
                    </button>
                    @endforeach
                </div>

                <!-- Tab Content -->
                <div class="settings-vertical-tab-content">
                    @foreach($managerterms as $index => $term)
                    <div id="tab{{ $index }}" class="settings-vertical-content {{ $index == 0 ? 'settings-active' : '' }}">
                        <form class="update-description-form" data-tab="{{ $index }}" onsubmit="submitDescription(event)">
                            <div class="form-row">
                                <div class="form-group col-lg-12 col-md-12 col-12">
                                    <label for="title{{ $index }}" class="font-weight-bold">Title</label>
                                    <input type="text" class="form-control" id="title{{ $index }}" name="title" value="{{ $term->title }}">
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-12">
                                    <label for="currentAddress{{ $index }}" class="font-weight-bold">Description <span class="text-danger"> * </span></label>
                                    <textarea class="form-control" id="currentAddress{{ $index }}" name="currentAddress">{{ $term->description }}</textarea>
                                </div>

                                <div class="form-row justify-content-end">
                                    <button type="submit" class="btn btn-primary update-btn" data-tab="{{ $index }}">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
<!-- <script></script> -->




<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    function openSettingsTab(event, tabId) {
        document.querySelectorAll(".settings-vertical-content").forEach(content => content.classList.remove("settings-active"));
        document.querySelectorAll(".settings-tab-link").forEach(tab => tab.classList.remove("settings-active"));
        document.getElementById(tabId).classList.add("settings-active");
        event.currentTarget.classList.add("settings-active");
    }

    // $(document).ready(function() {
    //     // Handle click event on Update button
    //     // $('#updateequalhousing').on('click', function(event) {
    //     //     event.preventDefault(); // Prevent the default form submission

    //     //     const tabIndex = $(this).data('tab');
    //     //     const title = $('#title' + tabIndex).val();
    //     //     const description = $('#description' + tabIndex).val();

    //     //     // Send AJAX request to update the description
    //     //     $.ajax({
    //     //         url: `{{ route('equal-housing-update')}}`,// Route for updating the manager term
    //     //         method: 'POST',
    //     //         data: {
    //     //             _token: '{{ csrf_token() }}', // CSRF token for security
    //     //             title: title,
    //     //             description: description,
    //     //             index: tabIndex // Send index to identify which tab is being updated
    //     //         },
    //     //         success: function(data) {
    //     //             if (data.success) {
    //     //                 // Update the content of the specific tab (title and description)
    //     //                 $('#tab' + tabIndex + ' .form-group input[name="title"]').val(title);
    //     //                 $('#tab' + tabIndex + ' .form-group textarea[name="description"]').val(description);

    //     //                 // Optionally, show a success message
    //     //                 alert('Description updated successfully!');
    //     //             } else {
    //     //                 alert('Error updating description. Please try again.');
    //     //             }
    //     //         },
    //     //         error: function(xhr, status, error) {
    //     //             console.error('Error:', error);
    //     //             alert('An error occurred. Please try again.');
    //     //         }
    //     //     });
    //     // });

    //     $(document).ready(function() {
    //         // Handle click event on Update button
    //         $('#updateequalhousing').on('click', function(event) {
    //             event.preventDefault(); // Prevent the default form submission

    //             const tabIndex = $(this).data('tab');

    //             // Serialize the form data, including the hidden token and form fields
    //             const formData = {
    //                 _token: '{{ csrf_token() }}',
    //                 title: $('#title' + tabIndex).val(),
    //                 description: $('#description' + tabIndex).val(),
    //                 index: tabIndex // Send index to identify which tab is being updated
    //             };

    //             // Send AJAX request to update the description
    //             $.ajax({
    //                 url: `{{ route('equal-housing-update')}}`, // Route for updating the manager term
    //                 method: 'POST',
    //                 data: formData,
    //                 success: function(data) {
    //                     if (data.success) {
    //                         // Update the content of the specific tab (title and description)
    //                         $('#tab' + tabIndex + ' .form-group input[name="title"]').val(formData.title);
    //                         $('#tab' + tabIndex + ' .form-group textarea[name="description"]').val(formData.description);

    //                         // Optionally, show a success message
    //                         alert('Description updated successfully!');
    //                     } else {
    //                         alert('Error updating description. Please try again.');
    //                     }
    //                 },
    //                 error: function(xhr, status, error) {
    //                     console.error('Error:', error);
    //                     alert('An error occurred. Please try again.');
    //                 }
    //             });
    //         });
    //     });

    // });

    $(document).ready(function() {
        $('.update-description-form').on('submit', function(event) {
            event.preventDefault();

            const tabIndex = $(this).data('tab'); 
            const formData = {
                _token: '{{ csrf_token() }}',
                title: $('#title' + tabIndex).val(),
                description: $('#currentAddress' + tabIndex).val(), 
                index: tabIndex 
            };
            
            $.ajax({
                url: `{{ route('equal-housing-update') }}`, 
                method: 'POST',
                data: formData,
                success: function(data) {
                    if (data.success) {
                        $('#tab' + tabIndex + ' .form-group input[name="title"]').val(formData.title);
                        $('#tab' + tabIndex + ' .form-group textarea[name="currentAddress"]').val(formData.description);
                        alert('Description updated successfully!');
                    } else {
                        alert('Error updating description. Please try again.');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                    alert('An error occurred. Please try again.');
                }
            });
        });
    });
</script>

@endsection