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
            <h6 class="slim-pagetitle">Search Renter</h6>
        </div>

        <div class="section-wrapper">
            <form>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" value="1" checked>
                            <label class="form-check-label">Active</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" value="0">
                            <label class="form-check-label">Inactive</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" value="2">
                            <label class="form-check-label">Leased</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" value="">
                            <label class="form-check-label">All</label>
                        </div>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">User Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="username">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Property Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="propertyname">
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Manage By</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="keywords_srch">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="button" class="btn btn-primary" id="search-btn">Search Manager</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
$(document).ready(function() {
    $('#search-btn').click(function() {
        $.ajax({
            url: '{{ route("searched-renters") }}',
            method: 'GET',
            data: $('#search-form').serialize(),
            success: function(response) {
                if (response.logins.data.length > 0) {
                    $('#results-table').empty();
                    $.each(response.logins.data, function(index, login) {
                        $('#results-table').append('<tr><td>' + login.UserName + '</td><td>' + login.Email + '</td><td>' + (login.renterInfo ? login.renterInfo.firstname : '') + '</td><td>' + (login.renterInfo ? login.renterInfo.lastname : '') + '</td><td>' + (login.renterInfo ? login.renterInfo.phone : '') + '</td></tr>');
                    });
                    $('#pagination-links').html(response.pagination);
                    $('#results-wrapper').show();
                } else {
                    $('#results-table').html('<tr><td colspan="5">No records found</td></tr>');
                    $('#pagination-links').empty();
                    $('#results-wrapper').show();
                }
            }
        });
    });
});
</script>
@endsection
