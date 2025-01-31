<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Denver Apartment Locator </title>
    <link rel="shortcut icon" type="image/x-icon" href="site_images/logo/favicon.ico">
    <meta name="csrf-token" content="FZq122sFLp8m4kqDcRf0LZPBYAktURl8pB7FqVfO">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://mycrm.rent/user_asset/vendor/bootstrap5/bootstrapupdated5.min.css ">
    <link rel="stylesheet" href="https://mycrm.rent/user_asset/vendor/select2/select2.min.css ">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://mycrm.rent/user_asset/vendor/aos/aos.css ">
    <link rel="stylesheet" href="https://mycrm.rent/user_asset/vendor/owlcarousel/owl.carousel.min.css ">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://mycrm.rent/user_asset/css/frontendstyle.css ">
    <link rel="stylesheet" href="https://mycrm.rent/user_asset/css/responsive.css ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <!-- Main CSS File -->
    <!-- <link href="{{asset('assets/css/main.css')}}" rel="stylesheet"> -->





    <style>
        :root {
            --colorPrimary: #0A5D4D;
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
                                <form class="form-a" method="get" action="https://mycrm.rent/search-property">
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
                                <form class="form-a" method="get" action="https://mycrm.rent/search-property">
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
                                <form class="form-a" method="get" action="https://mycrm.rent/search-property">
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

                                <form class="form-a" method="get" action="https://mycrm.rent/search-property">
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


            /*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
            .hero {
                padding: 0;
            }

            .hero .carousel {
                width: 100%;
                min-height: 100vh;
                padding: 0;
                margin: 0;
                background-color: var(--background-color);
                position: relative;
                overflow: hidden;
            }

            .hero img {
                position: absolute;
                inset: 0;
                display: block;
                width: 100%;
                height: 100%;
                object-fit: cover;
                z-index: 1;
            }

            .hero .carousel-item {
                position: absolute;
                inset: 0;
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                overflow: hidden;
            }

            .hero .carousel-item:before {
                content: "";
                background: color-mix(in srgb, var(--background-color), transparent 60%);
                position: absolute;
                inset: 0;
                z-index: 2;
            }

            .hero .carousel-container {
                position: absolute;
                inset: 90px 100px;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                z-index: 3;
            }

            @media (max-width: 575px) {
                .hero .carousel-container {
                    inset: 90px 50px;
                }
            }

            .hero h2 {
                margin-bottom: 30px;
                font-size: 56px;
                font-weight: 900;
                text-transform: uppercase;
            }

            .hero h2 span {
                color: var(--accent-color);
            }

            @media (max-width: 768px) {
                .hero h2 {
                    font-size: 30px;
                }
            }

            .hero .btn-get-started {
                color: var(--contrast-color);
                font-family: var(--heading-font);
                font-weight: 600;
                font-size: 18px;
                letter-spacing: 1px;
                text-transform: uppercase;
                display: inline-block;
                padding: 10px 40px;
                border-radius: 50px;
                transition: 0.5s;
                margin: 10px 0;
                align-self: flex-start;
                flex-shrink: 0;
                border: 2px solid var(--accent-color);
            }

            .hero .btn-get-started:hover {
                background: color-mix(in srgb, var(--accent-color), transparent 20%);
            }

            .hero .carousel-control-prev,
            .hero .carousel-control-next {
                width: 10%;
                transition: 0.3s;
                opacity: 0.5;
                z-index: 3;
            }

            .hero .carousel-control-prev:focus,
            .hero .carousel-control-next:focus {
                opacity: 0.5;
            }

            .hero .carousel-control-prev:hover,
            .hero .carousel-control-next:hover {
                opacity: 0.9;
            }

            @media (min-width: 1024px) {

                .hero .carousel-control-prev,
                .hero .carousel-control-next {
                    width: 5%;
                }
            }

            .hero .carousel-control-next-icon,
            .hero .carousel-control-prev-icon {
                background: none;
                font-size: 32px;
                line-height: 1;
            }

            .hero .carousel-indicators {
                list-style: none;
            }

            .hero .carousel-indicators li {
                cursor: pointer;
                opacity: 1;
                height: 6px;
                width: 20px;
                transition: 0.3s;
                padding: 0;
            }

            .hero .carousel-indicators .active {
                background-color: var(--accent-color);
                width: 40px;
            }
        </style>
        <section id="wsus__topbar">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-7 d-none d-md-block">
                        <ul class="wsus__topbar_left">
                            <li><a href="/cdn-cgi/l/email-protection#385a505d5f5459565c785f55595154165b5755"><i class="fal fa-envelope"></i>
                                    <span class="__cf_email__" data-cfemail="d4b6bcb1b3b8b5bab094b3b9b5bdb8fab7bbb9">[email&#160;protected]</span></a></li>
                            <li><a href="callto:7203635078"><i
                                        class="fal fa-phone-alt"></i>7203635078</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-6 col-md-5">
                        <ul class="wsus__topbar_left float-right gap-2">
                            <li>
                                <a href="https://mycrm.rent/login" class="btn btn-primary btn-sm px-4"><i
                                        class="bi bi-box-arrow-in-right"></i> Login</a>
                            </li>
                            <li>
                                <a href="https://mycrm.rent/register" class="btn btn-primary btn-sm px-4"><i
                                        class="bi bi-person-add"></i> Register </a>
                            </li>
                            <li>
                                <a href="https://mycrm.rent/advance-search" class="btn btn-secondary btn-sm px-4 ml-5"><i
                                        class="bi bi-search"></i> Advance Search</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>






        <nav class="navbar navbar-expand-lg main_menu">
            <div class="container">
                <a class="navbar-brand" href="https://mycrm.rent">
                    <img src="/site_images/logo/logovitalg.png" alt="DB.Card" class="logo-img">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="far fa-bars" aria-hidden="true"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="https://mycrm.rent">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page"
                                href="https://mycrm.rent/favorite/list-view">
                                Favorites
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page"
                                href="https://mycrm.rent/list-properties">
                                Properties
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page"
                                href="https://mycrm.rent/contact-us">
                                Contact Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page"
                                href="https://mycrm.rent/about">
                                About Us
                            </a>
                        </li>
                    </ul>

                    <div class="navbar-right-section">
                    </div>
                </div>
        </nav>





        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script>
            let hasUserInteracted = false;

            // document.addEventListener('DOMContentLoaded', function() {
            //     let profile = document.querySelector('.profile');
            //     let menu = document.querySelector('.menu');
            //     profile.onclick = function() {
            //         menu.classList.toggle('active');
            //     }
            // });

            // function toggleNotifications() {
            //     const dropdown = document.getElementById('notification-dropdown');
            //     dropdown.classList.toggle('show');
            // }


            document.addEventListener('DOMContentLoaded', function() {
                let profile = document.querySelector('.profile');
                let menu = document.querySelector('.menu');
                let notificationDropdown = document.getElementById('notification-dropdown');

                profile.onclick = function() {
                    menu.classList.toggle('active');

                    // Ensure the 'show' class is removed if 'active' is toggled on
                    if (menu.classList.contains('active')) {
                        notificationDropdown.classList.remove('show');
                    }
                };
            });

            function toggleNotifications() {
                const dropdown = document.getElementById('notification-dropdown');
                dropdown.classList.toggle('show');

                // Ensure the 'active' class is removed if 'show' is toggled on
                if (dropdown.classList.contains('show')) {
                    const menu = document.querySelector('.menu');
                    menu.classList.remove('active');
                }
            }


            const userid =
                if (userid) {
                    document.addEventListener('DOMContentLoaded', function() {
                        if (window.Echo) {
                            window.Echo.private(`adminNotification.${userid}`)
                                .listen('.NotificationEvent', (e) => {
                                    const counterElement = document.getElementById('notifications-count');
                                    const notificationList = document.getElementById('notification-list');
                                    const newNotification = document.createElement('a');
                                    let currentCount = parseInt(counterElement.textContent) || 0;
                                    let url = "https://mycrm.rent/referred-renter";

                                    counterElement.textContent = currentCount + 1;
                                    newNotification.href = e.notification.url || 'javascript:void(0)';
                                    newNotification.className = 'dropdown-link';

                                    newNotification.innerHTML = `
                            <a href="${url}">
                                <div class="media d-flex">
                                    <img src="/admin_asset/upload_pics/${e.notification.image}" alt="">
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
                    url: "https://mycrm.rent/marked-as-seen",
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
                    url: "https://mycrm.rent/marked-all-as-read",
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
            <!-- <div class="container-fluid slider-header bg-white p-0">
                <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                    <div class="col-md-6 px-5">
                        <h1 class="display-5 animated fadeIn mb-4 py-2">
                            Find A <span class="text-lg color-text1" style="font-size:3.8rem;">Perfect Home</span> To Live With
                            Your Family
                        </h1>

                        <a href="https://mycrm.rent/login" class="main-btn">Get Started</a>
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
            </div> -->


            <section id="hero" class="hero section dark-background">

                <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

                    <div class="carousel-item active">
                        <img src="https://rentapartment.s3.ap-southeast-2.amazonaws.com/Slider/slider_images/EGtRwlzECaffCVWgsV0q9WcfhW7mj4zQlas2JD95.jpg" alt="">
                        <div class="carousel-container">
                            <div>
                                <p>Doral, Florida</p>
                                <h2><span>204</span> Olive Road Two</h2>
                                <a href="property-single.html" class="btn-get-started">rent | $ 12.000</a>
                            </div>
                        </div>
                    </div><!-- End Carousel Item -->

                    <div class="carousel-item">
                        <img src="https://rentapartment.s3.ap-southeast-2.amazonaws.com/Slider/slider_images/a2oPZj1GWNfwXjL9B1ugGxFieg0gUh7O5Bd5uH4I.jpg" alt="">
                        <div class="carousel-container">
                            <div>
                                <p>Doral, Florida</p>
                                <h2><span>247</span> Venda Road Five</h2>
                                <a href="property-single.html" class="btn-get-started">sale | $ 356.000</a>
                            </div>
                        </div>
                    </div><!-- End Carousel Item -->

                    <div class="carousel-item">
                        <img src="https://rentapartment.s3.ap-southeast-2.amazonaws.com/Slider/slider_images/zH9RSSN49fRiqV4jL8cVk0iiFSnI4qhRNN6rUaKH.png" alt="">
                        <div class="carousel-container">
                            <div>
                                <p>Doral, Florida</p>
                                <h2><span>247</span> Vitra Road three</h2>
                                <a href="property-single.html" class="btn-get-started">rent | $ 3.000</a>
                            </div>
                        </div>
                    </div><!-- End Carousel Item -->

                    <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                    </a>

                    <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                    </a>

                    <ol class="carousel-indicators"></ol>

                </div>

            </section>

            <script>
                document.querySelectorAll('.carousel-indicators').forEach((carouselIndicator) => {
                    carouselIndicator.closest('.carousel').querySelectorAll('.carousel-item').forEach((carouselItem, index) => {
                        if (index === 0) {
                            carouselIndicator.innerHTML += `<li data-bs-target="#${carouselIndicator.closest('.carousel').id}" data-bs-slide-to="${index}" class="active"></li>`;
                        } else {
                            carouselIndicator.innerHTML += `<li data-bs-target="#${carouselIndicator.closest('.carousel').id}" data-bs-slide-to="${index}"></li>`;
                        }
                    });
                });
            </script>

            <section id="wsus__features">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 m-auto">
                            <div class="wsus__heading_area">
                                <h2>Our Features</h2>
                                <p>Lorem ipsum dolor sit amet, qui assum oblique praesent te. Quo ei erant essent scaevola estut clita</p>
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

            <section id="wsus__counter"
                style="background: url(/site_images/counter_bg.jpg);background-position: center;
        background-size: cover;
        background-repeat: no-repeat;">
                <div class="wsus__counter_overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-6 col-md-3">
                                <div class="wsus__counter_single">
                                    <i class="fa-solid fa-people-group"></i>
                                    <span class="counter">39</span>
                                    <p>Our Team</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-6 col-md-3">
                                <div class="wsus__counter_single">
                                    <i class="fa-brands fa-renren"></i>
                                    <span class="counter">118923</span>
                                    <p>Total Renters</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-6 col-md-3">
                                <div class="wsus__counter_single">
                                    <i class="fa-solid fa-people-roof"></i>
                                    <span class="counter">1928</span>
                                    <p>Total Managers</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-6 col-md-3">
                                <div class="wsus__counter_single">
                                    <i class="fa-solid fa-house-user"></i>
                                    <span class="counter">1143</span>
                                    <p>Total Properties</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="wsus__properties">
                <div class="container">

                    <div class="row">
                        <div class="col-xl-5 m-auto">
                            <div class="wsus__heading_area">
                                <h2>Our Featured Listing</h2>
                                <p>Lorem ipsum dolor sit amet, qui assum oblique praesent te. Quo ei erant essent scaevola estut clita dolorem ei est mazim fuisset scribentur.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row g-4">
                        <div class="col-xl-3 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href="https://mycrm.rent/property-display/2576">

                                        <img class="grid-property-img" src="/img/no-img.jpg"
                                            alt="Default Image">
                                    </a>
                                </div>
                                <div class="px-1 py-4 pb-2 px-3">
                                    <a class="d-block h5 mb-2 list-property-name"
                                        href="https://mycrm.rent/property-display/2576">Alea Rollins</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href="https://mycrm.rent/property-display/2575">

                                        <img class="grid-property-img"
                                            src="https://rentapartment.s3.ap-southeast-2.amazonaws.com/Gallery/Property_2575/Original/Gallery_propertyimage_32063_2575.jpg"
                                            alt="Property Image">
                                    </a>
                                </div>
                                <div class="px-1 py-4 pb-2 px-3">
                                    <a class="d-block h5 mb-2 list-property-name"
                                        href="https://mycrm.rent/property-display/2575">Ignatius Richmond</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href="https://mycrm.rent/property-display/2486">

                                        <img class="grid-property-img"
                                            src="https://rentapartment.s3.ap-southeast-2.amazonaws.com/Gallery/Property_2486/Original/Gallery_propertyimage_31105_2486.jpg"
                                            alt="Property Image">
                                    </a>
                                </div>
                                <div class="px-1 py-4 pb-2 px-3">
                                    <a class="d-block h5 mb-2 list-property-name"
                                        href="https://mycrm.rent/property-display/2486">Novus Apartments</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href="https://mycrm.rent/property-display/2248">

                                        <img class="grid-property-img"
                                            src="https://rentapartment.s3.ap-southeast-2.amazonaws.com/Gallery/Property_2248/Original/Gallery_propertyimage_26623_2248.jpg"
                                            alt="Property Image">
                                    </a>
                                </div>
                                <div class="px-1 py-4 pb-2 px-3">
                                    <a class="d-block h5 mb-2 list-property-name"
                                        href="https://mycrm.rent/property-display/2248">Emery West Highland</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href="https://mycrm.rent/property-display/2190">

                                        <img class="grid-property-img"
                                            src="https://rentapartment.s3.ap-southeast-2.amazonaws.com/Gallery/Property_2190/Original/Gallery_propertyimage_25546_2190.jpg"
                                            alt="Property Image">
                                    </a>
                                </div>
                                <div class="px-1 py-4 pb-2 px-3">
                                    <a class="d-block h5 mb-2 list-property-name"
                                        href="https://mycrm.rent/property-display/2190">Dylan</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href="https://mycrm.rent/property-display/2187">

                                        <img class="grid-property-img"
                                            src="https://rentapartment.s3.ap-southeast-2.amazonaws.com/Gallery/Property_2187/Original/Gallery_propertyimage_25512_2187.jpg"
                                            alt="Property Image">
                                    </a>
                                </div>
                                <div class="px-1 py-4 pb-2 px-3">
                                    <a class="d-block h5 mb-2 list-property-name"
                                        href="https://mycrm.rent/property-display/2187">Clarion Park</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href="https://mycrm.rent/property-display/2144">

                                        <img class="grid-property-img"
                                            src="https://rentapartment.s3.ap-southeast-2.amazonaws.com/Gallery/Property_2144/Original/Gallery_propertyimage_24368_2144.jpg"
                                            alt="Property Image">
                                    </a>
                                </div>
                                <div class="px-1 py-4 pb-2 px-3">
                                    <a class="d-block h5 mb-2 list-property-name"
                                        href="https://mycrm.rent/property-display/2144">Westend</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href="https://mycrm.rent/property-display/2021">

                                        <img class="grid-property-img"
                                            src="https://rentapartment.s3.ap-southeast-2.amazonaws.com/Gallery/Property_2021/Original/Gallery_propertyimage_23247_2021.jpg"
                                            alt="Property Image">
                                    </a>
                                </div>
                                <div class="px-1 py-4 pb-2 px-3">
                                    <a class="d-block h5 mb-2 list-property-name"
                                        href="https://mycrm.rent/property-display/2021">Point 21 Urban Flats</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                            <a href="https://mycrm.rent/list-properties" class="main-btn py-2 px-4 float-center"> Browse More </a>
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
                                <li><a href="register"><i class="far fa-chevron-double-right"></i> Register</a></li>
                                <li><a href="login"><i class="far fa-chevron-double-right"></i> Login</a></li>
                                <li><a href="/forgot-password"><i class="far fa-chevron-double-right"></i> Forget Password</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-md-3 col-lg-3">
                        <div class="footer_text">
                            <h3>Helpful Links</h3>
                            <ul class="footer_link">
                                <li><a href="/privacy-promise"><i class="far fa-chevron-double-right"></i> Privacy Policy</a></li>
                                <li><a href="/equal-opportunity"><i class="far fa-chevron-double-right"></i> Equal Housing</a></li>
                                <li><a href="/manager-terms"><i class="far fa-chevron-double-right"></i> Manager Terms &amp; Conditions</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-xl-3 col-sm-6 col-md-6 col-lg-6">
                        <div class="footer_text footer_contact">
                            <h3>Information</h3>
                            <ul class="footer_link">
                                <li>
                                    <p><i class="far fa-map-marker-alt"></i> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a2c9dbc4cdc8cdc6c3cae2cfc3cbcecbccc3d6cdd08cc1cdcf">[email&#160;protected]</a></p>
                                </li>
                                <li><a href="#"><a href="/cdn-cgi/l/email-protection#9af0f3f4fbeaefdaf7fbf3f6f3f4fbeef5e8b4f9f5f7"><i class="fal fa-envelope"></i>
                                            <span class="__cf_email__" data-cfemail="3b5152555a4b4e7b565a525752555a4f544915585456">[email&#160;protected]</span></a></li>
                                <li><a href="#"><a href="callto:tenymaziz@mailinator.com"><i
                                                class="fal fa-phone-alt"></i>
                                            <span class="__cf_email__" data-cfemail="2e5a4b4057434f5447546e434f474247404f5a415c004d4143">[email&#160;protected]</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-md-5">
                            <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9dedf2e7f8fee4e5f2ddf0fcf4f1f4f3fce9f2efb3fef2f0">[email&#160;protected]</a></p>
                        </div>
                        <div class="col-xl-6 col-md-7">
                            <ul class="footer_bottom_link">
                                <li><a href="about"> About Us</a></li>
                                <li><a href="contact-us"> Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script data-cfasync="false" src="https://mycrm.rent/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="https://mycrm.rent/user_asset/vendor/jquery/jquery3.min.js"></script>
        <script src="https://mycrm.rent/user_asset/vendor/jquery/jquery-migrate.min.js"></script>
        <script src="https://mycrm.rent/user_asset/js/Font-Awesome.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://mycrm.rent/user_asset/vendor/owlcarousel/owl.carousel.min.js"></script>

        <script src="https://mycrm.rent/user_asset/vendor/wow/wow.min.js"></script>
        <script src="https://mycrm.rent/user_asset/vendor/jquery.countup.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script src="https://mycrm.rent/user_asset/vendor/isotope/isotope.pkgd.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>

        <script src="https://mycrm.rent/user_asset/vendor/niceselect/jquery.nice-select.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>


        <script src="https://mycrm.rent/user_asset/js/frontendjs.js"></script>
        <script src="https://mycrm.rent/ajax/user/userAjax.js"></script>
        <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>


    </div>
</body>

</html>