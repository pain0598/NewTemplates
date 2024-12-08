@extends('layout.app')
@section('content')
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
</style>
<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
            <h6 class="slim-pagetitle">Manager Login Logs </h6>
        </div>
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="section-wrapper mg-t-20">
                    <div class="table">
                        <div class="table-responsive mg-t-20">
                            <table class="table" id="contactusreverts">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>EMail</th>
                                        <th>Subject</th>
                                        <th>Message </th>
                                        <th>Revert</th>
                                    </tr>
                                </thead>
                            </table>
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