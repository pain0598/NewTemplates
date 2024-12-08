@extends('layout.app')
@section('content')

<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
            <h6 class="slim-pagetitle">Dashboard 01</h6>
        </div>


        <!-- d-flex ht-100v -->

        <div class="slim-mainpanel" style="position: relative;">

            <div class="container pd-t-30">
                <div class="dash-headline-two">
                    <div>
                        <h4 class="tx-inverse mg-b-5">Good morning, Katherine!</h4>
                        <p class="mg-b-0">Today is March 20, 2018</p>
                    </div>
                </div>
                <hr>
                <div class="card card-dash-one mg-t-20">
                    <div class="row no-gutters">
                        <div class="col-lg-4">
                            <a href="{{ route('admin-contact-us')}}">
                                <i class="icon ion-ios-analytics-outline"></i>
                                <div class="dash-content">
                                    <label class="tx-primary">Pending Contact Us Messages </label>
                                    <h2>0</h2>
                                </div>
                            </a>

                        </div>
                        <div class="col-lg-4">
                            <a href="">
                                <i class="icon ion-ios-pie-outline"></i>
                                <div class="dash-content">
                                    <label class="tx-success">Pending Property Inquiries </label>
                                    <h2>10</h2>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <i class="icon ion-ios-stopwatch-outline"></i>
                            <div class="dash-content">
                                <label class="tx-purple">Commision</label>
                                <h2>781,524</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="report-summary-header">
                    <div>
                        <h4 class="tx-inverse mg-b-3">Overall Report Summary</h4>
                        <p class="mg-b-0"><i class="icon ion-calendar mg-r-3"></i> January 01, 2018 - January 31, 2018</p>
                    </div>
                    <div>
                        <a href="" class="btn btn-secondary"><i class="icon ion-ios-clock-outline tx-22"></i> Add Renters </a>
                    </div>
                </div>

                <div class="row no-gutters dashboard-chart-one">
                    <div class="col-md-4 col-lg">
                        <div class="card card-total">
                            <div>
                                <h1>420</h1>
                                <p>Total Renters</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg">
                        <div class="card card-total">
                            <div>
                                <h1>55</h1>
                                <p>Active Renters </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg">
                        <div class="card card-total">
                            <div>
                                <h1>30</h1>
                                <p>Inactive Renters</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg">
                        <a href="">
                            <div class="card card-total">
                                <div>
                                    <h1>30</h1>
                                    <p>Leased Renters</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row row-sm mg-t-20">
                    <div class="col-lg-12 mg-t-20 mg-lg-t-0">
                        <div class="card card-table">
                            <div class="card-header">
                                <h6 class="slim-card-title">Unassigned Renters </h6>
                            </div><!-- card-header -->
                            <div class="table-responsive">
                                <table class="table mg-b-0 tx-13">
                                    <thead>
                                        <tr class="tx-10">
                                            <th class="wd-10p pd-y-5">&nbsp;</th>
                                            <th class="pd-y-5">Requested Date </th>
                                            <th class="pd-y-5">Renter Name </th>
                                            <th class="pd-y-5">Area</th>
                                            <th class="pd-y-5">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="pd-l-20">
                                                <img src="../img/img1.jpg" class="wd-36 rounded-circle" alt="Image">
                                            </td>
                                            <td>
                                                <a href="" class="tx-inverse tx-14 tx-medium d-block">Mark K. Peters</a>
                                                <span class="tx-11 d-block">TRANSID: 1234567890</span>
                                            </td>
                                            <td class="tx-12">
                                                <span class="square-8 bg-success mg-r-5 rounded-circle"></span> Email verified
                                            </td>
                                            <td>Just Now</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-neutral">View</a>
                                                <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pd-l-20">
                                                <img src="../img/img2.jpg" class="wd-36 rounded-circle" alt="Image">
                                            </td>
                                            <td>
                                                <a href="" class="tx-inverse tx-14 tx-medium d-block">Karmen F. Brown</a>
                                                <span class="tx-11 d-block">TRANSID: 1234567890</span>
                                            </td>
                                            <td class="tx-12">
                                                <span class="square-8 bg-warning mg-r-5 rounded-circle"></span> Pending verification
                                            </td>
                                            <td>Apr 21, 2017 8:34am</td>
                                        </tr>
                                        <tr>
                                            <td class="pd-l-20">
                                                <img src="../img/img3.jpg" class="wd-36 rounded-circle" alt="Image">
                                            </td>
                                            <td>
                                                <a href="" class="tx-inverse tx-14 tx-medium d-block">Gorgonio Magalpok</a>
                                                <span class="tx-11 d-block">TRANSID: 1234567890</span>
                                            </td>
                                            <td class="tx-12">
                                                <span class="square-8 bg-success mg-r-5 rounded-circle"></span> Purchased success
                                            </td>
                                            <td>Apr 10, 2017 4:40pm</td>
                                        </tr>
                                        <tr>
                                            <td class="pd-l-20">
                                                <img src="../img/img5.jpg" class="wd-36 rounded-circle" alt="Image">
                                            </td>
                                            <td>
                                                <a href="" class="tx-inverse tx-14 tx-medium d-block">Ariel T. Hall</a>
                                                <span class="tx-11 d-block">TRANSID: 1234567890</span>
                                            </td>
                                            <td class="tx-12">
                                                <span class="square-8 bg-warning mg-r-5 rounded-circle"></span> Payment on hold
                                            </td>
                                            <td>Apr 02, 2017 6:45pm</td>
                                        </tr>
                                        <tr>
                                            <td class="pd-l-20">
                                                <img src="../img/img4.jpg" class="wd-36 rounded-circle" alt="Image">
                                            </td>
                                            <td>
                                                <a href="" class="tx-inverse tx-14 tx-medium d-block">John L. Goulette</a>
                                                <span class="tx-11 d-block">TRANSID: 1234567890</span>
                                            </td>
                                            <td class="tx-12">
                                                <span class="square-8 bg-pink mg-r-5 rounded-circle"></span> Account deactivated
                                            </td>
                                            <td>Mar 30, 2017 10:30am</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!-- table-responsive -->
                            <div class="card-footer tx-12 pd-y-15 bg-transparent">
                                <a href=""><i class="fa fa-angle-down mg-r-5"></i>View All Transaction History</a>
                            </div><!-- card-footer -->
                        </div><!-- card -->
                    </div>
                </div>

                <hr>

                <div class="report-summary-header">
                    <div>
                        <h4 class="tx-inverse mg-b-3">Most Popular Products</h4>
                        <p class="mg-b-0"><i class="icon ion-calendar mg-r-3"></i> January 01, 2018 - January 31, 2018</p>
                    </div>
                    <div>
                        <a href="" class="btn btn-secondary">Top Rated Products</a>
                        <a href="" class="btn btn-secondary">View All Products</a>
                    </div>
                </div><!-- d-flex -->

                <div class="row row-sm">
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-popular-product">
                            <label class="prod-id">Product ID: #PD-1754</label>
                            <h5 class="prod-name"><a href="">US 360 Home Security IP Camera Night</a></h5>
                            <p class="prod-by">By: <a href="">ThmPxls Security</a></p>
                            <div class="row">
                                <div class="col-5">
                                    <h1>1885</h1>
                                    <p>Total Sales</p>
                                </div><!-- col -->
                                <div class="col-7">
                                    <h1>$12,056</h1>
                                    <p>Earnings</p>
                                </div><!-- col -->
                            </div><!-- row -->
                        </div><!-- card -->
                    </div><!-- col-4 -->
                    <div class="col-md-6 col-lg-4 mg-t-20 mg-md-t-0">
                        <div class="card card-popular-product">
                            <label class="prod-id">Product ID: #PD-1753</label>
                            <h5 class="prod-name"><a href="">US KS-5 Junior Lite DVD Karaoke 9500</a></h5>
                            <p class="prod-by">By: <a href="">ThmPxls Security</a></p>
                            <div class="row">
                                <div class="col-5">
                                    <h1>1862</h1>
                                    <p>Total Sales</p>
                                </div><!-- col -->
                                <div class="col-7">
                                    <h1>$13,113</h1>
                                    <p>Earnings</p>
                                </div><!-- col -->
                            </div><!-- row -->
                        </div><!-- card -->
                    </div><!-- col-4 -->
                    <div class="col-md-6 col-lg-4 mg-t-20 mg-lg-t-0">
                        <div class="card card-popular-product">
                            <label class="prod-id">Product ID: #PD-1754</label>
                            <h5 class="prod-name"><a href="">US 360 Home Security IP Camera Night</a></h5>
                            <p class="prod-by">By: <a href="">ThmPxls Digital</a></p>
                            <div class="row">
                                <div class="col-5">
                                    <h1>1799</h1>
                                    <p>Total Sales</p>
                                </div><!-- col -->
                                <div class="col-7">
                                    <h1>$11,091</h1>
                                    <p>Earnings</p>
                                </div><!-- col -->
                            </div><!-- row -->
                        </div><!-- card -->
                    </div><!-- col-4 -->
                </div><!-- row -->

            </div>
            <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                <div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                    <div style="position: absolute; left: 0px; top: 0px; transition: all; width: 100000px; height: 100000px;"></div>
                </div>
                <div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                    <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div>
                </div>
            </div>
        </div>

        <form action="{{ route('send-email') }}" method="post">
            @csrf
            <input type="text" name="llll">
            <button type="submit" class="btn btn-primary"> Send Email</a>
        </form>

    </div><!-- container -->
</div>
@endsection