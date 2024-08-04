@extends('layout.app')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">

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
                <div class="card card-table mg-t-20 mg-sm-t-30">
                    <div class="card-header d-flex justify-content-between">
                        <h6 class="slim-card-title align-content-center">Pets Management</h6>
                        <div class="d-flex" style="gap:10px;">
                            <button class="btn btn-outline-primary" data-toggle="modal" data-target="#addpets"> <i class="fa fa-plus" aria-hidden="true"></i> &nbsp Add Pets</button>
                            <button class="btn btn-outline-danger" id="deleteSelected"><i class="fa fa-trash" aria-hidden="true"></i> &nbsp Delete Selected</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table mg-b-0 tx-13 table-hover">
                            <thead>
                                <tr class="tx-10">
                                    <th class="wd-10p pd-y-5 tx-center"><input type="checkbox" id="selectAll"></th>
                                    <th class="wd-10p pd-y-5 tx-center">S No</th>
                                    <th class="pd-y-5">Pets</th>
                                    <th class="pd-y-5 tx-right">Status</th>
                                    <th class="pd-y-5 tx-right">Edit</th>
                                    <th class="pd-y-5 tx-center">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $row)
                                <tr>
                                    <td class="tx-center"><input type="checkbox" class="selectItem" data-id="{{ $row->id }}"></td>
                                    <td class="tx-center">{{$loop->iteration}}</td>
                                    <td><a href="" class="tx-inverse tx-medium d-block">{{$row->Pets }}</a></td>
                                    <td><a href="" class="tx-inverse tx-medium d-block">{{$row->Status == '1' ? 'Active' : 'InActive' }}</a></td>
                                    <td class="valign-middle tx-center">
                                        <button class="btn btn-outline-secondary btn-sm edit-single" data-id="{{ $row->id }}"><i class="fa fa-edit"></i></button>
                                    </td>
                                    <td class="valign-middle tx-center">
                                        <button class="btn btn-outline-danger btn-sm delete-single" data-id="{{ $row->id }}"><i class="fa fa-trash"></i></button>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="addpets" class="modal fade">
    <div class="modal-dialog modal-lg" role="document" style="width:100%;">
        <div class="modal-content tx-size-sm">
            <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Pets Management</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form id="schoolForm">
                        <div class="form-group">
                            <label for="schoolName">Pets</label>
                            <input type="text" class="form-control" id="petsname" name="pets" placeholder="Enter Pet" required>
                        </div>
                        <button type="submit" class="btn btn-primary float-right"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp ADD</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>



@endsection
