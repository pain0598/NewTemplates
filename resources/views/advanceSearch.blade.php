@extends('layout.app')
@section('content')
<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
            <h6 class="slim-pagetitle"> Advance Search </h6>
        </div>
        <div class="section-wrapper">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="keywords">Keywords</label>
                        <input type="text" class="form-control" id="keywords" placeholder="Enter keywords">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="state">State</label>
                        <select id="state" class="form-control">
                            <option selected>Select State...</option>
                            <option>State 1</option>
                            <option>State 2</option>
                            <option>State 3</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="city">City</label>
                        <select id="city" class="form-control">
                            <option selected>Select City...</option>
                            <option>City 1</option>
                            <option>City 2</option>
                            <option>City 3</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="area">Area</label>
                        <input type="text" class="form-control" id="area" placeholder="Enter area">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="zipCode">Zip Code</label>
                        <input type="text" class="form-control" id="zipCode" placeholder="Enter zip code">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="managedBy">Managed By</label>
                        <input type="text" class="form-control" id="managedBy" placeholder="Enter manager">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="priceRange">Price Range</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="priceMin" placeholder="Min">
                            <div class="input-group-append input-group-prepend">
                                <span class="input-group-text">to</span>
                            </div>
                            <input type="number" class="form-control" id="priceMax" placeholder="Max">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="bedrooms">Bedrooms</label>
                        <input type="number" class="form-control" id="bedrooms" placeholder="Enter number of bedrooms">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
