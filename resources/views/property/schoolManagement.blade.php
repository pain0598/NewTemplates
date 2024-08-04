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
                        <h6 class="slim-card-title align-content-center">School Management</h6>
                        <button class="btn btn-outline-primary" data-toggle="modal" data-target="#modaldemo3"> <i class="fa fa-plus" aria-hidden="true"></i> &nbsp Add School</button>
                        <button class="btn btn-outline-danger" id="deleteSelected"><i class="fa fa-trash" aria-hidden="true"></i> &nbsp Delete Selected</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table mg-b-0 tx-13 table-hover">
                            <thead>
                                <tr class="tx-10">
                                    <th class="wd-10p pd-y-5 tx-center"><input type="checkbox" id="selectAll"></th>
                                    <th class="wd-10p pd-y-5 tx-center">S No</th>
                                    <th class="pd-y-5">School Name</th>
                                    <th class="pd-y-5 tx-right">Type</th>
                                    <th class="pd-y-5 tx-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $row)
                                <tr>
                                    <td class="tx-center"><input type="checkbox" class="selectItem" data-id="{{ $row->school_id }}"></td>
                                    <td class="tx-center">{{$loop->iteration}}</td>
                                    <td><a href="" class="tx-inverse tx-medium d-block">{{$row->school_name }}</a></td>
                                    <td class="valign-middle tx-right">{{strtoupper($row->school_type)}}</td>
                                    <td class="valign-middle tx-center">
                                        <button class="btn btn-outline-danger btn-sm delete-single" data-id="{{ $row->school_id }}"><i class="fa fa-trash"></i></button>
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
<div id="modaldemo3" class="modal fade">
    <div class="modal-dialog modal-lg" role="document" style="width:100%;">
        <div class="modal-content tx-size-sm">
            <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Message Preview</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form id="schoolForm">
                        <div class="form-group">
                            <label for="schoolName">New School Name</label>
                            <input type="text" class="form-control" id="schoolName" name="school_name" placeholder="Enter school name" required>
                        </div>
                        <div class="form-group">
                            <label>School Type</label><br>
                            <div class="d-flex gap-5">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="school_type" id="elementary" value="Elementary" required>
                                    <label class="form-check-label" for="elementary">Elementary</label>
                                </div>
                                <div class="form-check gap-5 ml-2">
                                    <input class="form-check-input" type="radio" name="school_type" id="middle" value="Middle" required>
                                    <label class="form-check-label" for="middle">Middle</label>
                                </div>
                                <div class="form-check gap-5 ml-2">
                                    <input class="form-check-input" type="radio" name="school_type" id="high" value="High" required>
                                    <label class="form-check-label" for="high">High</label>
                                </div>
                                <div class="form-check gap-5 ml-2">
                                    <input class="form-check-input" type="radio" name="school_type" id="district" value="District" required>
                                    <label class="form-check-label" for="district">District</label>
                                </div>
                            </div>
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

<script>
    $(document).ready(function() {
        // AJAX setup for CSRF token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Select/Deselect all checkboxes
        $('#selectAll').on('click', function() {
            $('.selectItem').prop('checked', this.checked);
        });

        // Form submission for adding school
        $('#schoolForm').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: '{{ route("schoolManagement.store") }}',
                method: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    toastr.success(response.message);
                    location.reload();
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            toastr.error(value[0]);
                        });
                    } else {
                        toastr.error('An error occurred while submitting the form.');
                    }
                }
            });
        });

        // Single delete with confirmation
        $('.delete-single').on('click', function() {
            var id = $(this).data('id');
            console.log("checkId",id);
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this record!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: '/school-management/' + id,
                        method: 'Post',
                        success: function(response) {
                            toastr.success(response.message);
                            location.reload();
                        },
                        error: function() {
                            toastr.error('An error occurred while deleting the record.');
                        }
                    });
                }
            });
        });

        // Delete selected records with confirmation
        $('#deleteSelected').on('click', function() {
            var ids = [];
            $('.selectItem:checked').each(function() {
                ids.push($(this).data('id'));
            });

            if (ids.length === 0) {
                toastr.warning('Please select at least one record to delete.');
                return;
            }

            swal({
                title: "Are you sure?",
                text: "You will not be able to recover these records!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: '{{ route("schoolManagement.deleteSelected") }}',
                        method: 'POST',
                        data: { ids: ids },
                        success: function(response) {
                            toastr.success(response.message);
                            location.reload();
                        },
                        error: function() {
                            toastr.error('An error occurred while deleting the records.');
                        }
                    });
                }
            });
        });
    });
</script>

@endsection
