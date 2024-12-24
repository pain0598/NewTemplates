<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Denver Apartments </title>
    <link rel="shortcut icon" type="image/x-icon" href="site_images/logo/favicon.ico">
    <meta name="csrf-token" content="kMCQ9B5u7Kw5UoTD8z2Ic4Cpj0UoevbZYDH8LA3p">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="http://38.137.14.92:8003/rentaappartment/public/user_asset/vendor/bootstrap5/bootstrapupdated5.min.css ">
    <link rel="stylesheet" href="http://38.137.14.92:8003/rentaappartment/public/user_asset/vendor/select2/select2.min.css ">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="http://38.137.14.92:8003/rentaappartment/public/user_asset/vendor/aos/aos.css ">
    <link rel="stylesheet" href="http://38.137.14.92:8003/rentaappartment/public/user_asset/vendor/owlcarousel/owl.carousel.min.css ">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://38.137.14.92:8003/rentaappartment/public/user_asset/css/frontendstyle.css ">
    <link rel="stylesheet" href="http://38.137.14.92:8003/rentaappartment/public/user_asset/css/responsive.css ">



    <style>
        :root {
            --colorPrimary: #0d7c66;
        }
    </style>
</head>

<body>
    <div class="overlay"></div>
    <div id="preloader" class="preloader" style="display: none;"></div>
    <div class="click-closed"></div>

    <div class="box-collapse" style="padding:0rem 4.1rem;">
        <span class="close-box-collapse right-boxed bi bi-x"></span>
        <ul class="nav nav-pills-a nav-pills mb-3 section-t3 justify-content-start" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active btn" id="quicksearch-tab" data-bs-toggle="pill" href="#quicksearch"
                    role="tab" aria-controls="quicksearch" aria-selected="true">Search</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="raduissearch-tab" data-bs-toggle="pill" href="#radiussearch" role="tab"
                    aria-controls="radiussearch" aria-selected="false">Radius Search</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="advance-search-tab" data-bs-toggle="pill" href="#advancesearch" role="tab"
                    aria-controls="advancesearch" aria-selected="false">Advance Search</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <!-- Quick Search -->
            <div class="tab-pane fade show active" id="quicksearch" role="tabpanel" aria-labelledby="quicksearch-tab">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-collapse-wrap form">
                            <div class="mt-3">
                                <form class="form-a" method="get" action="http://38.137.14.92:8003/rentaappartment/public/search-property">
                                    <div class="row mt-4">
                                        <div class="col-md-12">
                                            <div class="mt-3">
                                                <label for="addressInput">Address:</label>
                                                <input type="text" id="quicksearch"
                                                    class="form-control form-control-md" name="quicksearch"
                                                    placeholder="Quick Search">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-mid float-right">Search Property</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Radius Search -->
            <div class="tab-pane fade" id="radiussearch" role="tabpanel" aria-labelledby="raduissearch-tab">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-collapse-wrap form">
                            <div class="mt-3">
                                <form class="form-a" method="get" action="http://38.137.14.92:8003/rentaappartment/public/search-property">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="zip" checked>
                                        <label class="form-check-label font-weight-bold" for="inlineRadio1">Zip</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="address">
                                        <label class="form-check-label" for="inlineRadio2">Address</label>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-md-6">
                                            <div class="mt-3">
                                                <label for="addressInput">Zip:</label>
                                                <input type="text" id="addressInput" class="form-control mt-1"
                                                    name="addressInput" placeholder="Enter your address">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label for="addressInput">Radius:</label>
                                            <select class="form-select mt-1" aria-label="Default select example">
                                                <option selected value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="addressField" class="hidden mt-3">
                                                <label for="addressInput">Address:</label>
                                                <input type="text" id="addressInput" class="form-control"
                                                    name="addressInput" placeholder="Enter your address">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <button type="submit" class="btn btn-primary float-right mt-1"> Search </button> -->
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-mid float-right">Search
                                            Property</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Advance Search -->
            <div class="tab-pane fade" id="advancesearch" role="tabpanel" aria-labelledby="advance-search-tab">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-collapse-wrap form">
                            <div class="mt-3">
                                <form class="form-a" method="get" action="http://38.137.14.92:8003/rentaappartment/public/search-property">
                                    <div class="row mt-4">

                                        <div class="col-md-6">
                                            <div class="mt-3">
                                                <label for="addressInput">Keyword:</label>
                                                <input type="text" id="addressInput" class="form-control mt-1"
                                                    name="keyword" placeholder="Keyword">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mt-3">
                                                <label for="addressInput">Area:</label>
                                                <input type="text" id="addressInput" class="form-control mt-1"
                                                    name="area" placeholder="area">
                                            </div>
                                        </div>

                                        <div class="col-md-6 mt-3">
                                            <label for="addressInput">State:</label>
                                            <select class="form-control form-select form-control-a" id="state"
                                                name="state">
                                                <option>All Type</option>
                                                <option value="6">Colorado</option>
                                                <option value="113">California</option>
                                                <option value="119">asdsad</option>
                                                <option value="120">ewrewr</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 mt-3">
                                            <label for="addressInput">City:</label>
                                            <select class="form-control form-select form-control-a" id="city"
                                                name="city">
                                                <option>All City</option>
                                                <option value="1">Arvada</option>
                                                <option value="3">Aurora</option>
                                                <option value="6">Boulder</option>
                                                <option value="8">Brighton</option>
                                                <option value="9">Broomfield</option>
                                                <option value="11">Castle Rock</option>
                                                <option value="12">Centennial</option>
                                                <option value="17">Colorado Springs</option>
                                                <option value="19">Commerce City</option>
                                                <option value="23">Denver</option>
                                                <option value="29">Englewood</option>
                                                <option value="33">Federal Heights</option>
                                                <option value="34">Fort Collins</option>
                                                <option value="40">Glendale</option>
                                                <option value="42">Golden</option>
                                                <option value="45">Greeley</option>
                                                <option value="47">Greenwood Village</option>
                                                <option value="55">Lakewood</option>
                                                <option value="59">Littleton</option>
                                                <option value="60">Lone Tree</option>
                                                <option value="61">Longmont</option>
                                                <option value="62">Louisville</option>
                                                <option value="63">Loveland</option>
                                                <option value="69">Northglenn</option>
                                                <option value="72">Parker</option>
                                                <option value="73">Pueblo</option>
                                                <option value="76">Sheridan</option>
                                                <option value="81">Superior</option>
                                                <option value="83">Thornton</option>
                                                <option value="86">Westminster</option>
                                                <option value="87">Wheat Ridge</option>
                                                <option value="140">Bayonne</option>
                                                <option value="141">Brick Township</option>
                                                <option value="142">Camden</option>
                                                <option value="143">Cherry Hill Township</option>
                                                <option value="144">Cliffside Park</option>
                                                <option value="145">Clifton</option>
                                                <option value="146">East Orange</option>
                                                <option value="147">Edgewater</option>
                                                <option value="148">Edison Township</option>
                                                <option value="149">Elizabeth</option>
                                                <option value="150">Fort Lee</option>
                                                <option value="151">Franklin Township</option>
                                                <option value="152">Gloucester Township</option>
                                                <option value="153">Hamilton Township</option>
                                                <option value="154">Hoboken</option>
                                                <option value="155">Irvington</option>
                                                <option value="156">Jersey City</option>
                                                <option value="157">Lakewood Township</option>
                                                <option value="158">Middletown Township</option>
                                                <option value="159">Newark</option>
                                                <option value="160">North Bergen</option>
                                                <option value="161">Old Bridge Township</option>
                                                <option value="162">Parsippany</option>
                                                <option value="163">Passaic</option>
                                                <option value="164">Paterson</option>
                                                <option value="165">Piscataway Township</option>
                                                <option value="166">Toms River Township</option>
                                                <option value="167">Trenton</option>
                                                <option value="168">Union City</option>
                                                <option value="169">Vineland</option>
                                                <option value="170">Wayne Township</option>
                                                <option value="171">Weehawken</option>
                                                <option value="172">West New York</option>
                                                <option value="173">Woodbridge Township</option>
                                                <option value="174">Highlands Ranch</option>
                                                <option value="175">Henderson</option>
                                                <option value="182">Minneapolis</option>
                                                <option value="183">St. Paul</option>
                                                <option value="190">Durango</option>
                                                <option value="222">Morrison</option>
                                                <option value="224">Lafayette</option>
                                                <option value="234">Cincinnati</option>
                                                <option value="236">Bloomington</option>
                                                <option value="237">Shakopee</option>
                                                <option value="238">Eagan</option>
                                                <option value="239">Albertville</option>
                                                <option value="240">Anoka</option>
                                                <option value="241">Blaine</option>
                                                <option value="242">Brooklyn Park</option>
                                                <option value="243">Burnsville</option>
                                                <option value="244">Champlin</option>
                                                <option value="245">Coon Rapids</option>
                                                <option value="246">Eau Claire</option>
                                                <option value="247">Eden Prairie</option>
                                                <option value="248">Elk River</option>
                                                <option value="249">Ellsworth</option>
                                                <option value="250">Hudson</option>
                                                <option value="251">Inner Grove Heights</option>
                                                <option value="252">Lino Lakes</option>
                                                <option value="253">Little Canada</option>
                                                <option value="254">Maplewood</option>
                                                <option value="255">Minnetonka</option>
                                                <option value="256">New Brighton</option>
                                                <option value="257">New Prague</option>
                                                <option value="258">New Richmond</option>
                                                <option value="259">Oakdale</option>
                                                <option value="260">Plymouth</option>
                                                <option value="261">St. Anthony</option>
                                                <option value="262">St. Louis Park</option>
                                                <option value="263">Stillwater</option>
                                                <option value="265">Waconia</option>
                                                <option value="266">White Bear Lake</option>
                                                <option value="267">Winthrop</option>
                                                <option value="268">Woodbury</option>
                                                <option value="269">Young America</option>
                                                <option value="270">Hopkins</option>
                                                <option value="287">Smyrna</option>
                                                <option value="298">Douglasville</option>
                                                <option value="351">Los Angeles</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mt-3">
                                                <label for="addressInput">Zip:</label>
                                                <input type="text" id="addressInput" class="form-control mt-1"
                                                    name="addressInput" placeholder="Enter your address">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mt-3">
                                                <label for="addressInput">Managed By:</label>
                                                <input type="text" id="manageby" class="form-control mt-1"
                                                    name="manageby" placeholder="Managed By">
                                            </div>
                                        </div>

                                        <div class="col-md-12 mt-3">
                                            <label for="addressInput">Price Range:</label>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <input type="text" id="addressInput" class="form-control"
                                                        name="addressInput" placeholder="From">
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="addressInput">and</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" id="addressInput" class="form-control"
                                                        name="addressInput" placeholder="To">
                                                </div>
                                            </div>
                                            <div id="addressField" class="mt-3">

                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <label for="addressInput">Beds:</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Studio- 1 Bedroom
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            2 Bedroom Den - 3 Bedroom
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            1 Bedroom Den - 2 Bedroom
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            3 Bedroom Den - 4 Bedroom
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            5 Bedroom
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            ALL
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Please show only communities with photos.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-mid float-right">Search
                                                Property</button>
                                        </div>
                                    </div>
                                </form>

                                <form class="form-a" method="get" action="http://38.137.14.92:8003/rentaappartment/public/search-property">
                                    <div class="row mt-4">
                                        <div class="col-md-12 mt-3">
                                            <label for="addressInput">Pet Policy:</label>
                                            <select class="form-control form-select form-control-a" id="state"
                                                name="state">
                                                <option>All Type</option>
                                                <option value="6">Colorado</option>
                                                <option value="113">California</option>
                                                <option value="119">asdsad</option>
                                                <option value="120">ewrewr</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <label for="addressInput">Community Services & Amenities:</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Studio- 1 Bedroom
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            2 Bedroom Den - 3 Bedroom
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            1 Bedroom Den - 2 Bedroom
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            3 Bedroom Den - 4 Bedroom
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            5 Bedroom
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            ALL
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Please show only communities with photos.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <label for="addressInput">Apartment Home Features:</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Studio- 1 Bedroom
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            2 Bedroom Den - 3 Bedroom
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            1 Bedroom Den - 2 Bedroom
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            3 Bedroom Den - 4 Bedroom
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            5 Bedroom
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            ALL
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Please show only communities with photos.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <label for="addressInput">Year Built:</label>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <input type="text" id="addressInput" class="form-control"
                                                        name="addressInput" placeholder="From">
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="addressInput">and</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" id="addressInput" class="form-control"
                                                        name="addressInput" placeholder="To">
                                                </div>
                                            </div>
                                            <div id="addressField" class="mt-3">

                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <label for="addressInput">Year Remodeled:</label>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <input type="text" id="addressInput" class="form-control"
                                                        name="addressInput" placeholder="From">
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="addressInput">and</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" id="addressInput" class="form-control"
                                                        name="addressInput" placeholder="To">
                                                </div>
                                            </div>
                                            <div id="addressField" class="mt-3">

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-mid float-right">Search
                                                Property</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <style>
            label {
                margin-bottom: 5px;
            }

            .notification-anchor:hover {
                color: #2eca6a !important;
            }

            .unread {
                background: #f3f3f3 !important;
            }

            .seen {
                background: #d3d3d36e;
            }

            /* #eye-icon{
        color: #2eca6a !important
        font-size:1rem !important;
    } */
            .notification-li-bottom {
                display: flex !important;
                justify-content: space-between !important;
            }

            .notification-li-bottom .eye-icon {
                color: #2eca6a !important;
                font-size: 1rem !important;
            }

            .dropdown__wrapper {
                width: 16rem;
                top: 5.25rem;
                right: 7rem;
                padding: 1rem;
                position: absolute;
                border-radius: 0.75rem;
                background: white;
                display: flex;
                flex-direction: column;
                color: #1F1F21;
                gap: 0.25rem;
                animation: fadeOutAnimation ease-in-out 0.3s forwards;
            }

            .dropdown__wrapper h2 {
                font-size: 1.15rem;
            }

            .dropdown__wrapper--fade-in {
                animation: fadeInAnimation ease-in-out 0.3s forwards;
            }

            .dropdown__wrapper nav>ul {
                list-style-type: none;
                padding: 0;
                margin: 0;
                gap: 0.25rem;
            }

            .dropdown__wrapper nav>ul>li>a {
                height: 3rem;
                color: #9D9D9E;
                cursor: pointer;
                display: flex;
                flex-direction: row;
                border-radius: 0.5rem;
                align-items: center;
                gap: 1rem;
                padding-left: 0.5rem;
                width: 100%;
                font-weight: bold;
                transition: all 0.2s ease-in-out;
            }

            .dropdown__wrapper nav>ul>li>a:hover {
                background: #353537;
                color: #FFF;
            }

            .dropdown__wrapper nav>ul>li>a>svg {
                stroke: #9D9D9E;
                height: 1.75rem;
                width: 1.75rem;
            }

            .dropdown__wrapper nav>ul>li>a> :hover>svg {
                stroke: #1F1F21;
                color: white;
            }
        </style>
        <section id="wsus__topbar">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-7 d-none d-md-block">
                        <ul class="wsus__topbar_left">
                            <li><a href="mailto:demo@mailinator.com"><i class="fal fa-envelope"></i>
                                    demo@mailinator.com</a></li>
                            <li><a href="callto:01128473201"><i
                                        class="fal fa-phone-alt"></i>01128473201</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-6 col-md-5">
                        <ul class="wsus__topbar_left float-right">
                            <li class="">
                                <a href="" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                                    <i class="bi bi-search"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>






        <nav class="navbar navbar-expand-lg main_menu">
            <div class="container">
                <a class="navbar-brand" href="http://38.137.14.92:8003/rentaappartment/public">
                    <img src="http://38.137.14.92:8003/rentaappartment/public/site_images/logo/logovitalg.png" alt="DB.Card" class="logo-img">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="far fa-bars" aria-hidden="true"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">


                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active"
                                aria-current="page" href="/">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link "
                                aria-current="page" href="favorite/list-view">Favorites</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link "
                                aria-current="page" href="/list-properties">Properties</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link "
                                aria-current="page" href="/contact-us">Contact Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link "
                                aria-current="page" href="/about">About Us</a>
                        </li>

                    </ul>



                    <div class="navbar-right-section">

                        <div class="notification-container">

                            <div class="notifications dropdown" onclick="toggleNotifications()">
                                <span class="count" id="notifications-count">0</span>
                                <i class="bi bi-bell f-sz15"></i>
                            </div>

                            <div class="dropdown-menu" id="notification-dropdown">
                                <div class="dropdown-body">
                                    <div class="dropdown-menu-header">
                                        <h6 class="dropdown-menu-title">Notifications</h6>
                                        <div>
                                            <a href="javascript:void(0)" class="notification-anchor" id="markedAllAsRead"
                                                data-user-id="29253"
                                                onclick="markAllNotificationsAsSeen(this)">Mark All as Read</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-list" id="notification-list">
                                        <a href="javascript:void(0)"
                                            class="dropdown-link seen">
                                            <div class="media d-flex">
                                                <img src="http://38.137.14.92:8003/rentaappartment/public/uploads/profile_pics/manager_29253_1729580644.png"
                                                    alt="">
                                                <div class="media-body">
                                                    <p><strong>Administrator</strong> has Changed Your Property to Active </p>
                                                    <span
                                                        class="d-flex justify-content-between notification-li-bottom">
                                                        <span>06:06 PM</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="dropdown-link seen">
                                            <div class="media d-flex">
                                                <img src="http://38.137.14.92:8003/rentaappartment/public/uploads/profile_pics/manager_29253_1729580644.png"
                                                    alt="">
                                                <div class="media-body">
                                                    <p><strong>Administrator</strong> has Changed Your Property to Inactive </p>
                                                    <span
                                                        class="d-flex justify-content-between notification-li-bottom">
                                                        <span>05:17 PM</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="dropdown-link seen">
                                            <div class="media d-flex">
                                                <img src="http://38.137.14.92:8003/rentaappartment/public/uploads/profile_pics/manager_29253_1729580644.png"
                                                    alt="">
                                                <div class="media-body">
                                                    <p><strong>Administrator</strong> has Changed Your Property to Active </p>
                                                    <span
                                                        class="d-flex justify-content-between notification-li-bottom">
                                                        <span>04:39 PM</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <a href="javascript:void(0)" class="profile" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <div class="img-box">
                                <img src="http://38.137.14.92:8003/rentaappartment/public/uploads/profile_pics/manager_29253_1729580644.png"
                                    alt="img" class="img-fluid">
                            </div>
                        </a>

                        <div class="dropdown__wrapper hide dropdown__wrapper--fade-in none menu">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="http://38.137.14.92:8003/rentaappartment/public/dashboard" class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-user-circle">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                                <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                                            </svg>
                                            Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://38.137.14.92:8003/rentaappartment/public/change-password">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-settings">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                                                <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                            </svg>
                                            Change Password
                                        </a>

                                    </li>
                                </ul>
                                <hr class="divider">
                                <ul>
                                    <li>
                                        <a href="http://38.137.14.92:8003/rentaappartment/public/logout">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-logout-2">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M10 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2" />
                                                <path d="M15 12h-12l3 -3" />
                                                <path d="M6 15l-3 -3" />
                                            </svg>
                                            Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
        </nav>

        <nav class="navbar navbar-expand-lg main_menu">
            <div class="container">
                <!-- Left side: Logo and Links -->
                <a class="navbar-brand" href="#">
                    <img src="http://38.137.14.92:8003/rentaappartment/public/site_images/logo/logovitalg.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Favorites</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Properties</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Logos</a>
                        </li>
                    </ul>
                </div>

                <!-- Right side: Notification Icon and Profile Menu -->
                <ul class="navbar-nav ms-auto">
                    <!-- Notification Bell Icon -->
                    <li class="nav-item dropdown">
                        <a class="nav-link position-relative" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-bell fs-5"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span>
                        </a>
                        <!-- <ul class="dropdown-menu dropdown-menu-end dropdown-menu-notifications" aria-labelledby="notificationDropdown">
                            <li class="notification-item">New comment on your post</li>
                            <li class="notification-item">Your profile was viewed</li>
                            <li class="notification-item">You have a new message</li>
                            <li class="notification-item text-center"><a href="#">View all notifications</a></li>
                        </ul> -->
                        <div class="dropdown-menu" id="notification-dropdown">
                                <div class="dropdown-body">
                                    <div class="dropdown-menu-header">
                                        <h6 class="dropdown-menu-title">Notifications</h6>
                                        <div>
                                            <a href="javascript:void(0)" class="notification-anchor" id="markedAllAsRead"
                                                data-user-id="29253"
                                                onclick="markAllNotificationsAsSeen(this)">Mark All as Read</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-list" id="notification-list">
                                        <a href="javascript:void(0)"
                                            class="dropdown-link seen">
                                            <div class="media d-flex">
                                                <img src="http://38.137.14.92:8003/rentaappartment/public/uploads/profile_pics/manager_29253_1729580644.png"
                                                    alt="">
                                                <div class="media-body">
                                                    <p><strong>Administrator</strong> has Changed Your Property to Active </p>
                                                    <span
                                                        class="d-flex justify-content-between notification-li-bottom">
                                                        <span>06:06 PM</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="dropdown-link seen">
                                            <div class="media d-flex">
                                                <img src="http://38.137.14.92:8003/rentaappartment/public/uploads/profile_pics/manager_29253_1729580644.png"
                                                    alt="">
                                                <div class="media-body">
                                                    <p><strong>Administrator</strong> has Changed Your Property to Inactive </p>
                                                    <span
                                                        class="d-flex justify-content-between notification-li-bottom">
                                                        <span>05:17 PM</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="dropdown-link seen">
                                            <div class="media d-flex">
                                                <img src="http://38.137.14.92:8003/rentaappartment/public/uploads/profile_pics/manager_29253_1729580644.png"
                                                    alt="">
                                                <div class="media-body">
                                                    <p><strong>Administrator</strong> has Changed Your Property to Active </p>
                                                    <span
                                                        class="d-flex justify-content-between notification-li-bottom">
                                                        <span>04:39 PM</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    </li>

                    <!-- Profile Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="profile.jpg" alt="Profile Image" class="profile-img me-2"> User Name
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Dashboard</a></li>
                            <li><a class="dropdown-item" href="#">Change Password</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        

        <script>
            let hasUserInteracted = false;


            document.addEventListener('DOMContentLoaded', function() {
                let profile = document.querySelector('.profile');
                let menu = document.querySelector('.menu');
                profile.onclick = function() {
                    menu.classList.toggle('active');
                }
            });

            function toggleNotifications() {
                const dropdown = document.getElementById('notification-dropdown');
                dropdown.classList.toggle('show');
            }

            const userid = 29253
            if (userid) {
                document.addEventListener('DOMContentLoaded', function() {
                    if (window.Echo) {
                        window.Echo.private(`adminNotification.${userid}`)
                            .listen('.NotificationEvent', (e) => {
                                const counterElement = document.getElementById('notifications-count');
                                const notificationList = document.getElementById('notification-list');
                                const newNotification = document.createElement('a');
                                let currentCount = parseInt(counterElement.textContent) || 0;
                                let url = "http://38.137.14.92:8003/rentaappartment/public/referred-renter";

                                counterElement.textContent = currentCount + 1;
                                newNotification.href = e.notification.url || 'javascript:void(0)';
                                newNotification.className = 'dropdown-link';

                                newNotification.innerHTML = `
                            <a href="${url}">
                                <div class="media d-flex">
                                    <img src="http://38.137.14.92:8003/rentaappartment/public/admin_asset/upload_pics/${e.notification.image}" alt="">
                                    <div class="media-body">
                                        <p>${e.notification.message}</p>
                                        <span>Just Now</span>
                                    </div>
                                </div>
                            </a>`;
                                notificationList.prepend(newNotification);
                                $('#notificationsyet').hide();
                                hasUserInteracted = true;

                                var button = document.getElementsByTagName("button")[0];
                                if (button) {
                                    button.addEventListener("click", ding);
                                } else {
                                    console.error("Button not found!");
                                }
                            });

                    }
                });
            }

            function markVisibleNotificationsAsSeen(e) {
                const notificationid = e.dataset.userId;
                $.ajax({
                    url: "http://38.137.14.92:8003/rentaappartment/public/marked-as-seen",
                    type: "POST",
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                    data: {
                        notificationId: notificationid,
                    },
                    success: function(response) {
                        if (response.message) {
                            toastr.success(response.message);
                        }
                    },
                    error: function(xhr) {
                        if (response.message) {
                            toastr.error(response.error);
                        }
                    },
                });
            }

            function markAllNotificationsAsSeen(e) {
                const userId = e.dataset.userId;
                $.ajax({
                    url: "http://38.137.14.92:8003/rentaappartment/public/marked-all-as-read",
                    type: "POST",
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                    success: function(response) {
                        if (response.message) {
                            toastr.success(response.message);
                        }
                    },
                    error: function(xhr) {
                        if (response.message) {
                            toastr.error(response.error);
                        }
                    },
                });
            }

            function ding() {
                var sound = new Audio("sound/notificationsound.mp3");
                sound.play();
            }
        </script>
        <main id="main">
            <div class="container-fluid slider-header bg-white p-0">
                <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                    <div class="col-md-6 px-5">
                        <h1 class="display-5 animated fadeIn mb-4 py-2">
                            Find A <span class="text-lg color-text1" style="font-size:3.8rem;">Perfect Home</span> To Live With
                            Your Family
                        </h1>

                    </div>
                    <div class="col-md-6 animated fadeIn">
                        <div class="owl-carousel header-carousel">
                            <div class="owl-carousel-item">
                                <img src="https://rentapartment.s3.ap-southeast-2.amazonaws.com/Slider/slider_images/EGtRwlzECaffCVWgsV0q9WcfhW7mj4zQlas2JD95.jpg" alt="Testing Text"
                                    style="object-fit:cover;height:450px;" />
                            </div>
                            <div class="owl-carousel-item">
                                <img src="https://rentapartment.s3.ap-southeast-2.amazonaws.com/Slider/slider_images/a2oPZj1GWNfwXjL9B1ugGxFieg0gUh7O5Bd5uH4I.jpg" alt="Testing Text"
                                    style="object-fit:cover;height:450px;" />
                            </div>
                            <div class="owl-carousel-item">
                                <img src="https://rentapartment.s3.ap-southeast-2.amazonaws.com/Slider/slider_images/LuGskg8ghpg37EJTkOIvR3ysR4IztteTCMQ2yG7c.jpg" alt="Testing Text"
                                    style="object-fit:cover;height:450px;" />
                            </div>
                            <div class="owl-carousel-item">
                                <img src="https://rentapartment.s3.ap-southeast-2.amazonaws.com/Slider/slider_images/zH9RSSN49fRiqV4jL8cVk0iiFSnI4qhRNN6rUaKH.png" alt="Testing Text"
                                    style="object-fit:cover;height:450px;" />
                            </div>
                        </div>
                    </div>
                </div>






            </div>

            <section id="wsus__features">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 m-auto">
                            <div class="wsus__heading_area">
                                <h2>Our Features</h2>
                                <p>Lorem ipsum dolor sit amet, qui assum oblique praesent te. Quo ei erant essent scaevola estut clita dolorem ei est mazim fuisset scribentur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="wsus__feature_single ">
                                <div class="icon">
                                    <i class="fas fa-list"></i>
                                </div>
                                <h5>Choose a Category</h5>
                                <p>Proin dapibus nisl ornare diam varius mpus. Aenean a quam luctus, finibus tellus ut, convallis eros.</p>
                                <span>1</span>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="wsus__feature_single ">
                                <div class="icon">
                                    <i class="fas fa-location-arrow"></i>
                                </div>
                                <h5>Find Location</h5>
                                <p>Proin dapibus nisl ornare diam varius mpus. Aenean a quam luctus, finibus tellus ut, convallis eros.</p>
                                <span>2</span>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="wsus__feature_single ">
                                <div class="icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <h5>Contact a Few Owners</h5>
                                <p>Proin dapibus nisl ornare diam varius mpus. Aenean a quam luctus, finibus tellus ut, convallis eros.</p>
                                <span>3</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <div class="container">
                <div class="row text-white">
                    <div class="col-xl-4 col-sm-12 col-md-6 col-lg-6">
                        <div class="footer_text">
                            <h3>About Us</h3>
                            <p>Quia exercitation mi</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-md-6 col-lg-6">
                        <div class="footer_text">
                            <h3>My Account</h3>
                            <ul class="footer_link">
                                <li><a href="/register"><i class="far fa-chevron-double-right"></i> Register</a></li>
                                <li><a href="/login"><i class="far fa-chevron-double-right"></i> Login</a></li>
                                <li><a href="/forgot-password"><i class="far fa-chevron-double-right"></i> Forget Password</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-md-3 col-lg-3">
                        <div class="footer_text">
                            <h3>Helpful Links</h3>
                            <ul class="footer_link">
                                <li><a href="/contact"><i class="far fa-chevron-double-right"></i> Contact Us</a></li>
                                <li><a href="/terms-and-condition"><i class="far fa-chevron-double-right"></i> Terms and Conditions</a></li>
                                <li><a href="/privacy-policy"><i class="far fa-chevron-double-right"></i> Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-xl-3 col-sm-6 col-md-6 col-lg-6">
                        <div class="footer_text footer_contact">
                            <h3>Information</h3>
                            <ul class="footer_link">
                                <li>
                                    <p><i class="far fa-map-marker-alt"></i> kyfojodah@mailinator.com</p>
                                </li>
                                <li><a href="#"><a href="mailto:jinapu@mailinator.com"><i class="fal fa-envelope"></i>
                                            jinapu@mailinator.com</a></li>
                                <li><a href="#"><a href="callto:tenymaziz@mailinator.com"><i
                                                class="fal fa-phone-alt"></i>
                                            tenymaziz@mailinator.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-md-5">
                            <p>pozecyxo@mailinator.com</p>
                        </div>
                        <div class="col-xl-6 col-md-7">
                            <ul class="footer_bottom_link">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="http://38.137.14.92:8003/rentaappartment/public/user_asset/vendor/jquery/jquery3.min.js"></script>
        <script src="http://38.137.14.92:8003/rentaappartment/public/user_asset/vendor/jquery/jquery-migrate.min.js"></script>
        <script src="http://38.137.14.92:8003/rentaappartment/public/user_asset/js/Font-Awesome.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <script src="http://38.137.14.92:8003/rentaappartment/public/user_asset/vendor/owlcarousel/owl.carousel.min.js"></script>

        <script src="http://38.137.14.92:8003/rentaappartment/public/user_asset/vendor/wow/wow.min.js"></script>
        <script src="http://38.137.14.92:8003/rentaappartment/public/user_asset/vendor/jquery.countup.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script src="http://38.137.14.92:8003/rentaappartment/public/user_asset/vendor/isotope/isotope.pkgd.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>

        <script src="http://38.137.14.92:8003/rentaappartment/public/user_asset/vendor/niceselect/jquery.nice-select.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>


        <script src="http://38.137.14.92:8003/rentaappartment/public/user_asset/js/frontendjs.js"></script>
        <script src="http://38.137.14.92:8003/rentaappartment/public/ajax/user/userAjax.js"></script>
    </div>
</body>

</html>