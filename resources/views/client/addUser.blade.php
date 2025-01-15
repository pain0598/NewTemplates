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
            <form id="renterForm" novalidate="">
                <div class="form-row">
                    <div class="form-group col-lg-12 col-md-6 col-12">
                        <label for="assignAgent" class="font-weight-bold"> Assign Agent <span class="text-danger"> *
                            </span></label>
                        <select class="form-control" id="assignAgent" name="assignAgent" required="">
                            <option value=""> Select Agent </option>
                            <option value="94">Administrator</option>
                            <option value="100">Amy Wales</option>
                            <option value="106">Karol Sprague</option>
                            <option value="128">Kelsey Haberman</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-12">
                        <label for="firstName" class="font-weight-bold">First Name <span class="text-danger"> *
                            </span></label>
                        <input type="text" class="form-control" id="firstName" name="firstName" required="">
                    </div>

                    <div class="form-group col-lg-6 col-md-6 col-12">
                        <label for="lastName" class="font-weight-bold">Last Name <span class="text-danger"> *
                            </span></label>
                        <input type="text" class="form-control" id="lastName" name="lastName" required="">
                    </div>
                    <div class="form-group col-lg-3 col-md-6 col-12">
                        <label for="userName" class="font-weight-bold">User Name <span class="text-danger"> *
                            </span></label>
                        <input type="text" class="form-control" id="userName" name="userName" required="">
                    </div>
                    <div class="form-group col-lg-3 col-md-6 col-12">
                        <label for="emailId" class="font-weight-bold">Email ID <span class="text-danger"> *
                            </span></label>
                        <input type="email" class="form-control" id="emailId" name="emailId" required="">
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-12">
                        <label for="password" class="font-weight-bold">Password <span
                                class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="password" id="password" name="password" class="form-control"
                                placeholder="Enter Password" required>
                            <i class="fa-regular fa-eye toggle-password show-password" id="togglePassword"
                                style="position: absolute;top:14px;right:10px;"></i>
                        </div>
                        <div class="invalid-feedback">Please enter a password.</div>
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-12">
                        <label for="password_confirmation" class="font-weight-bold">Confirm Password <span
                                class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                class="form-control" placeholder="Confirm Password" required>
                            <i class="fa-regular fa-eye toggle-password show-confirm_password"
                                id="toggleConfirmationPassword"
                                style="position: absolute;top:14px;right:10px;"></i>
                        </div>
                        <div class="invalid-feedback">Passwords do not match.</div>
                    </div>

                    <div class="form-group col-lg-6 col-md-6 col-12">
                        <label for="cell" class="font-weight-bold">Cell <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="cell" name="cell" required="">
                    </div>

                    <div class="form-group col-lg-6 col-md-6 col-12">
                        <label for="othercell" class="font-weight-bold">Other Cell </label>
                        <input type="text" class="form-control" id="othercell" name="othercell">
                    </div>

                    <div class="form-group col-lg-12 col-md-12 col-12">
                        <label for="currentAddress" class="font-weight-bold">Current Address <span class="text-danger"> * </span></label>
                        <textarea class="form-control" id="currentAddress" name="currentAddress"></textarea>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-12">
                        <label for="state" class="font-weight-bold">State <span class="text-danger"> *
                            </span></label>
                        <input type="text" class="form-control" id="state" name="state">
                    </div>

                    <div class="form-group col-lg-6 col-md-6 col-12">
                        <label for="city" class="font-weight-bold">City <span class="text-danger"> *
                            </span></label>
                        <input type="text" class="form-control" id="city" name="city">
                    </div>
                    <div class="form-group col-lg-3 col-md-6 col-12">
                        <label for="zipCode" class="font-weight-bold">Zip Code <span class="text-danger"> *
                            </span></label>
                        <input type="text" class="form-control" id="zipCode" name="zipCode">
                    </div>
                    <div class="form-group col-lg-3 col-md-6 col-12">
                        <label for="floorPreference" class="font-weight-bold">Floor Preference </label>
                        <input type="text" class="form-control" id="floorPreference" name="floorPreference">
                    </div>
                    <div class="form-group col-lg-3 col-md-6 col-12">
                        <label for="garagePreference" class="font-weight-bold">Garage Preference</label>
                        <input type="text" class="form-control" id="garagePreference" name="garagePreference">
                    </div>
                    <div class="form-group col-lg-3 col-md-6 col-12">
                        <label for="laundryPreference" class="font-weight-bold">Laundry Preference</label>
                        <input type="text" class="form-control" id="laundryPreference" name="laundryPreference">
                    </div>
                    <div class="form-group col-lg-2 col-md-6 col-12">
                        <label for="specificCrossStreet" class="font-weight-bold">Specific Cross Street</label>
                        <input type="text" class="form-control" id="specificCrossStreet" name="specificCrossStreet">
                    </div>
                    <div class="form-group col-lg-2 col-md-6 col-12">
                        <label for="communitiesVisited" class="font-weight-bold">Communities Visited</label>
                        <input type="text" class="form-control" id="communitiesVisited" name="communitiesVisited">
                    </div>
                    <div class="form-group col-lg-2 col-md-6 col-12">
                        <label for="creditHistory" class="font-weight-bold">Credit History</label>
                        <input type="text" class="form-control" id="creditHistory" name="creditHistory">
                    </div>
                    <div class="form-group col-lg-2 col-md-6 col-12">
                        <label for="rentalHistory" class="font-weight-bold">Rental History</label>
                        <input type="text" class="form-control" id="rentalHistory" name="rentalHistory">
                    </div>
                    <div class="form-group col-lg-2 col-md-6 col-12">
                        <label for="criminalHistory" class="font-weight-bold">Criminal History</label>
                        <input type="text" class="form-control" id="criminalHistory" name="criminalHistory">
                    </div>
                    <div class="form-group col-lg-2 col-md-6 col-12">
                        <label for="leaseTerm" class="font-weight-bold">Lease Term</label>
                        <input type="text" class="form-control" id="leaseTerm" name="leaseTerm">
                    </div>

                    <div class="form-group col-lg-6 col-md-6 col-12">
                        <label for="workNameAddress" class="font-weight-bold">Work Name/Address</label>
                        <input type="text" class="form-control" id="workNameAddress" name="workNameAddress">
                    </div>

                    <div class="form-group col-lg-6 col-md-6 col-12">
                        <label for="moveToArea" class="font-weight-bold">What area are you wanting to move to?
                            /Other</label>
                        <input type="text" class="form-control" id="moveToArea" name="moveToArea">
                    </div>
                    <div class="form-group col-lg-3 col-md-6 col-12">
                        <label for="earliestMoveDate" class="font-weight-bold">Earliest Move Date</label>
                        <input type="date" class="form-control" id="earliestMoveDate" name="earliestMoveDate">
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-12">
                        <label for="latestMoveDate" class="font-weight-bold">Latest Move Date</label>
                        <input type="date" class="form-control" id="latestMoveDate" name="latestMoveDate">
                    </div>
                    <div class="form-group col-lg-3 col-md-6 col-12">
                        <label for="desiredRentRangeFrom" class="font-weight-bold">Desired Rent Range (From)</label>
                        <div class="input-group">
                            <!-- <span class="input-group-text">$</span> -->
                            <input type="number" class="form-control" id="desiredRentRangeFrom" name="desiredRentRangeFrom" placeholder="Min Rent" min="0" step="1">
                        </div>
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-12">
                        <label for="desiredRentRangeTo" class="font-weight-bold">Desired Rent Range (To)</label>
                        <div class="input-group">
                            <!-- <span class="input-group-text">$</span> -->
                            <input type="number" class="form-control" id="desiredRentRangeTo" name="desiredRentRangeTo" placeholder="Max Rent" min="0" step="1">
                        </div>
                    </div>


                    <div class="form-group col-md-12 col-md-6 col-12">
                        <label for="additionalinfo" class="font-weight-bold"> Additinal Information </label>
                        <textarea class="form-control" id="additionalinfo" name="additionalinfo"></textarea>
                    </div>

                    <div class="form-group col-md-12 col-md-6 col-12">
                        <label for="locatorcomments" class="font-weight-bold"> Locator Comments </label>
                        <textarea class="form-control" id="locatorcomments" name="locatorcomments"></textarea>
                    </div>
                    <div class="form-group col-md-12 col-md-6 col-12">
                        <label for="tourinfo" class="font-weight-bold"> Tour Info </label>
                        <textarea class="form-control" id="tourinfo" name="tourinfo"></textarea>
                    </div>

                    <div class="form-group col-md-3 col-md-6 col-12">
                        <label for="remaindernote" class="font-weight-bold">Set Remainder</label>
                        <div class="input-group">
                            <input type="date" class="form-control" id="setremainder" name="setremainder">
                            <input type="time" class="form-control" id="setremainder" name="setremainder">
                        </div>
                    </div>

                    <div class="form-group col-md-6 col-12">
                        <label for="setremainder" class="font-weight-bold">Set Remainder</label>
                        <input type="datetime-local" class="form-control" id="setremainder" name="setremainder">
                    </div>
                    <div class="form-group col-md-3 col-md-6 col-12">
                        <label for="tourinfo" class="font-weight-bold"> Bed </label>
                        <select class="form-control" id="bedroom" name="bedroom" required>
                            <option value="">Select Bedroom </option>
                            <option value="">Bed 1</option>
                            <option value="">Bed 2</option>
                            <option value="">Bed 3</option>
                            <option value="">Bed 4</option>
                        </select>
                    </div>


                    <div class="form-group col-md-3 col-md-6 col-12">
                        <label for="tourinfo" class="font-weight-bold"> Source </label>
                        <select class="form-control" id="assignAgent" name="assignAgent" required>
                            <option value="">Select Agent</option>
                            @foreach($agents as $row)
                            <option value="{{$row->admin_detail_id}}">{{$row->admin_name}}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group col-md-3 col-md-6 col-12">
                        <label for="remaindernote" class="font-weight-bold">Set Remainder</label>
                        <div class="input-group">
                            <input type="text" class="form-control fc-datepicker hasDatepicker" placeholder="MM/DD/YYYY" id="dp1736441355303">
                        </div>
                    </div>

                    <div class="form-group col-md-12 col-md-6 col-12">
                        <label for="remaindernote" class="font-weight-bold">Reminder Note</label>
                        <textarea class="form-control" id="remaindernote" name="remaindernote"></textarea>
                    </div>










                </div>
                <div class="form-row justify-content-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary ml-2">Reset</button>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- <script></script> -->




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    $(document).ready(function() {
        $(function() {
            'use strict'

            // Datepicker
            $('.fc-datepicker').datepicker({
                showOtherMonths: true,
                selectOtherMonths: true
            });

            $('#datepickerNoOfMonths').datepicker({
                showOtherMonths: true,
                selectOtherMonths: true,
                numberOfMonths: 2
            });

        });
        $(".show-password").on("click", function() {
            const passwordField = $("#password");
            const type = passwordField.attr("type") === "password" ? "text" : "password";
            passwordField.attr("type", type);
            $(this).toggleClass("fa-eye fa-eye-slash");
        });

        $(".show-confirm_password").on("click", function() {
            const passwordField = $("#password_confirmation");
            const type = passwordField.attr("type") === "password" ? "text" : "password";
            passwordField.attr("type", type);
            $(this).toggleClass("fa-eye fa-eye-slash");
        });

        $.validator.addMethod(
            "pwcheck",
            function(value) {
                return /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/.test(value);
            },
            "Password must include at least one uppercase letter, one lowercase letter, and a number."
        );

        $('#renterForm').validate({
            errorClass: "error",
            validClass: "is-valid",
            rules: {
                assignAgent: {
                    required: true,
                },
                userName: {
                    required: true,
                    maxlength: 255
                },
                emailId: {
                    required: true,
                    email: true
                },
                login_id: {
                    required: true,
                    maxlength: 255
                },
                password: {
                    required: true,
                    minlength: 8,
                    pwcheck: true
                },
                password_confirmation: {
                    required: true,
                    equalTo: "#password"
                },
                phone: {
                    required: true,
                    maxlength: 15,
                    digits: true
                },
                twilio_number: {
                    required: true,
                    maxlength: 15,
                    digits: true
                },
                cell: {
                    required: true,
                    maxlength: 15,
                    digits: true
                },
                othercell: {
                    required: true,
                    maxlength: 15,
                    digits: true
                }
            },
            messages: {
                assignAgent: {
                    required: "Please select an Agent."
                },
                userName: {
                    required: " Please Enter User Name",
                },
                emailId: {
                    required: "Valid email is required.",
                    email: "Please enter a valid email address."
                },
                title: {
                    required: "Title is required."
                },
                login_id: {
                    required: "Login ID is required."
                },
                password: {
                    required: "Password is required.",
                    minlength: "Password must be at least 8 characters.",
                    pwcheck: "Must include upper, lower, digit."
                },
                password_confirmation: {
                    required: "Confirm password.",
                    equalTo: "Passwords do not match."
                },
                phone: {
                    required: "Phone number is required.",
                    digits: "Phone number must contain only numeric digits."
                },
                twilio_number: {
                    required: "Twilio number is required.",
                    digits: "Twilio number must contain only numeric digits."
                },
                cell: {
                    required: "Cell Number is required.",
                    digits: "Cell number must contain only numeric digits."
                },
                othercell: {
                    required: "Other Cell Number is required.",
                    digits: "Other Cell number must contain only numeric digits."
                }
            },
            errorPlacement: function(error, element) {
                error.addClass("invalid-feedback");
                error.insertAfter(element);
            },
            highlight: function(element) {
                $(element).addClass("is-invalid").removeClass("is-valid");
            },
            unhighlight: function(element) {
                $(element).addClass("is-valid").removeClass("is-invalid");
            },
            submitHandler: function(form) {
                event.preventDefault();
                $.ajax({
                    url: "https://mycrm.rent/admin/administration/store-admin-agent",
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                    data: $(form).serialize(),
                    beforeSend: function() {
                        $('.submit-spinner').html(
                            `<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Submitting...`
                        )
                        $('.submit-spinner').prop('disabled', true);
                    },
                    success: function(response) {
                        if (response.success) {
                            toastr.success(response.message);
                            $("#addAdminForm")[0].reset();
                            $("#city-section").html("");
                            $("#updatesectiontitles")[0].reset();
                            $('.submit-spinner').html(`Submit`)
                            $('.submit-spinner').prop('disabled', false);
                        } else {
                            if (response.errors) {
                                $.each(response.errors, function(key, value) {
                                    $("#error_" + key).text(value[0]);
                                });
                                toastr.error(response.message);
                            }
                        }
                    },
                    error: function(xhr) {
                        toastr.error(response.message);
                        $('.submit-spinner').html(`Submit`)
                        $('.submit-spinner').prop('disabled', false);
                    },
                });
            }
        });
    });
</script>
@endsection