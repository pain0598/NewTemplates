<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="JJqy5Eb617BhGx7CJjxlJwXeg5Cgdethqg7dG5To">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> RentApartement | Auth </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://mycrm.rent/user_asset/vendor/bootstrap5/bootstrapupdated5.min.css ">
    <link rel="stylesheet" href="https://mycrm.rent/user_asset/vendor/ion.rangeSlider/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="https://mycrm.rent/user_asset/vendor/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css">
    <link rel="stylesheet" href="https://mycrm.rent/user_asset/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://mycrm.rent/user_asset/css/frontendstyle.css ">
    <link rel="stylesheet" href="https://mycrm.rent/user_asset/css/responsive.css ">


</head>

<body>
    <div class="overlay"></div>

    <style>
        .login-bg a {
            color: white;
        }

        .login-bg {
            background-image: url("https://mycrm.rent/img/login-bg.jpg");
            height: 100vh;
            align-content: center;
            align-items: center;
        }
    </style>


    <section id="login-section">
        <div class="container">
            <a href="https://mycrm.rent" class="btn back-home-btn"> <i class="bi bi-caret-left-fill"></i> Back to Home </a>
            <div class="row auth-section">
                <div class="col-lg-4 auth-row-col4 p-0">
                    <div class="title-containers">
                        <div class="login-left-img-block">
                            <div> <img src="/img/login-bg.jpg" alt=""></div>
                            <div class="brand-logo"><img class="logo-images" src="/img/logovitalg.png" width="250" height="100"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12 col-12">
                    <section class="wsus__login_page p-0">
                        <div class="container">
                            <div class="wsus__login_area">
                                <h2>Welcome !</h2>

                                <nav class="section-t3">
                                    <ul class="tabs">
                                        <li class="tab-li">
                                            <a href="#renterregister" class="tab-li__link"> Renter Registration </a>
                                        </li>

                                        <li class="tab-li">
                                            <a href="#managerregister" class="tab-li__link">Property Manager Registration </a>
                                        </li>

                                    </ul>
                                </nav>

                                <section id="renterregister" data-tab-content class="">
                                    <style>
                                        #q-box__buttons {
                                            display: flex;
                                            justify-content: flex-end;
                                            gap: 15px;
                                            margin-top: 20px;
                                        }

                                        #q-box__buttons button {
                                            padding: 10px 20px;
                                            font-size: 14px;
                                            border-radius: 5px;
                                            border: none;
                                            cursor: pointer;
                                        }

                                        .prev-btn {
                                            background-color: #007bff;
                                            color: white;
                                        }

                                        .next-btn {
                                            background-color: #6c757d;
                                            color: white;
                                        }

                                        .submit-btn {
                                            background-color: #28a745;
                                            color: white;
                                        }

                                        button:hover {
                                            opacity: 0.9;
                                            /* Add a hover effect */
                                        }
                                    </style>
                                    <div class="qbox-container">
                                        <form class="needs-validation" id="form-wrapper" name="form-wrapper" novalidate="">
                                            <!-- Step 1 -->
                                            <div class="step d-block">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mt-1">
                                                            <label class="form-label f-w700"><i class="fa-solid fa-user"
                                                                    style="color:var(--btn-color1);"></i>
                                                                Username <small style="color:red;">*</small></label>
                                                            <input class="form-control" id="username" name="username" type="text" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mt-3">
                                                            <label class="form-label f-w700"><i class="fa-solid fa-envelope"
                                                                    style="color:var(--btn-color1);"></i>
                                                                Email <small style="color:red;">*</small></label>
                                                            <input class="form-control" id="email" name="email" type="email" required>
                                                            <div class="invalid-feedback" id="error-email">Please enter a valid email.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mt-3">
                                                            <label class="form-label f-w700"><i class="fa-solid fa-key"
                                                                    style="color:var(--btn-color1);"></i>
                                                                Password <small style="color:red;">*</small></label>
                                                            <input class="form-control" id="password" name="password" type="password" required>
                                                            <div class="invalid-feedback" id="error-password">Please enter a password.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mt-3">
                                                            <label class="form-label f-w700"><i class="fa-solid fa-key"
                                                                    style="color:var(--btn-color1);"></i>
                                                                Confirm Password <small style="color:red;">*</small></label>
                                                            <input class="form-control" id="password_confirmation" name="password_confirmation"
                                                                type="password" required>
                                                            <div class="invalid-feedback" id="error-password_confirmation">Passwords do not match.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Step 2 -->
                                            <div class="step d-none">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mt-1">
                                                            <label class="form-label f-w700">
                                                                First Name <small style="color:red;">*</small></label>
                                                            <input class="form-control" id="firstname" name="firstname" type="text" required>
                                                            <div class="invalid-feedback" id="error-firstname"></div>
                                                            <div class="invalid-feedback" id="error-zip">First Name is Required </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mt-1">
                                                            <label class="form-label f-w700">
                                                                Last Name <small style="color:red;">*</small></label>
                                                            <input class="form-control" id="lastname" name="lastname" type="text">
                                                            <div class="invalid-feedback" id="error-lastname"></div>
                                                            <div class="invalid-feedback" id="error-zip">Last Name is Required </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mt-1">
                                                            <label class="form-label"><i class="fa-solid fa-user" style="color:var(--btn-color1);"></i> Zip
                                                                <small style="color:red;">*</small></label>
                                                            <input class="form-control" id="zip" name="zip" type="text" pattern="\d*"
                                                                required>
                                                            <div class="invalid-feedback" id="error-zip">Please enter a valid zip code.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mt-3">
                                                            <label class="form-label f-w700">
                                                                Cell<small style="color:red;">*</small> </label>
                                                            <input class="form-control" id="cell" name="cell" type="text">
                                                            <div class="invalid-feedback" id="error-cell"></div>
                                                        </div>
                                                    </div>




                                                    <div class="col-md-6">
                                                        <div class="mt-3">
                                                            <label class="form-label f-w700">Other Phone </label>
                                                            <input class="form-control" id="otherphone" name="otherphone" type="text">
                                                            <div class="invalid-feedback" id="error-otherphone"></div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="mt-3">
                                                            <label class="form-label f-w700">State
                                                                <small style="color:red;">*</small> </label>
                                                            <select class="form-control form-select form-control-a state-select-box" name="renterstate"
                                                                id="renterstate" required>
                                                                <option value="">Select State</option>
                                                                <option value="6">Colorado</option>
                                                                <option value="113">California</option>
                                                                <option value="119">asdsad</option>
                                                                <option value="120">ewrewr</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please select a state.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mt-3">
                                                            <label class="form-label f-w700">City
                                                                <small style="color:red;">*</small> </label>
                                                            <select class="form-control form-select form-control-a" id="rentercity" name="rentercity"
                                                                required>
                                                                <option value="">Select City</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please select a city.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mt-3">
                                                            <label class="form-label"><i class="fa-solid fa-key" style="color:var(--btn-color1);"></i>
                                                                Moving To
                                                                <small style="color:red;">*</small> </label>
                                                            <textarea rows="3" name="currentAddress" id="currentAddress" placeholder="Type your message"
                                                                class="formbold-form-input" required></textarea>
                                                            <div class="invalid-feedback">
                                                                This Field is Required .
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <!-- Step 3 -->
                                            <div class="step d-none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mt-1">
                                                            <label class="form-label f-w700">What area/neighborhoods are you wanting to move to </label>
                                                            <input class="form-control" id="aboutmovein" name="aboutmovein" type="text">
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mt-3">
                                                            <label for="dob" class="form-label f-w700"> Earliest Move Date </label>
                                                            <input type="date" name="earliestdate" id="earliestdate" class="form-control" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mt-3">
                                                            <label for="dob" class="form-label f-w700"> Latest Move Date </label>
                                                            <input type="date" name="latestdate" id="latestdate" class="form-control" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mt-3">
                                                            <label class="form-label f-w700">Pet Info </label>
                                                            <input class="form-control" id="petinfo" name="petinfo" type="text">
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mt-3">
                                                            <label class="form-label f-w700">Hear About </label>
                                                            <select class="form-control form-select form-control-a" id="source" name="source"
                                                                required>
                                                                <option value="">Source</option>
                                                                <option value="1">Google Search</option>
                                                                <option value="4">Friend</option>
                                                                <option value="5">Other</option>
                                                                <option value="7">Apartment Community</option>
                                                                <option value="8">Used us before</option>
                                                                <option value="10">Yahoo</option>
                                                                <option value="11">Yelp</option>
                                                                <option value="12">Employer</option>
                                                                <option value="13">Google Advertisement</option>
                                                                <option value="14">Chamber of Commerce</option>
                                                                <option value="17">facebook</option>
                                                                <option value="18">Online Reviews</option>
                                                                <option value="19">Realtor</option>
                                                                <option value="20">Drive By</option>
                                                                <option value="21">Zillow</option>
                                                                <option value="22">Hotpads</option>
                                                                <option value="23">Trulia</option>
                                                                <option value="24">Housing Agency</option>
                                                                <option value="25">Craigslist</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Step 4 -->
                                            <div class="step d-none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="css-ehvwec er0i63m2">
                                                            <div class="css-frayro er0i63m0 mt-2">
                                                                <h4> Select how many bedrooms you want. </h4>
                                                                <div class="selectbeds-div erdrl0c0 mt-3">
                                                                    <label class="css-17p3mg6 eyqmukb3">
                                                                        <input type="checkbox" name="bedrooms[]" value="1" aria-label="1 Bed"
                                                                            class="d-none" />
                                                                        <div aria-hidden="true" class="css-fmv2zp eyqmukb2">1</div>
                                                                        <div class="css-hh5vnd eyqmukb0">1 Bed</div>
                                                                    </label>
                                                                    <label class="css-17p3mg6 eyqmukb3">
                                                                        <input type="checkbox" name="bedrooms[]" value="2" aria-label="2 Bed"
                                                                            class="d-none" />
                                                                        <div aria-hidden="true" class="css-fmv2zp eyqmukb2">2</div>
                                                                        <div class="css-hh5vnd eyqmukb0">2 Beds</div>
                                                                    </label>
                                                                    <label class="css-17p3mg6 eyqmukb3">
                                                                        <input type="checkbox" name="bedrooms[]" value="3" aria-label="3 Beds"
                                                                            class="d-none" />
                                                                        <div aria-hidden="true" class="css-fmv2zp eyqmukb2">3</div>
                                                                        <div class="css-hh5vnd eyqmukb0">3 Beds</div>
                                                                    </label>
                                                                    <label class="css-17p3mg6 eyqmukb3">
                                                                        <input type="checkbox" name="bedrooms[]" value="4" aria-label="4 Beds"
                                                                            class="d-none" />
                                                                        <div aria-hidden="true" class="css-fmv2zp eyqmukb2">4</div>
                                                                        <div class="css-hh5vnd eyqmukb0">4 Beds</div>
                                                                    </label>
                                                                    <label class="css-17p3mg6 eyqmukb3">
                                                                        <input type="checkbox" name="bedrooms[]" value="5" aria-label="5+ Beds"
                                                                            class="d-none" />
                                                                        <div aria-hidden="true" class="css-fmv2zp eyqmukb2">5+</div>
                                                                        <div class="css-hh5vnd eyqmukb0">5+ Beds</div>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mt-4">
                                                            <h4> Additional Information. </h4>
                                                            <textarea class="form-control mt-3" id="additional_info" name="additional_info" rows="4"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="step d-none" id="step-5">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mt-4">
                                                            <label class="form-label">
                                                                <i class="fa-solid fa-bed" style="color:var(--btn-color1);"></i>
                                                                What are you looking to pay? <small style="color:red;">*</small>
                                                            </label>
                                                            <div class="css-ehvwec er0i63m2">
                                                                <div class="css-frayro er0i63m0">
                                                                    <div class="row">

                                                                        <div class="col-lg-6">
                                                                            <label for="price-from" class="form-label">From</label>
                                                                            <input type="number" class="form-control" id="price-from" name="price_from"
                                                                                placeholder="Min Price" required>
                                                                            <div class="invalid-feedback" id="error-price-from">Please enter a minimum
                                                                                price.</div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <label for="price-to" class="form-label">To</label>
                                                                            <input type="number" class="form-control" id="price-to" name="price_to"
                                                                                placeholder="Max Price" required>
                                                                            <div class="invalid-feedback" id="error-price-to">Please enter a maximum
                                                                                price.</div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="q-box__buttons" style="display: flex; gap: 15px; justify-content: flex-end;">
                                                <button id="before-btn" type="button" class="prev-btn btn-primary w-10">
                                                    <span><i class="bi bi-chevron-left text-white"></i></span> Previous
                                                </button>
                                                <button id="after-btn" type="button" class="next-btn">
                                                    Next <span><i class="bi bi-chevron-right text-white"></i></span>
                                                </button>
                                                <button id="renterRegister-btn" class="submit-btn" type="submit">
                                                    <span><i class="bi bi-check2-circle text-white"></i></span> Submit
                                                </button>
                                            </div>

                                            <div class="d-flex justify-content-betweens">
                                                <p class="create_account">Already have an account ? <a href="https://mycrm.rent/login"> Login </a></p>
                                            </div>
                                        </form>
                                    </div>

                                </section>

                                <section id="managerregister" data-tab-content class="">
                                    <h1> Renter Register </h1>
                                </section>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="https://mycrm.rent/user_asset/vendor/bootstrap5/bootstrap5.min.js"></script>
    <script src="https://mycrm.rent/user_asset/vendor/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <script src="https://mycrm.rent/user_asset/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://mycrm.rent/user_asset/js/tabview.js"></script>
    <script src="https://mycrm.rent/auth/auth.js"></script>

</body>

</html>