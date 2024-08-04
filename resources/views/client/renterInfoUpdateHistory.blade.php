@extends('layout.app')
@section('content')
<style>
    #search-box {
        position: relative;
        width: 100%;
        margin: 0;
    }

    #search-form {
        height: 40px;
        border: 1px solid #999;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        background-color: #fff;
        overflow: hidden;
    }

    #search-text {
        font-size: 14px;
        color: #ddd;
        border-width: 0;
        background: transparent;
    }

    #search-box input[type="text"] {
        width: 90%;
        padding: 11px 0 12px 1em;
        color: #333;
        outline: none;
    }

    #search-button {
        position: absolute;
        top: 0;
        right: 0;
        height: 42px;
        width: 80px;
        font-size: 14px;
        color: #fff;
        text-align: center;
        line-height: 42px;
        border-width: 0;
        background-color: #4d90fe;
        -webkit-border-radius: 0px 5px 5px 0px;
        -moz-border-radius: 0px 5px 5px 0px;
        border-radius: 0px 5px 5px 0px;
        cursor: pointer;
    }
</style>
<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
            <h6 class="slim-pagetitle">Dashboard 01</h6>
        </div>
        <div class="row row-sm">
            <div class="col-lg-12">

                <div class="section-wrapper mg-t-20">
                    <form action="">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="form-control-label">From:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                        </div>
                                    </div>
                                    <input id="dateMask" type="date" name="fromsearch" class="form-control" placeholder="MM/DD/YYYY">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label class="form-control-label">To:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                        </div>
                                    </div>
                                    <input id="dateMask" type="date"  name="tosearch" class="form-control" placeholder="MM/DD/YYYY">
                                </div>
                            </div>


                            <div class="col-lg-12 mt-4">
                                <div class="form-group">
                                    <label class="form-control-label">Admin Name: </label>
                                    <input class="form-control" type="text" name="adminname"  placeholder="Enter Admin Name">
                                </div>
                            </div>

                            <div class="col-lg-12 mt-4">
                                <div class="form-layout-footer" style="float: right;">
                                    <button class="btn btn-primary bd-0">Search</button>
                                    <button class="btn btn-secondary bd-0">Reset</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>



                <ul class="nav nav-activity-profile mg-t-20">
                    <li class="nav-item"><a href="" class="nav-link"><i class="icon ion-ios-redo tx-purple"></i> Select All</a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="icon ion-image tx-primary"></i> Clear All</a></li>
                </ul>




                <div class="card card-latest-activity mg-t-20">
                    <div class="card-body">
                        <div class="slim-card-title">Latest Activity</div>
                        <div class="media media-author">
                            <img src="../img/img1.jpg" alt="">
                            <div class="media-body">
                                <h6><a href="">Katherine</a></h6>
                                <p>Executive Director</p>
                            </div>
                            <span>2 hours ago</span>
                        </div>

                        <p class="activity-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>

                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <a href=""><img src="../img/img16.jpg" class="img-fit-cover" alt=""></a>
                            </div>
                            <div class="col-md-8">
                                <div class="post-wrapper">
                                    <a href="" class="activity-title">Sailing Basics: 10 Nautical &amp; Sailing Terms To Know</a>
                                    <p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>
                                    <p class="mg-b-0">
                                        <a href="" class="d-block">Charmaine Montuya</a>
                                        <span>Writer &amp; Entrepreneur</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
