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
            <h6 class="slim-pagetitle">Add Renter</h6>
        </div>

        <div class="section-wrapper">
            <form id="renterForm" novalidate>
                <div class="form-group row">
                    <label for="assignAgent" class="col-sm-2 col-form-label">Assign Agent*</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="assignAgent" name="assignAgent" required>
                            <option value="">Select Agent</option>
                            @foreach($agents as $row)
                            <option value="{{$row->admin_detail_id}}">{{$row->admin_name}}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Please select an agent.
                        </div>
                    </div>
                </div>

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

                <div class="form-group row">
                    <label for="firstName" class="col-sm-2 col-form-label">First Name*</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="firstName" name="firstName" required>
                        <div class="invalid-feedback">
                            Please enter your first name.
                        </div>
                    </div>
                    <label for="lastName" class="col-sm-2 col-form-label">Last Name*</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="lastName" name="lastName" required>
                        <div class="invalid-feedback">
                            Please enter your last name.
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="cell" class="col-sm-2 col-form-label">Cell*</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="cell" name="cell" required>
                        <div class="invalid-feedback">
                            Please enter your cell number.
                        </div>
                    </div>
                    <label for="otherPhone" class="col-sm-2 col-form-label">Other Phone</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="otherPhone" name="otherPhone">
                        <div class="invalid-feedback">
                            Please enter a valid phone number.
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="currentAddress" class="col-sm-2 col-form-label">Current Address*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="currentAddress" name="currentAddress" required>
                        <div class="invalid-feedback">
                            Please enter your current address.
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="state" class="col-sm-2 col-form-label">State*</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="state" name="state" value="1">
                    </div>
                    <label for="city" class="col-sm-2 col-form-label">City*</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="city" name="city" value="1">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="zipCode" class="col-sm-2 col-form-label">Zip Code</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="zipCode" name="zipCode">
                        <div class="invalid-feedback">
                            Please enter a valid zip code.
                        </div>
                    </div>
                    <label for="floorPreference" class="col-sm-2 col-form-label">Floor Preference</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="floorPreference" name="floorPreference">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="garagePreference" class="col-sm-2 col-form-label">Garage Preference</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="garagePreference" name="garagePreference">
                    </div>
                    <label for="laundryPreference" class="col-sm-2 col-form-label">Laundry Preference</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="laundryPreference" name="laundryPreference">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="specificCrossStreet" class="col-sm-2 col-form-label">Specific Cross Street</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="specificCrossStreet" name="specificCrossStreet">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="communitiesVisited" class="col-sm-2 col-form-label">Communities Visited</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="communitiesVisited" name="communitiesVisited">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="creditHistory" class="col-sm-2 col-form-label">Credit History</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="creditHistory" name="creditHistory">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="rentalHistory" class="col-sm-2 col-form-label">Rental History</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="rentalHistory" name="rentalHistory">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="criminalHistory" class="col-sm-2 col-form-label">Criminal History</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="criminalHistory" name="criminalHistory">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="leaseTerm" class="col-sm-2 col-form-label">Lease Term</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="leaseTerm" name="leaseTerm">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="workNameAddress" class="col-sm-2 col-form-label">Work Name/Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="workNameAddress" name="workNameAddress">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="moveToArea" class="col-sm-2 col-form-label">What area are you wanting to move to? /Other</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="moveToArea" name="moveToArea">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="earliestMoveDate" class="col-sm-2 col-form-label">Earliest Move Date</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" id="earliestMoveDate" name="earliestMoveDate">
                    </div>
                    <label for="latestMoveInDate" class="col-sm-2 col-form-label">Latest Move-in Date</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" id="latestMoveInDate" name="latestMoveInDate">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="desiredRentRangeFrom" class="col-sm-2 col-form-label">Desired Rent Range</label>
                    <div class="col-sm-5">
                        <input type="number" class="form-control" id="desiredRentRangeFrom" name="desiredRentRangeFrom" placeholder="From">
                    </div>
                    <div class="col-sm-5">
                        <input type="number" class="form-control" id="desiredRentRangeTo" name="desiredRentRangeTo" placeholder="To">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="numberOfBedRooms" class="col-sm-2 col-form-label">Number of Bed Rooms</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="numberOfBedRooms" name="numberOfBedRooms">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="petInfo" class="col-sm-2 col-form-label">Pet Info</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="petInfo" name="petInfo">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="additionalInfo" class="col-sm-2 col-form-label">Additional Info</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="additionalInfo" name="additionalInfo"></textarea>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="zipCode" class="col-sm-2 col-form-label">Locator Comments</label>
                    <div class="col-sm-4">
                        <textarea class="form-control" id="locatorcomments" name="locatorcomments"></textarea>
                    </div>
                    <label for="floorPreference" class="col-sm-2 col-form-label">Tour Info</label>
                    <div class="col-sm-4">
                        <textarea class="form-control" id="tourinfo" name="tourinfo"></textarea>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="zipCode" class="col-sm-2 col-form-label">Probability (%)</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="probability" name="probability">
                    </div>
                    <label for="floorPreference" class="col-sm-2 col-form-label"> Source </label>
                    <div class="col-sm-4">
                        <select class="form-control" id="source" name="source">
                            <option value="">Select Agent</option>
                            @foreach($agents as $row)
                            <option value="{{$row->admin_detail_id}}">{{$row->admin_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="workNameAddress" class="col-sm-2 col-form-label"> Set Reminder </label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="setremainder" name="setremainder">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="workNameAddress" class="col-sm-2 col-form-label"> Reminder Note</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="remaindernote" name="remaindernote"></textarea>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
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
        $('#renterForm').on('submit', function(event) {
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
                // Perform AJAX form submission if front-end validation passes
                $.ajax({
                    url: '{{ route("create-renter") }}', // Update this URL to your Laravel route
                    method: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        toastr.success('Manager Created !');
                        $('#renterForm')[0].reset();
                        $('#renterForm').removeClass('was-validated');
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