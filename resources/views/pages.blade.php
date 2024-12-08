@extends('layout.app')
@section('content')
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
<style>
    .tab-content {
        margin-left: 14px;
    }
</style>

<style>
    #search-box {
        position: relative;
        width: 100%;
        margin: 0;
    }

    #search-form {
        height: 40px;
        border: 1px solid #999;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        background-color: #fff;
        overflow: hidden;
    }

    #search-text {
        font-size: 14px;
        color: #ddd;
        border-width: 0;
        background: transparent;
    }

    #search-box input[type="text"] {
        width: 90%;
        padding: 11px 0 12px 1em;
        color: #333;
        outline: none;
    }

    #search-button {
        position: absolute;
        top: 0;
        right: 0;
        height: 42px;
        width: 80px;
        font-size: 14px;
        color: #fff;
        text-align: center;
        line-height: 42px;
        border-width: 0;
        background-color: #4d90fe;
        -webkit-border-radius: 0px 5px 5px 0px;
        -moz-border-radius: 0px 5px 5px 0px;
        border-radius: 0px 5px 5px 0px;
        cursor: pointer;
    }

    .message-box {
        border: 1px solid #ddd;
        padding: 10px;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    .message-input {
        width: 100%;
        height: 60px;
    }

    .btn-send-message {
        display: inline-block;
        float: right;
    }

    .vertical-tabs .nav-link {
        text-align: left;
        width: 100%;
    }

    .tab-content {
        width: 100%;
    }

    .tab-pane form {
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #f9f9f9;
    }
</style>
<style>
    .ui-tabs-vertical .ui-tabs-nav {
        padding: .2em .1em .2em .2em;
        float: left;
        width: 12em;
    }

    .ui-tabs-vertical .ui-tabs-nav li {
        clear: left;
        width: 100%;
        border-bottom-width: 1px !important;
        border-right-width: 0 !important;
        margin: 0 -1px .2em 0;
    }

    .ui-tabs-vertical .ui-tabs-nav li a {
        display: block;
    }

    .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active {
        padding-bottom: 0;
        padding-right: .1em;
        border-right-width: 1px;
        border-right-width: 1px;
    }

    .ui-tabs-vertical .ui-tabs-panel {
        padding: 1em;
        float: right;
        width: 40em;
    }
</style>
<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
            <h6 class="slim-pagetitle">Pages </h6>
        </div>
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="section-wrapper mg-t-20">
                    <div class="container-fluid">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" href="#contactus" data-toggle="tab">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#aboutus" data-toggle="tab">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#equalhousing" data-toggle="tab">Equal Housing </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#privacyterms" data-toggle="tab">Privacy Terms </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#managerterms" data-toggle="tab">Manager Terms </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="ex2-content">
                        <div
                            class="tab-pane fade show active"
                            id="contactus"
                            role="tabpanel"
                            aria-labelledby="ex3-tab-1">
                            Tab 1 content
                        </div>
                        <div
                            class="tab-pane fade"
                            id="aboutus"
                            role="tabpanel"
                            aria-labelledby="ex3-tab-2">
                            Tab 2 content
                        </div>
                        <div
                            class="tab-pane fade"
                            id="equalhousing"
                            role="tabpanel"
                            aria-labelledby="ex3-tab-3">
                            Tab 3 content
                        </div>

                        <div
                            class="tab-pane fade"
                            id="privacyterms"
                            role="tabpanel"
                            aria-labelledby="ex3-tab-3">
                            Tab 4 content
                        </div>

                        <div
                            class="tab-pane fade"
                            id="managerterms"
                            role="tabpanel"
                            aria-labelledby="ex3-tab-3">
                            <div class="vertical-tabs mt-5">
                                <div class="d-flex align-items-start">
                                    <!-- Tab Buttons -->
                                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <!-- <ul class="list-group">
                                            @foreach($managerterms as $index => $term)
                                            <li class="list-group-item">
                                                <a href=""
                                                    class="btn nav-link {{ $index === 0 ? 'active' : '' }}"
                                                    id="v-pills-tab-{{ $term->id }}"
                                                    data-bs-toggle="pill"
                                                    data-bs-target="#v-pills-content-{{ $term->id }}"
                                                    type="button"
                                                    role="tab"
                                                    aria-controls="v-pills-content-{{ $term->id }}"
                                                    aria-selected="{{ $index === 0 ? 'true' : 'false' }}"
                                                    >

                                                    {{ $term->title }}
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul> -->
                                        <div class="list-group">
                                        @foreach($managerterms as $index => $term)
                                            <button type="button" class="list-group-item list-group-item-action {{ $index === 0 ? 'active' : '' }}" 
                                            id="v-pills-tab-{{ $term->id }}"
                                            data-bs-toggle="pill"
                                            data-bs-target="#v-pills-content-{{ $term->id }}"
                                            aria-current="true"
                                            type="button"
                                            role="tab"
                                            aria-controls="v-pills-content-{{ $term->id }}"
                                            aria-selected="{{ $index === 0 ? 'true' : 'false' }}"
                                            >
                                            {{ $term->title }}
                                            </button>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- Tab Content -->
                                    <div class="tab-content w-100" id="v-pills-tabContent">
                                        @foreach($managerterms as $index => $term)
                                        <div
                                            class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}"
                                            id="v-pills-content-{{ $term->id }}"
                                            role="tabpanel"
                                            aria-labelledby="v-pills-tab-{{ $term->id }}"
                                            tabindex="0">
                                            <form action="" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-layout">
                                                    <div class="row mg-b-25">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label class="form-control-label" for="title-{{ $term->id }}">Title: <span class="tx-danger">*</span></label>
                                                                <input type="text" class="form-control" id="title-{{ $term->id }}" name="title" value="{{ $term->title }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label class="form-control-label" for="title-{{ $term->id }}">Title: <span class="tx-danger">*</span></label>
                                                                <textarea
                                                                    class="form-control"
                                                                    id="description-{{ $term->id }}"
                                                                    name="description"
                                                                    rows="4"
                                                                    required>{{ $term->description }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group mg-b-10-force">
                                                                <label class="form-control-label">Select Status : <span class="tx-danger">*</span></label>
                                                                <select class="form-control select2 select2-hidden-accessible" data-placeholder="Choose country" tabindex="-1" aria-hidden="true">
                                                                    <option label="Choose country"></option>
                                                                    <option value="1">Show</option>
                                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 323px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-hdis-container"><span class="select2-selection__rendered" id="select2-hdis-container"><span class="select2-selection__placeholder">Choose country</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-layout-footer">
                                                        <button class="btn btn-primary bd-0">Submit Form</button>
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
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@push('scripts')
<script src="{{asset('js/ajax.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
    $(document).on('click', '.btn-pending', function() {
        var id = $(this).data('id');
        $('#message-box-' + id).toggle(); // Show/Hide the message box
    });

    $(document).on('click', '.btn-send-message', function() {
        var id = $(this).data('id');
        var message = $('#message-input-' + id).val();

        if (message.trim() === '') {
            alert('Please enter a message before submitting.');
            return;
        }

        $.ajax({
            url: '/revert-update', // Your route to handle the request
            method: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'), // CSRF Token
                id: id,
                message: message
            },
            success: function(response) {
                if (response.success) {
                    // Update the UI
                    $('#message-box-' + id).hide();
                    $('#message-input-' + id).val(''); // Clear the input field
                    $('.btn-pending[data-id="' + id + '"]').replaceWith('<span class="badge badge-success">Reverted</span>');
                } else {
                    alert('Something went wrong, please try again.');
                }
            },
            error: function(xhr, status, error) {
                alert('An error occurred: ' + error);
            }
        });
    });
</script>
@endpush