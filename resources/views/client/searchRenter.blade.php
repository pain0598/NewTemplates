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
                    <label class="col-sm-2 col-form-label">Probability Range</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="PR_from" placeholder="From" maxlength="3">
                    </div>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="PR_to" placeholder="To" maxlength="3">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">First Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="firstname">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Last Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="lastname">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Phone Number</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="phone">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Created Date</label>
                    <div class="col-sm-5">
                        <input type="date" class="form-control" name="CD_from" id="CD_from" placeholder="From">
                    </div>
                    <div class="col-sm-5">
                        <input type="date" class="form-control" name="CD_to" id="CD_to" placeholder="To">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Earliest Move Date</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="Emove_date" id="Emove_date">
                    </div>
                    <label class="col-sm-2 col-form-label">Latest Move Date</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="Lmove_date" id="Lmove_date">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Number of Bedrooms</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="srch_bedroom">
                            <option value="">Bed room</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Desired Rent Range</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="desiredrent_from" placeholder="From">
                    </div>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="desiredrent_to" placeholder="To">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="Remail">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Admin</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="admin">
                            <option value="0">All</option>
                            <option value="94">Administrator</option>
                            <option value="100">Amy Wales</option>
                            <option value="128">Kelsey Haberman</option>
                            <option value="129">Patrick Weseman</option>
                            <option value="130">Support</option>
                            <option value="138">Andrew E. Wiggin</option>
                            <option value="143">Master User</option>
                            <option value="144">Greyson Magana</option>
                            <option value="148">Open CO Springs</option>
                            <option value="149">Open TK</option>
                            <option value="150">Erica Johnson</option>
                            <option value="154">Shane Haberkorn</option>
                            <option value="155">Hs open</option>
                            <option value="158">Michael Sancimino</option>
                            <option value="159">Downtown</option>
                            <option value="160">Amelia Farrell</option>
                            <option value="162">Colorado Springs</option>
                            <option value="163">Madison Sebern</option>
                            <option value="164">Matt open</option>
                            <option value="165">Alex Weseman</option>
                            <option value="166">Alex Aleman</option>
                            <option value="167">Open Slot SN</option>
                            <option value="168">Leadership Admin</option>
                            <option value="170">OPEN Cl</option>
                            <option value="171">Ellen Hawkes</option>
                            <option value="172">Open AF</option>
                            <option value="173">Gene Cordeniz</option>
                            <option value="175">Downtown Manager</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Keyword Search</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="keywords_srch">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Favorites Search</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="favouritsrch">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="button" class="btn btn-primary" id="search-btn">Search Renter</button>
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
