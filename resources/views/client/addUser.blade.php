@extends('layout.app')
@section('content')
<style>
    /* Style for error messages */
    label.error {
        color: red;
        font-size: 0.9rem;
        margin-top: 0.25rem;
    }

    /* Style for invalid fields */
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
            <!-- <form id="renterForm" novalidate>
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
                    <label for="workNameAddress" class="col-sm-2 col-form-label"> Set Reminder	</label>
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
            </form> -->
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
                            <option value="156">Fontana Dabbs</option>
                            <option value="157">Kristen Cech</option>
                            <option value="158">Michael Sancimino</option>
                            <option value="159">Downtown</option>
                            <option value="160">Amelia Farrell</option>
                            <option value="161">Phillips</option>
                            <option value="162">Colorado Springs</option>
                            <option value="163">Madison Sebern</option>
                            <option value="164">Matt open</option>
                            <option value="165">Alex Weseman</option>
                            <option value="166">Alex Aleman</option>
                            <option value="167">Open Slot SN</option>
                            <option value="168">Leadership Admin</option>
                            <option value="169">Vita Admin</option>
                            <option value="170">OPEN Cl</option>
                            <option value="171">Ellen Hawkes</option>
                            <option value="172">Open AF</option>
                            <option value="173">Gene Cordeniz</option>
                            <option value="174">Mike Sancimino</option>
                            <option value="175">Downtown Manager</option>
                            <option value="176">Manhattan
                            </option>
                            <option value="177">Marvin Gates</option>
                            <option value="178">Marvin Gates</option>
                            <option value="179">Michael Mckenzie</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select an agent.
                        </div>
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-12">
                        <label for="userName" class="font-weight-bold">User Name <span class="text-danger"> *
                            </span></label>
                        <input type="text" class="form-control" id="userName" name="userName" required="">
                        <div class="invalid-feedback">
                            Please enter a user name.
                        </div>
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-12">
                        <label for="emailId" class="font-weight-bold">Email ID <span class="text-danger"> *
                            </span></label>
                        <input type="email" class="form-control" id="emailId" name="emailId" required="">
                        <div class="invalid-feedback">
                            Please enter a valid email address.
                        </div>
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-12">
                        <label for="password" class="font-weight-bold">Password <span class="text-danger"> *
                            </span></label>
                        <input type="password" class="form-control" id="password" name="password" required="">
                        <div class="invalid-feedback">
                            Please enter a password.
                        </div>
                        <div id="password-requirements" style="display: none;">
                            <ul>
                                <li id="min-length" class="invalid">Minimum 8 characters</li>
                                <li id="uppercase" class="invalid">At least one uppercase letter</li>
                                <li id="lowercase" class="invalid">At least one lowercase letter</li>
                                <li id="numeric" class="invalid">At least one numeric digit</li>
                            </ul>
                        </div>
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-12">
                        <label for="password_confirmation" class="font-weight-bold">Confirm Password <span class="text-danger"> * </span></label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required="">
                        <div class="invalid-feedback">
                            Passwords do not match.
                        </div>
                    </div>

                    <div class="form-group col-lg-12 col-md-6 col-12">
                        <label for="cell" class="font-weight-bold">Cell <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="cell" name="cell" required="">
                        <div class="invalid-feedback">
                            Please enter your cell number.
                        </div>
                    </div>

                    <div class="form-group col-lg-6 col-md-6 col-12">
                        <label for="firstName" class="font-weight-bold">First Name <span class="text-danger"> *
                            </span></label>
                        <input type="text" class="form-control" id="firstName" name="firstName" required="">
                        <div class="invalid-feedback">
                            Please enter your first name.
                        </div>
                    </div>

                    <div class="form-group col-lg-6 col-md-6 col-12">
                        <label for="lastName" class="font-weight-bold">Last Name <span class="text-danger"> *
                            </span></label>
                        <input type="text" class="form-control" id="lastName" name="lastName" required="">
                        <div class="invalid-feedback">
                            Please enter your last name.
                        </div>
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-12">
                        <label for="currentAddress" class="font-weight-bold">Current Address <span class="text-danger">
                                * </span></label>
                        <input type="text" class="form-control" id="currentAddress" name="currentAddress" required="">
                        <div class="invalid-feedback">
                            Please enter your current address.
                        </div>
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-12">
                        <label for="state" class="font-weight-bold">State <span class="text-danger"> *
                            </span></label>
                        <input type="text" class="form-control" id="state" name="state">
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-12">
                        <label for="city" class="font-weight-bold">City <span class="text-danger"> *
                            </span></label>
                        <input type="text" class="form-control" id="city" name="city">
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-12">
                        <label for="zipCode" class="font-weight-bold">Zip Code <span class="text-danger"> *
                            </span></label>
                        <input type="text" class="form-control" id="zipCode" name="zipCode">
                        <div class="invalid-feedback">
                            Please enter a valid zip code.
                        </div>
                    </div>

                    <div class="form-group col-lg-2 col-md-6 col-12">
                        <label for="floorPreference" class="font-weight-bold">Floor Preference </label>
                        <input type="text" class="form-control" id="floorPreference" name="floorPreference">
                    </div>

                    <div class="form-group col-lg-2 col-md-6 col-12">
                        <label for="garagePreference" class="font-weight-bold">Garage Preference</label>
                        <input type="text" class="form-control" id="garagePreference" name="garagePreference">
                    </div>

                    <div class="form-group col-lg-2 col-md-6 col-12">
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

                    <div class="form-group col-lg-3 col-md-6 col-12">
                        <label for="earliestMoveDate" class="font-weight-bold">Earliest Move Date</label>
                        <input type="date" class="form-control" id="earliestMoveDate" name="earliestMoveDate">
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-12">
                        <label for="latestMoveDate" class="font-weight-bold">Latest Move Date</label>
                        <input type="date" class="form-control" id="latestMoveDate" name="latestMoveDate">
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
                        <label for="desiredRentRangeFrom" class="font-weight-bold">Desired Rent Range From</label>
                        <input type="text" class="form-control" id="desiredRentRangeFrom" name="desiredRentRangeFrom">
                    </div>
                    <div class="form-group col-lg-3 col-md-6 col-12">
                        <label for="desiredRentRangeTo" class="font-weight-bold">Desired Rent Range To</label>
                        <input type="text" class="form-control" id="desiredRentRangeTo" name="desiredRentRangeTo">
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-12">
                        <label for="bedroomSize" class="font-weight-bold">Bedroom Size</label>
                        <input type="text" class="form-control" id="bedroomSize" name="bedroomSize">
                    </div>
                    <div class="form-group col-lg-3 col-md-6 col-12">
                        <label for="bathroomSize" class="font-weight-bold">Bathroom Size</label>
                        <input type="text" class="form-control" id="bathroomSize" name="bathroomSize">
                    </div>
                    <div class="form-group col-lg-12 col-md-6 col-12">
                        <label for="specialFeatures" class="font-weight-bold">Any Special Features?</label>
                        <input type="text" class="form-control" id="specialFeatures" name="specialFeatures">
                    </div>

                    <div class="form-group col-md-12 col-md-6 col-12">
                        <label for="notes" class="font-weight-bold">Notes</label>
                        <textarea class="form-control" id="notes" name="notes"></textarea>
                    </div>
                    <div class="form-group col-md-12 col-md-6 col-12">
                        <label for="workNameAddress" class="font-weight-bold"> Reminder Note</label>
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
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // $('#renterForm').on('submit', function(event) {
        //     event.preventDefault();

        //     // Check for password match
        //     let password = $('#password').val();
        //     let password_confirmation = $('#password_confirmation').val();

        //     if (password !== password_confirmation) {
        //         $('#password_confirmation').addClass('is-invalid');
        //         return;
        //     } else {
        //         $('#password_confirmation').removeClass('is-invalid');
        //     }

        //     // Perform front-end validation
        //     if (this.checkValidity() === false) {
        //         event.stopPropagation();
        //         $(this).addClass('was-validated');
        //     } else {
        //         // Perform AJAX form submission if front-end validation passes
        //         $.ajax({
        //             url: '{{ route("create-renter") }}', // Update this URL to your Laravel route
        //             method: 'POST',
        //             data: $(this).serialize(),
        //             success: function(response) {
        //                 toastr.success('Manager Created !');
        //                 $('#renterForm')[0].reset();
        //                 $('#renterForm').removeClass('was-validated');
        //             },
        //             error: function(response) {
        //                 toastr.error('An error occurred while submitting the form.');
        //             }
        //         });
        //     }
        // });
    });


    // $(document).ready(function() {
    //     $('#renterForm').validate({
    //         rules: {
    //             assignAgent: {
    //                 required: true
    //             },
    //             userName: {
    //                 required: true,
    //                 maxlength: 255
    //             },
    //             emailId: {
    //                 required: true,
    //                 email: true
    //             },
    //             password: {
    //                 required: true,
    //                 minlength: 8,
    //                 pwcheck: true
    //             },
    //             password_confirmation: {
    //                 required: true,
    //                 equalTo: "#password"
    //             },
    //             cell: {
    //                 required: true,
    //                 maxlength: 15
    //             },
    //             firstName: {
    //                 required: true,
    //                 maxlength: 255
    //             },
    //             lastName: {
    //                 required: true,
    //                 maxlength: 255
    //             },
    //             currentAddress: {
    //                 required: true,
    //                 maxlength: 255
    //             },
    //             state: {
    //                 required: true,
    //                 maxlength: 255
    //             },
    //             city: {
    //                 required: true,
    //                 maxlength: 255
    //             },
    //             zipCode: {
    //                 required: true,
    //                 maxlength: 10
    //             }
    //         },
    //         messages: {
    //             assignAgent: {
    //                 required: "Please select an agent."
    //             },
    //             userName: {
    //                 required: "User name is required.",
    //                 maxlength: "User name cannot exceed 255 characters."
    //             },
    //             emailId: {
    //                 required: "Email ID is required.",
    //                 email: "Please enter a valid email address."
    //             },
    //             password: {
    //                 required: "Password is required.",
    //                 minlength: "Password must be at least 8 characters.",
    //                 pwcheck: "Must include upper, lower, digit."
    //             },
    //             password_confirmation: {
    //                 required: "Confirm password.",
    //                 equalTo: "Passwords do not match."
    //             },
    //             cell: {
    //                 required: "Cell number is required.",
    //                 maxlength: "Cannot exceed 15 characters."
    //             }
    //         },
    //         submitHandler: function(form) {
    //             form.submit();
    //         }
    //     });
    //     $.validator.addMethod("pwcheck", function(value) {
    //         return /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/.test(value);
    //     });
    // });
    $(document).ready(function() {
        $('#renterForm').validate({
            errorClass: "error",
            validClass: "is-valid",
            rules: {
                assignAgent: {
                    required: true
                },
                userName: {
                    required: true,
                    maxlength: 255
                },
                emailId: {
                    required: true,
                    email: true
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
                cell: {
                    required: true,
                    maxlength: 15
                },
                firstName: {
                    required: true,
                    maxlength: 255
                },
                lastName: {
                    required: true,
                    maxlength: 255
                },
                currentAddress: {
                    required: true,
                    maxlength: 255
                },
                state: {
                    required: true,
                    maxlength: 255
                },
                city: {
                    required: true,
                    maxlength: 255
                },
                zipCode: {
                    required: true,
                    maxlength: 10
                }
            },
            messages: {
                assignAgent: {
                    required: "Please select an agent."
                },
                userName: {
                    required: "User name is required.",
                    maxlength: "User name cannot exceed 255 characters."
                },
                emailId: {
                    required: "Email ID is required.",
                    email: "Please enter a valid email address."
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
                cell: {
                    required: "Cell number is required.",
                    maxlength: "Cannot exceed 15 characters."
                }
            },
            submitHandler: function(form) {
                form.submit();
            }
        });

        // Custom password validation rule
        $.validator.addMethod("pwcheck", function(value) {
            return /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/.test(value);
        });
    });
</script>
@endsection