<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Denver Apartment Locator </title>
    <link rel="shortcut icon" type="image/x-icon" href="site_images/logo/favicon.ico">
    <meta name="csrf-token" content="brLOI8QSD6CjDM9huPl7BtMz1MviFxEnoEu2H7sb">


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

            /* New CSS */
            /* https://codepen.io/sagarladani/pen/RXjEVo */
            .main {
                position: relative;
                left: 0;
                right: 0;
                top: 30px;
                margin: 0 auto;
            }

            input:-internal-autofill-selected {
                background-color: #fff !important;
            }

            #multistep_form {
                /* width: 550px; */
                margin: 0 auto;
                text-align: center;
                position: relative;
                /* height: 100%; */
                z-index: 999;
                opacity: 1;
                visibility: visible;
            }

            /*progress header*/
            #progress_header {
                overflow: hidden;
                margin: 0 auto 30px;
                padding: 0;
            }

            #progress_header li {
                list-style-type: none;
                width: 33.33%;
                float: left;
                position: relative;
                font-size: 16px;
                font-weight: bold;
                font-family: monospace;
                color: #fff;
                text-transform: uppercase;
            }

            #progress_header li:after {
                width: 35px;
                line-height: 35px;
                display: block;
                font-size: 22px;
                color: #888;
                font-family: monospace;
                background-color: #fff;
                border-radius: 100px;
                margin: 0 auto;
                background-repeat: no-repeat;
                font-family: 'Roboto', sans-serif;
            }

            #progress_header li:nth-child(1):after {
                content: "1";
            }

            #progress_header li:nth-child(2):after {
                content: "2";
            }

            #progress_header li:nth-child(3):after {
                content: "3";
            }

            #progress_header li:before {
                content: '';
                width: 100%;
                height: 5px;
                background: #fff;
                position: absolute;
                left: -50%;
                top: 50%;
                z-index: -1;
            }

            #progress_header li:first-child:before {
                content: none;
            }

            #progress_header li.active:before,
            #progress_header li.active:after {
                background-image: linear-gradient(to right top, #35e8c3, #36edbb, #3df2b2, #4af7a7, #59fb9b) !important;
                color: #fff !important;
                transition: all 0.5s;
            }

            /*title*/
            .title-box {
                width: 100%;
                margin: 0 0 30px 0;
            }

            .title-box h2 {
                font-size: 22px;
                text-transform: uppercase;
                color: #2C3E50;
                margin: 0;
                font-family: cursive;
                display: inline-block;
                position: relative;
                padding: 0 0 10px 0;
                font-family: 'Roboto', sans-serif;
            }

            .title-box h2:before {
                content: "";
                background: #6ddc8b;
                width: 70px;
                height: 2px;
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                margin: 0 auto;
                display: block;
            }

            .title-box h2:after {
                content: "";
                background: #6ddc8b;
                width: 50px;
                height: 2px;
                position: absolute;
                bottom: -5px;
                left: 0;
                right: 0;
                margin: 0 auto;
                display: block;
            }

            /*Input and Button*/
            .multistep-box {
                background: #f3f3f3;
                border: 0 none;
                border-radius: 3px;
                box-shadow: 1px 1px 55px 3px rgba(255, 255, 255, 0.4);
                padding: 30px 30px;
                box-sizing: border-box;
                width: 100%;
                margin: 0 10%;
                position: absolute;
            }

            .multistep-box:not(:first-of-type) {
                display: none;
            }

            .multistep-box p {
                margin: 0 0 12px 0;
                text-align: left;
            }

            .multistep-box span {
                font-size: 12px;
                color: #FF0000;
            }

            input,
            textarea {
                padding: 15px;
                border: 1px solid #ccc;
                border-radius: 3px;
                margin: 0;
                width: 100%;
                box-sizing: border-box;
                font-family: 'Roboto', sans-serif;
                color: #2C3E50;
                font-size: 13px;
                transition: all 0.5s;
                outline: none;
            }

            input:focus,
            textarea:focus {
                box-shadow: inset 0px 0px 50px 2px rgb(0, 0, 0, 0.1);
            }

            input.box_error,
            textarea.box_error {
                border-color: #FF0000;
                box-shadow: inset 0px 0px 50px 2px rgb(255, 0, 0, 0.1);
            }

            input.box_error:focus,
            textarea.box_error:focus {
                box-shadow: inset 0px 0px 50px 2px rgb(255, 0, 0, 0.1);
            }

            p.nxt-prev-button {
                margin: 25px 0 0 0;
                text-align: center;
            }

            .action-button {
                width: 100px;
                font-weight: bold;
                color: white;
                border: 0 none;
                border-radius: 1px;
                cursor: pointer;
                padding: 10px 5px;
                margin: 0 5px;
                background-image: linear-gradient(to right top, #35e8c3, #36edbb, #3df2b2, #4af7a7, #59fb9b);
                transition: all 0.5s;
            }

            .action-button:hover,
            .action-button:focus {
                box-shadow: 0 0 0 2px white, 0 0 0 3px #6ce199;
            }

            .form_submited #multistep_form {
                opacity: 0;
                visibility: hidden;
            }

            .form_submited h1 {
                -webkit-background-clip: text;
                transform: translate(0%, 0%);
                -webkit-transform: translate(0%, 0%);
                transition: all 0.3s ease;
                opacity: 1;
                visibility: visible;
            }

            .success-aft-submit {
                margin: 0;
                text-align: center;
                font-size: 90px;
                background-image: linear-gradient(to right top, #35e8c3, #36edbb, #3df2b2, #4af7a7, #59fb9b) !important;
                background-image: linear-gradient(to right top, #35e8c3, #36edbb, #3df2b2, #4af7a7, #59fb9b) !important;
                color: transparent;
                -webkit-background-clip: text;
                -webkit-background-clip: text;
                transform: translate(0%, -80%);
                -webkit-transform: translate(0%, -80%);
                transition: all 0.3s ease;
                opacity: 0;
                visibility: hidden;
                position: absolute;
                left: 0;
                right: 0;
                margin: 0 auto;
                text-align: center;
                top: 50%;
            }
            .title-box p {
                font-weight: 600;
                font-size: 1.2rem;
                margin-top: 20px;
            }

            /* New CSS End  */
        </style>

        <main id="main">
            <section id="listing_grid" class="grid_view">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="dashboard_sidebar">
                                <span class="close_icon"><i class="far fa-times" aria-hidden="true"></i></span>

                                <a href="javascript:void(0)" class="dash_logo">
                                    <img src="/uploads/profile_pics/manager_29253_1729580644.png" alt="img"
                                        class="imf-fluid w-100" style="height:200px !important;">
                                </a>
                                <ul class="dashboard_link">
                                    <li><a class="" href="https://mycrm.rent/dashboard"><i class="far fa-user"
                                                aria-hidden="true"></i> My Profile</a></li>
                                    <li><a class=" ||  "
                                            href="https://mycrm.rent/my-properties"><i class="fas fa-list-ul" aria-hidden="true"></i> My
                                            Properties </a>
                                    </li>

                                    <li><a class="active " href="https://mycrm.rent/add-property">
                                            <i class="fal fa-plus-circle" aria-hidden="true"></i> Add Property </a>
                                    </li>

                                    <li>
                                        <a class="" href="https://mycrm.rent/referred-renter">
                                            <i class="bi bi-person-plus-fill"></i> Referred Renters
                                        </a>
                                    </li>

                                    <li> <a class="nav-link "
                                            href="https://mycrm.rent/favorite/list-view"><i class="far fa-heart" aria-hidden="true"></i> My Favorites</a></li>
                                    <li> <a class="" href="https://mycrm.rent/recently-visited"><i
                                                class="far fa-comments-alt" aria-hidden="true"></i> Recently Visited </a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-9 mt-4 mt-lg-0 px-4">
                            <div class="main">
                                <form id="multistep_form">
                                    <!-- progressbar -->
                                    <ul id="progress_header">
                                        <li class="active"></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                    <!-- Step 01 -->
                                    <div class="multistep-box">
                                        <div class="title-box">
                                            <h2>Select State & City</h2>
                                            <p class="mt-2"> Select location details in which you are going to list your property and click on Continue button to move to next step.</p>
                                        </div>
                                        <p>
                                            <input type="text" name="email" placeholder="Email" id="email">
                                            <span id="error-email"></span>
                                        </p>
                                        <p>
                                            <input type="password" name="pass" placeholder="Password" id="pass">
                                            <span id="error-pass"></span>
                                        </p>
                                        <p>
                                            <input type="password" name="cpass" placeholder="Confirm Password" id="cpass">
                                            <span id="error-cpass"></span>
                                        </p>
                                        <p class="nxt-prev-button"><input type="button" name="next" class="fs_next_btn action-button" value="Next" /></p>
                                    </div>
                                    <!-- Step 02 -->
                                    <div class="multistep-box">
                                        <div class="title-box">
                                            <h2>Social Profiles</h2>
                                        </div>
                                        <p>
                                            <input type="text" name="twitter" placeholder="Twitter" id="twitter">
                                            <span id="error-twitter"></span>
                                        </p>
                                        <p>
                                            <input type="text" name="facebook" placeholder="Facebook" id="facebook">
                                            <span id="error-facebook"></span>
                                        </p>
                                        <p>
                                            <input type="text" name="linkedin" placeholder="Linkedin" id="linkedin">
                                            <span id="error-linkedin"></span>
                                        </p>
                                        <p class="nxt-prev-button">
                                            <input type="button" name="previous" class="previous action-button" value="Previous" />
                                            <input type="button" name="next" class="ss_next_btn action-button" value="Next" />
                                        </p>
                                    </div>
                                    <!-- Step 03 -->
                                    <div class="multistep-box">
                                        <div class="title-box">
                                            <h2>Personal Details</h2>
                                        </div>
                                        <p>
                                            <input type="text" name="fname" placeholder="First Name" id="fname">
                                            <span id="error-fname"></span>
                                        </p>
                                        <p>
                                            <input type="text" name="lname" placeholder="Last Name" id="lname">
                                            <span id="error-lname"></span>
                                        </p>
                                        <p>
                                            <input type="text" name="phone" placeholder="Phone" id="phone">
                                            <span id="error-phone"></span>
                                        </p>
                                        <p>
                                            <textarea name="address" placeholder="Address" id="address"></textarea>
                                            <span id="error-address"></span>
                                        </p>
                                        <p class="nxt-prev-button"><input type="button" name="previous" class="previous action-button" value="Previous" />
                                            <input type="submit" name="submit" class="submit_btn ts_next_btn action-button" value="Submit" />
                                        </p>
                                    </div>
                                </form>
                                <h1 class="success-aft-submit">You are successfully logged in</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Www.rentapartments.info TERMS AND CONDITIONS</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 pt-3">
                                        <p class="text-secondary mt-2" style="line-height: 2;">PLEASE READ THIS AGREEMENT
                                            CAREFULLY. TO COMPLETE YOUR REGISTRATION FOR Www.rentapartments.info AND ACTIVATE YOUR
                                            LISTING YOU MAY DIGITALLY ACCEPT THE TERMS OR FILL OUT THE INFORMATION AT THE BOTTOM OF
                                            THIS PAGE AND FAX TO 303-649-0706. FOR QUESTIONS PLEASE CALL CUSTOMER SERVICE AT
                                            303-649-0705 OR TOLL FREE 1-800-506-6647.</p>

                                        <p class="text-secondary mt-2" style="line-height:2;">As part of our commitment to
                                            high-quality service, we believe it is important to have a clear understanding with you
                                            regarding our respective obligations. These Terms and Conditions constitute the
                                            agreement between you, the Client (referred to as Client, owner, or you), and
                                            Www.rentapartments.info, an Vita LLC company (referred to as Www.rentapartments.info, us
                                            or we).</p>

                                        <p class="text-secondary mt-2" style="line-height:2;">
                                            By listing a community on Www.rentapartments.info you are creating an account with us
                                            and thereby becoming a Client. You agree to be legally bound by these Terms and
                                            Conditions as well as any other policies or procedures disclosed on the
                                            Rentapartments.info web site without modification. Rentapartments.info reserves the
                                            right to modify these Terms and Conditions at any time by notifying you of such changes
                                            or posting such changes on our web site. You acknowledge and agree that it is your
                                            responsibility to review this site regularly to review the Terms and Conditions that are
                                            binding on you.
                                        </p>
                                    </div>

                                    <div class="col-md-12 pt-1 mt-5">
                                        <div>
                                            <h6 class="px-2 py-1"
                                                style="color: #94c045;font-size: 1.4rem; background-color:#243642;"> CLIENT
                                                IDENTITY </h6>
                                        </div>
                                        <p class="text-secondary " style="line-height: 2;">Rentapartments.info cannot and will not
                                            confirm that any Client is who they claim to be or that any Client has the rights or
                                            qualifications they claim to have. As such, you represent and warrant that you are the
                                            owner or agent for owner and have exclusive right to request services provided by
                                            Rentapartments.info, including without limitation all payments for requested services.
                                        </p>
                                    </div>

                                    <div class="col-md-12 pt-1 mt-3">
                                        <div>
                                            <h6 class="px-2 py-1"
                                                style="color: #94c045;font-size: 1.5rem; background-color:#243642;"> AUTHORIZATION
                                            </h6>
                                        </div>
                                        <p class="text-secondary" style="line-height:2;">Owner authorizes Rentapartments.info to
                                            furnish information to prospective residents about the availability, features, and
                                            rental terms concerning the property of which owner has informed Rentapartments.info.
                                            Owner agrees to keep Rentapartments.info informed on a current basis of the above items
                                            and of the rental status of all prospective residents referred to owner. Owner agrees
                                            not to collect any portion of the fee from the resident and the resident shall be
                                            offered the same rental terms, conditions, prices and specials as those offered to the
                                            general public.
                                        </p>

                                    </div>

                                    <div class="col-md-12 pt-1 mt-3">
                                        <div>
                                            <h6 class="px-2 py-1"
                                                style="color: #94c045;font-size: 1.5rem; background-color:#243642;"> REGISTRATION
                                                DATA, CLIENT INFORMATION PRIVACY
                                            </h6>
                                        </div>
                                        <p class="text-secondary" style="line-height:2;">In order to register for and access the
                                            services provided by Rentapartments.info, you will provide certain information and data
                                            and update the same periodically. This will include, but not be limited to, registering
                                            as a Client for Rentapartments.info services, making revisions to your community
                                            information, or otherwise providing Rentapartments.info information that enables us to
                                            initiate, continue, or complete the services provided by Rentapartments.info. By
                                            providing such information and data, you agree and represent that all such information
                                            and data is true and accurate, and update the same as needed in order to keep it
                                            current, complete and accurate. You also grant us the right to disclose to third parties
                                            certain data about you. Rentapartments.info assumes no responsibility for any errors,
                                            omissions or inaccuracies in the services provided that stem from such inaccurate or
                                            incomplete information.
                                        </p>

                                    </div>

                                    <div class="col-md-12 pt-1 mt-3">
                                        <div>
                                            <h6 class="px-2 py-1"
                                                style="color: #94c045;font-size: 1.5rem; background-color:#243642;"> ACCOUNT ACCESS
                                            </h6>
                                        </div>
                                        <p class="text-secondary" style="line-height:2;">In becoming a Client, you have provided
                                            Rentapartments.info with a username and password with which to access your account. You
                                            are responsible for maintaining the confidentiality of your account and password and for
                                            restricting access to your computer, and you agree to accept complete responsibility for
                                            all activities that occur under your account or recompilation, disassembly or other
                                            reverse engineering of this site or any products or services provided on this site.
                                        </p>

                                    </div>

                                    <div class="col-md-12 pt-1 mt-3">
                                        <div>
                                            <h6 class="px-2 py-1"
                                                style="color: #94c045;font-size: 1.5rem; background-color:#243642;"> FEES
                                            </h6>
                                        </div>
                                        <p class="text-secondary" style="line-height:2;">In the event that Rentapartments.info,
                                            website for Apartment Guyz LLC is responsible for referring a resident who subsequently
                                            is accepted by owner for residency in this or any other rental property owned or managed
                                            by owner or property, owner agrees to pay Apartment Guyz LLC a sum equal to (55%) of the
                                            first full months contractual rent. Apartment Guyz LLC reserves the right to request a
                                            copy of the lease page verifying contractual rent. In the event the resident is evicted
                                            or abandons his lease before the first ninety days, a charge back to Apartment Guyz LLC
                                            in the amount of 25% will be allowed. In the event a short term stay, if offered
                                            (corporate suites, less than 3-month lease), a sum of 18.33% of each months contractual
                                            rent will be charged to the property for each month the resident stays up to 3-months.
                                        </p>

                                    </div>

                                    <div class="col-md-12 pt-1 mt-3">
                                        <div>
                                            <h6 class="px-2 py-1"
                                                style="color: #94c045;font-size: 1.5rem; background-color:#243642;"> PAYMENT AND
                                                COLLECTION
                                            </h6>
                                        </div>
                                        <p class="text-secondary" style="line-height:2;">Terms are net (30) days from the date of
                                            move-in or invoice whichever is later. Owner agrees to pay a late fee of 1.25% of the
                                            amount of the invoice, plus all collection costs incurred by Rentapartments.info for
                                            accounts 60 days past due. Services will be suspended on all accounts over 60 days past
                                            due.

                                        </p>

                                    </div>

                                    <div class="col-md-12 pt-1 mt-3">
                                        <div>
                                            <h6 class="px-2 py-1"
                                                style="color: #94c045;font-size: 1.5rem; background-color:#243642;"> TERMINATION
                                            </h6>
                                        </div>
                                        <p class="text-secondary" style="line-height:2;">Either party may immediately terminate
                                            this agreement by giving written notice of termination. In the event of termination
                                            owner agrees to pay all referral fees generated or incurred prior to the receipt by
                                            Rentapartments.info of written notice of such change. If Rentapartments.info is not
                                            notified of any ownership or management changes stated above, this contract will remain
                                            in full force to the new owner or management company.

                                        </p>

                                    </div>

                                    <div class="col-md-12 pt-1 mt-3">
                                        <div>
                                            <h6 class="px-2 py-1"
                                                style="color: #94c045;font-size: 1.5rem; background-color:#243642;"> RESIDENTS
                                            </h6>
                                        </div>
                                        <p class="text-secondary" style="line-height:2;">The owner has the sole right to accept or
                                            reject potential residents referred by Rentapartments.info. Rentapartments.info does not
                                            warrant the suitability of the prospective residents referred to the owner?s property.
                                            Accordingly, owner holds harmless Rentapartments.info for any and all damages arising
                                            out of the acceptance or rejection of the residents referred by Rentapartments.info as
                                            well as any present or future rents, damages, or other sums owed to owner by any
                                            resident or incurred by owner.
                                        </p>

                                    </div>

                                    <div class="col-md-12 pt-1 mt-3">
                                        <div>
                                            <h6 class="px-2 py-1"
                                                style="color: #94c045;font-size: 1.5rem; background-color:#243642;"> SEVERABILITY
                                            </h6>
                                        </div>
                                        <p class="text-secondary" style="line-height:2;">In the event that any provision of this
                                            agreement shall be judged illegal or otherwise unenforceable, such provision shall be
                                            enforced to the maximum extent permitted by applicable law, and the balance of the
                                            agreement shall continue in full force and effect in accordance with its terms, provided
                                            that it is the intent of the parties that this agreement is not materially altered.
                                        </p>

                                    </div>

                                    <div class="col-md-12 pt-1 mt-3">
                                        <div>
                                            <h6 class="px-2 py-1"
                                                style="color: #94c045;font-size: 1.5rem; background-color:#243642;"> ENTIRE
                                                AGREEMENT, MODIFICATION AND WAIVER
                                            </h6>
                                        </div>
                                        <p class="text-secondary" style="line-height:2;">This agreement merges all previous
                                            negotiations between the parties hereto, supersedes all prior agreements, if any,
                                            between the parties, and constitutes the entire agreement and understanding between the
                                            parties with respect to the subject matter of this agreement. Alteration, modification
                                            or change of this agreement shall be invalid except by written instrument in which any
                                            such alteration, modification or change is specifically designated and which is
                                            specifically acknowledged, agreed and executed by the party to be charged. The failure
                                            of either party to exercise in any respect any right provided for herein shall not be
                                            deemed a waiver of any right hereunder. No waiver of any provision hereof shall be
                                            effective unless made in writing and signed by the waiving party. The failure of any
                                            party to require the performance of any term or obligation of this agreement, or the
                                            waiver by any party of any breach of this agreement, shall not prevent any subsequent
                                            enforcement of such term or obligation or be deemed a waiver of any subsequent breach.
                                        </p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                RENTAPARTMENTS.INFO
                                            </div>
                                            <div class="col-md-6">
                                                OWNER/AGENT FOR OWNER
                                            </div>
                                            <div class="col-md-6">
                                                BY: ________________________________
                                            </div>
                                            <div class="col-md-6">
                                                BY: ________________________________
                                            </div>
                                            <div class="col-md-6">
                                                TITLE: ______________________________
                                            </div>
                                            <div class="col-md-6">
                                                PRINT NAME:______________________________
                                            </div>
                                            <div class="col-md-6">
                                                800-506-6647
                                            </div>
                                            <div class="col-md-6">
                                                TELEPHONE NUMBER: _________________________
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                    <p><i class="far fa-map-marker-alt"></i> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8de6f4ebe2e7e2e9ece5cde0ece4e1e4e3ecf9e2ffa3eee2e0">[email&#160;protected]</a></p>
                                </li>
                                <li><a href="#"><a href="/cdn-cgi/l/email-protection#345e5d5a5544417459555d585d5a55405b461a575b59"><i class="fal fa-envelope"></i>
                                            <span class="__cf_email__" data-cfemail="771d1e19160702371a161e1b1e19160318055914181a">[email&#160;protected]</span></a></li>
                                <li><a href="#"><a href="callto:tenymaziz@mailinator.com"><i
                                                class="fal fa-phone-alt"></i>
                                            <span class="__cf_email__" data-cfemail="ccb8a9a2b5a1adb6a5b68ca1ada5a0a5a2adb8a3bee2afa3a1">[email&#160;protected]</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-md-5">
                            <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d9a9b6a3bcbaa0a1b699b4b8b0b5b0b7b8adb6abf7bab6b4">[email&#160;protected]</a></p>
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
        <!-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
        <!-- <script src="https://mycrm.rent/user_asset/vendor/jquery/jquery3.min.js"></script> -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.0/jquery.easing.js" type="text/javascript"></script>
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
        <!-- <script src="https://mycrm.rent/ajax/user/userAjax.js"></script> -->

        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>

        <script>
            var current_slide, next_slide, previous_slide;
            var left, opacity, scale;
            var animation;

            var error = false;

            // email validation
            $("#email").keyup(function() {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                if (!emailReg.test($("#email").val())) {
                    $("#error-email").text('Please enter an Email addres.');
                    $("#email").addClass("box_error");
                    error = true;
                } else {
                    $("#error-email").text('');
                    error = false;
                    $("#email").removeClass("box_error");
                }
            });
            // password validation
            $("#pass").keyup(function() {
                var pass = $("#pass").val();
                var cpass = $("#cpass").val();

                if (pass != '') {
                    $("#error-pass").text('');
                    error = false;
                    $("#pass").removeClass("box_error");
                }
                if (pass != cpass && cpass != '') {
                    $("#error-cpass").text('Password and Confirm Password is not matched.');
                    error = true;
                } else {
                    $("#error-cpass").text('');
                    error = false;
                }
            });
            // confirm password validation
            $("#cpass").keyup(function() {
                var pass = $("#pass").val();
                var cpass = $("#cpass").val();

                if (pass != cpass) {
                    $("#error-cpass").text('Please enter the same Password as above.');
                    $("#cpass").addClass("box_error");
                    error = true;
                } else {
                    $("#error-cpass").text('');
                    error = false;
                    $("#cpass").removeClass("box_error");
                }
            });



            // twitter
            $("#twitter").keyup(function() {
                var twitterReg = /https?:\/\/twitter\.com\/(#!\/)?[a-z0-9_]+$/;
                if (!twitterReg.test($("#twitter").val())) {
                    $("#error-twitter").text('Twitter link is not valid.');
                    $("#twitter").addClass("box_error");
                    error = true;
                } else {
                    $("#error-twitter").text('');
                    error = false;
                    $("#twitter").removeClass("box_error");
                }
            });
            // facebook
            $("#facebook").keyup(function() {
                var facebookReg = /^(https?:\/\/)?(www\.)?facebook.com\/[a-zA-Z0-9(\.\?)?]/;
                if (!facebookReg.test($("#facebook").val())) {
                    $("#error-facebook").text('Facebook link is not valid.');
                    $("#facebook").addClass("box_error");
                    error = true;
                } else {
                    $("#error-facebook").text('');
                    error = false;
                    $("#facebook").removeClass("box_error");
                }
            });
            // linkedin
            $("#linkedin").keyup(function() {
                var linkedinReg = /(ftp|http|https):\/\/?(?:www\.)?linkedin.com(\w+:{0,1}\w*@)?(\S+)(:([0-9])+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
                if (!linkedinReg.test($("#linkedin").val())) {
                    $("#error-linkedin").text('Linkedin link is not valid.');
                    $("#linkedin").addClass("box_error");
                    error = true;
                } else {
                    $("#error-linkedin").text('');
                    error = false;
                    $("#linkedin").removeClass("box_error");
                }
            });
            // first name
            $("#fname").keyup(function() {
                var fname = $("#fname").val();
                if (fname == '') {
                    $("#error-fname").text('Enter your First name.');
                    $("#fname").addClass("box_error");
                    error = true;
                } else {
                    $("#error-fname").text('');
                    error = false;
                }
                if ((fname.length <= 2) || (fname.length > 20)) {
                    $("#error-fname").text("User length must be between 2 and 20 Characters.");
                    $("#fname").addClass("box_error");
                    error = true;
                }
                if (!isNaN(fname)) {
                    $("#error-fname").text("Only Characters are allowed.");
                    $("#fname").addClass("box_error");
                    error = true;
                } else {
                    $("#fname").removeClass("box_error");
                }
            });
            // last name
            $("#lname").keyup(function() {
                var lname = $("#lname").val();
                if (lname != lname) {
                    $("#error-lname").text('Enter your Last name.');
                    $("#lname").addClass("box_error");
                    error = true;
                } else {
                    $("#error-lname").text('');
                    error = false;
                }
                if ((lname.length <= 2) || (lname.length > 20)) {
                    $("#error-lname").text("User length must be between 2 and 20 Characters.");
                    $("#lname").addClass("box_error");
                    error = true;
                }
                if (!isNaN(lname)) {
                    $("#error-lname").text("Only Characters are allowed.");
                    $("#lname").addClass("box_error");
                    error = true;
                } else {
                    $("#lname").removeClass("box_error");
                }
            });
            // phone
            $("#phone").keyup(function() {
                var phone = $("#phone").val();
                if (phone != phone) {
                    $("#error-phone").text('Enter your Phone number.');
                    $("#phone").addClass("box_error");
                    error = true;
                } else {
                    $("#error-phone").text('');
                    error = false;
                }
                if (phone.length != 10) {
                    $("#error-phone").text("Mobile number must be of 10 Digits only.");
                    $("#phone").addClass("box_error");
                    error = true;
                } else {
                    $("#phone").removeClass("box_error");
                }
            });
            // address
            $("#address").keyup(function() {
                var address = $("#address").val();
                if (address != address) {
                    $("#error-address").text('Enter your Address.');
                    $("#address").addClass("box_error");
                    error = true;
                } else {
                    $("#error-address").text('');
                    error = false;
                    $("#address").removeClass("box_error");
                }
            });

            // first step validation
            $(".fs_next_btn").click(function() {
                // email
                if ($("#email").val() == '') {
                    $("#error-email").text('Please enter an email address.');
                    $("#email").addClass("box_error");
                    error = true;
                } else {
                    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                    if (!emailReg.test($("#email").val())) {
                        $("#error-email").text('Please insert a valid email address.');
                        error = true;
                    } else {
                        $("#error-email").text('');
                        $("#email").removeClass("box_error");
                    }
                }
                // password
                if ($("#pass").val() == '') {
                    $("#error-pass").text('Please enter a password.');
                    $("#pass").addClass("box_error");
                    error = true;
                }
                if ($("#cpass").val() == '') {
                    $("#error-cpass").text('Please enter a Confirm password.');
                    $("#cpass").addClass("box_error");
                    error = true;
                } else {
                    var pass = $("#pass").val();
                    var cpass = $("#cpass").val();

                    if (pass != cpass) {
                        $("#error-cpass").text('Please enter the same password as above.');
                        error = true;
                    } else {
                        $("#error-cpass").text('');
                        $("#pass").removeClass("box_error");
                        $("#cpass").removeClass("box_error");
                    }
                }
                // animation
                if (!error) {
                    if (animation) return false;
                    animation = true;

                    current_slide = $(this).parent().parent();
                    next_slide = $(this).parent().parent().next();

                    $("#progress_header li").eq($(".multistep-box").index(next_slide)).addClass("active");

                    next_slide.show();
                    current_slide.animate({
                        opacity: 0
                    }, {
                        step: function(now, mx) {
                            scale = 1 - (1 - now) * 0.2;
                            left = (now * 50) + "%";
                            opacity = 1 - now;
                            current_slide.css({
                                'transform': 'scale(' + scale + ')'
                            });
                            next_slide.css({
                                'left': left,
                                'opacity': opacity
                            });
                        },
                        duration: 800,
                        complete: function() {
                            current_slide.hide();
                            animation = false;
                        },
                        easing: 'easeInOutBack'
                    });
                }
            });
            // second step validation
            $(".ss_next_btn").click(function() {
                // twitter
                if ($("#twitter").val() == '') {
                    $("#error-twitter").text('twitter link is required.');
                    $("#twitter").addClass("box_error");
                    error = true;
                } else {
                    var twitterReg = /https?:\/\/twitter\.com\/(#!\/)?[a-z0-9_]+$/;
                    if (!twitterReg.test($("#twitter").val())) {
                        $("#error-twitter").text('Twitter link is not valid.');
                        error = true;
                    } else {
                        $("#error-twitter").text('');
                        $("#twitter").removeClass("box_error");
                    }
                }
                // facebook
                if ($("#facebook").val() == '') {
                    $("#error-facebook").text('Facebook link is required.');
                    $("#facebook").addClass("box_error");
                    error = true;
                } else {
                    var facebookReg = /^(https?:\/\/)?(www\.)?facebook.com\/[a-zA-Z0-9(\.\?)?]/;
                    if (!facebookReg.test($("#facebook").val())) {
                        $("#error-facebook").text('Facebook link is not valid.');
                        error = true;
                        $("#facebook").addClass("box_error");
                    } else {
                        $("#error-facebook").text('');
                    }
                }
                // linkedin
                if ($("#linkedin").val() == '') {
                    $("#error-linkedin").text('Linkedin link is required.');
                    $("#linkedin").addClass("box_error");
                    error = true;
                } else {
                    var linkedinReg = /(ftp|http|https):\/\/?(?:www\.)?linkedin.com(\w+:{0,1}\w*@)?(\S+)(:([0-9])+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
                    if (!linkedinReg.test($("#linkedin").val())) {
                        $("#error-linkedin").text('Linkedin link is not valid.');
                        error = true;
                    } else {
                        $("#error-linkedin").text('');
                        $("#linkedin").removeClass("box_error");
                    }
                }

                if (!error) {
                    if (animation) return false;
                    animation = true;

                    current_slide = $(this).parent().parent();
                    next_slide = $(this).parent().parent().next();

                    $("#progress_header li").eq($(".multistep-box").index(next_slide)).addClass("active");

                    next_slide.show();
                    current_slide.animate({
                        opacity: 0
                    }, {
                        step: function(now, mx) {
                            scale = 1 - (1 - now) * 0.2;
                            left = (now * 50) + "%";
                            opacity = 1 - now;
                            current_slide.css({
                                'transform': 'scale(' + scale + ')'
                            });
                            next_slide.css({
                                'left': left,
                                'opacity': opacity
                            });
                        },
                        duration: 800,
                        complete: function() {
                            current_slide.hide();
                            animation = false;
                        },
                        easing: 'easeInOutBack'
                    });
                }

            });

            // third step validation
            $(".ts_next_btn").click(function() {
                // first name
                if ($("#fname").val() == '') {
                    $("#error-fname").text('Enter your First name.');
                    $("#fname").addClass("box_error");
                    error = true;
                } else {
                    var fname = $("#fname").val();
                    if (fname != fname) {
                        $("#error-fname").text('First name is required.');
                        error = true;
                    } else {
                        $("#error-fname").text('');
                        error = false;
                        $("#fname").removeClass("box_error");
                    }
                    if ((fname.length <= 2) || (fname.length > 20)) {
                        $("#error-fname").text("User length must be between 2 and 20 Characters.");
                        error = true;
                    }
                    if (!isNaN(fname)) {
                        $("#error-fname").text("Only Characters are allowed.");
                        error = true;
                    } else {
                        $("#fname").removeClass("box_error");
                    }
                }
                // last name
                if ($("#lname").val() == '') {
                    $("#error-lname").text('Enter your Last name.');
                    $("#lname").addClass("box_error");
                    error = true;
                } else {
                    var lname = $("#lname").val();
                    if (lname != lname) {
                        $("#error-lname").text('Last name is required.');
                        error = true;
                    } else {
                        $("#error-lname").text('');
                        error = false;
                    }
                    if ((lname.length <= 2) || (lname.length > 20)) {
                        $("#error-lname").text("User length must be between 2 and 20 Characters.");
                        error = true;
                    }
                    if (!isNaN(lname)) {
                        $("#error-lname").text("Only Characters are allowed.");
                        error = true;
                    } else {
                        $("#lname").removeClass("box_error");
                    }
                }
                // phone
                if ($("#phone").val() == '') {
                    $("#error-phone").text('Enter your Phone number.');
                    $("#phone").addClass("box_error");
                    error = true;
                } else {
                    var phone = $("#phone").val();
                    if (phone != phone) {
                        $("#error-phone").text('Phone number is required.');
                        error = true;
                    } else {
                        $("#error-phone").text('');
                        error = false;
                    }
                    if (phone.length != 10) {
                        $("#error-phone").text("Mobile number must be of 10 Digits only.");
                        error = true;
                    } else {
                        $("#phone").removeClass("box_error");
                    }
                }
                // address
                if ($("#address").val() == '') {
                    $("#error-address").text('Enter your Address.');
                    $("#address").addClass("box_error");
                    error = true;
                } else {
                    var address = $("#address").val();
                    if (address != address) {
                        $("#error-address").text('Address is required.');
                        error = true;
                    } else {
                        $("#error-address").text('');
                        $("#address").removeClass("box_error");
                        error = false;
                    }
                }

                if (!error) {
                    if (animation) return false;
                    animation = true;

                    current_slide = $(this).parent().parent();
                    next_slide = $(this).parent().parent().next();

                    $("#progress_header li").eq($(".multistep-box").index(next_slide)).addClass("active");

                    next_slide.show();
                    current_slide.animate({
                        opacity: 0
                    }, {
                        step: function(now, mx) {
                            scale = 1 - (1 - now) * 0.2;
                            left = (now * 50) + "%";
                            opacity = 1 - now;
                            current_slide.css({
                                'transform': 'scale(' + scale + ')'
                            });
                            next_slide.css({
                                'left': left,
                                'opacity': opacity
                            });
                        },
                        duration: 800,
                        complete: function() {
                            current_slide.hide();
                            animation = false;
                        },
                        easing: 'easeInOutBack'
                    });
                }
            });
            // previous
            $(".previous").click(function() {
                if (animation) return false;
                animation = true;

                current_slide = $(this).parent().parent();
                previous_slide = $(this).parent().parent().prev();

                $("#progress_header li").eq($(".multistep-box").index(current_slide)).removeClass("active");

                previous_slide.show();
                current_slide.animate({
                    opacity: 0
                }, {
                    step: function(now, mx) {
                        scale = 0.8 + (1 - now) * 0.2;
                        left = ((1 - now) * 50) + "%";
                        opacity = 1 - now;
                        current_slide.css({
                            'left': left
                        });
                        previous_slide.css({
                            'transform': 'scale(' + scale + ')',
                            'opacity': opacity
                        });
                    },
                    duration: 800,
                    complete: function() {
                        current_slide.hide();
                        animation = false;
                    },
                    easing: 'easeInOutBack'
                });
            });

            $(".submit_btn").click(function() {
                if (!error) {
                    $(".main").addClass("form_submited");
                }
                return false;
            })
        </script>


        <script>
            document.addEventListener("DOMContentLoaded", () => {
                let step = document.getElementsByClassName("step");
                let prevBtn = document.getElementById("prev-btn");
                let nextBtn = document.getElementById("next-btn");
                let submitBtn = document.getElementById("submit-btn-add-property");
                let form = document.getElementById("form-wrapper");
                let preloader = document.getElementById("preloader-wrapper");
                let bodyElement = document.querySelector("body");
                let successDiv = document.getElementById("success");
                let current_step = 0;
                let stepCount = step.length - 1;
                step[current_step].classList.add("d-block");

                if (current_step == 0) {
                    prevBtn.classList.add("d-none");
                    submitBtn.classList.add("d-none");
                    nextBtn.classList.add("d-inline-block");
                }

                const progress = (value) => {
                    document.getElementsByClassName(
                        "progress-bar"
                    )[0].style.width = `${value}%`;
                };

                const validateStep = () => {
                    let inputs = step[current_step].querySelectorAll(
                        "input, select, textarea"
                    );
                    for (let input of inputs) {
                        if (!input.checkValidity()) {
                            input.classList.add("is-invalid");
                            return false;
                        }
                        input.classList.remove("is-invalid");
                    }
                    return true;
                };

                nextBtn.addEventListener("click", () => {
                    if (validateStep()) {
                        current_step++;
                        let previous_step = current_step - 1;
                        if (current_step <= stepCount) {
                            prevBtn.classList.remove("d-none");
                            prevBtn.classList.add("d-inline-block");
                            step[current_step].classList.remove("d-none");
                            step[current_step].classList.add("d-block");
                            step[previous_step].classList.remove("d-block");
                            step[previous_step].classList.add("d-none");
                            if (current_step == stepCount) {
                                submitBtn.classList.remove("d-none");
                                submitBtn.classList.add("d-inline-block");
                                nextBtn.classList.remove("d-inline-block");
                                nextBtn.classList.add("d-none");
                            }
                        }
                        progress((100 / stepCount) *
                            current_step);
                    }
                });
                prevBtn.addEventListener("click", () => {
                    if (current_step > 0) {
                        current_step--;
                        let previous_step = current_step + 1;
                        step[current_step].classList.remove("d-none");
                        step[current_step].classList.add("d-block");
                        step[previous_step].classList.remove("d-block");
                        step[previous_step].classList.add("d-none");
                        if (current_step < stepCount) {
                            submitBtn.classList.remove("d-inline-block");
                            submitBtn.classList.add("d-none");
                            nextBtn.classList.remove("d-none");
                            nextBtn.classList.add("d-inline-block");
                        }
                        if (current_step == 0) {
                            prevBtn.classList.remove("d-inline-block");
                            prevBtn.classList.add("d-none");
                        }
                        progress((100 / stepCount) *
                            current_step);
                    }
                });
                const radioButtons = document.querySelectorAll('input[name="inlineRadioOptions"]');
                const
                    addressField = document.getElementById("addressField");
                radioButtons.forEach((radio) => {
                    radio.addEventListener("change", function() {
                        if (this.value === "address") {
                            addressField.classList.remove("hidden");
                        } else {
                            addressField.classList.add("hidden");
                        }
                    });
                });
            });
        </script>
    </div>
</body>

</html>