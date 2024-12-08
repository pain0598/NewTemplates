$(function () {
    var table = $("#managesources").DataTable({
        processing: true,
        serverSide: true,
        url: "administration/manage-sources",
        columns: [
            {
                data: "DT_RowIndex",
                name: "DT_RowIndex",
                orderable: true,
                searchable: true,
            },
            {
                data: "sourcename",
                name: "sourcename",
                orderable: false,
                searchable: false,
            },
            {
                data: "status",
                name: "status",
                orderable: false,
                searchable: false,
            },
            {
                data: "action",
                name: "action",
                orderable: false,
                searchable: false,
            },
        ],
        order: [[1, "asc"]], // Default sorting by ID column
        pageLength: 5, // Default number of rows per page
        dom: "Bfrtip", // Show buttons
        buttons: ["csv"],
    });
});

$(function () {
    var table = $("#renterinfoupdate").DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "renter-info-update-history",
            data: function (d) {
                d.rentername = $("input[name='rentername']").val();
                d.adminname = $("input[name='adminname']").val();
                d.fromsearch = $("input[name='fromsearch']").val();
                d.tosearch = $("input[name='tosearch']").val();
            },
        },
        columns: [{
            data: "DT_RowIndex",
            name: "DT_RowIndex",
            orderable: true,
            searchable: true,
        },
        {
            data: 'rentername',
            name: 'rentername',
            orderable: true,
            searchable: true,
        },
        {
            data: 'adminname',
            name: 'adminname',
            orderable: true,
            searchable: true,
        },
        {
            data: 'updatedOn',
            name: 'updatedOn',
            orderable: true,
            searchable: true,
        },
        {
            data: 'action',
            name: 'action',
            orderable: false,
            searchable: false
        }
        ],
        order: [
            [1, "asc"]
        ],
        pageLength: 40,
        dom: "Bfrtip",
        buttons: ["csv"],
    });
    $("form").on("submit", function (e) {
        e.preventDefault();
        table.draw();
    });

    // Reset form fields and reload the Datatable
    $("button:contains('Reset')").on("click", function () {
        $("form")[0].reset();
        table.draw();
    });
    $('#exportCsv').on('click', function () {
        let query = {
            rentername: $("input[name='rentername']").val(),
            adminname: $("input[name='adminname']").val(),
            fromsearch: $("input[name='fromsearch']").val(),
            tosearch: $("input[name='tosearch']").val(),
        };

        let url = `renter-info-update-history/export?${$.param(query)}`;
        window.location.href = url;
    });
});

$(function () {
    var table = $("#managerloginlogs").DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "manager-login-logs",
        },
        columns: [{
            data: "DT_RowIndex",
            name: "DT_RowIndex",
            orderable: true,
            searchable: true,
        },
        {
            data: 'username',
            name: 'username',
            orderable: true,
            searchable: true,
        },
        {
            data: 'useremail',
            name: 'useremail',
            orderable: true,
            searchable: true,
        },
        {
            data: 't&c',
            name: 't&c',
        },
        {
            data: 'lastlogin',
            name: 'lastlogin',
        },
        {
            data: 'lastlogout',
            name: 'lastlogout',
            orderable: false,
            searchable: false
        }
        ],
        order: [
            [1, "asc"]
        ],
        pageLength: 40,
        dom: "Bfrtip",
        buttons: ["csv"],
    });

    // Reset form fields and reload the Datatable
    $("button:contains('Reset')").on("click", function () {
        $("form")[0].reset();
        table.draw();
    });
    $('#exportCsv').on('click', function () {
        let query = {
            rentername: $("input[name='rentername']").val(),
            adminname: $("input[name='adminname']").val(),
            fromsearch: $("input[name='fromsearch']").val(),
            tosearch: $("input[name='tosearch']").val(),
        };

        let url = `renter-info-update-history/export?${$.param(query)}`;
        window.location.href = url;
    });
});

$(function () {
    var table = $("#contactusreverts").DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: 'contact-us',
        },
        columns: [{
            data: "DT_RowIndex",
            name: "DT_RowIndex",
            orderable: true,
            searchable: true,
        },
        {
            data: 'name',
            name: 'name',
            orderable: true,
            searchable: true,
        },
        {
            data: 'email',
            name: 'email',
            orderable: true,
            searchable: true,
        },
        {
            data: 'subject',
            name: 'subject',
        },
        {
            data: 'message',
            name: 'message',
        },
        {
            data: 'revert',
            name: 'revert',
            orderable: false,
            searchable: false
        }
        ],
        order: [
            [1, "asc"]
        ],
        pageLength: 40,
        dom: "Bfrtip",
        buttons: ["csv"],
    });

    // Reset form fields and reload the Datatable
    $("button:contains('Reset')").on("click", function () {
        $("form")[0].reset();
        table.draw();
    });
    $('#exportCsv').on('click', function () {
        let query = {
            rentername: $("input[name='rentername']").val(),
            adminname: $("input[name='adminname']").val(),
            fromsearch: $("input[name='fromsearch']").val(),
            tosearch: $("input[name='tosearch']").val(),
        };

        let url = `renter-info-update-history/export?${$.param(query)}`;
        window.location.href = url;
    });
});

// propertyinquiries
$(function () {
    var table = $("#propertyinquiries").DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: 'property-inquiries',
        },
        columns: [{
            data: "DT_RowIndex",
            name: "DT_RowIndex",
            orderable: true,
            searchable: true,
        },
        {
            data: 'propertyname',
            name: 'propertyname',
            orderable: true,
            searchable: true,
        },
        {
            data: 'username',
            name: 'username',
            orderable: true,
            searchable: true,
        },
        {
            data: 'subject',
            name: 'subject',
        },
        {
            data: 'message',
            name: 'message',
        },
        {
            data: 'revert',
            name: 'revert',
            orderable: false,
            searchable: false
        }
        ],
        order: [
            [1, "asc"]
        ],
        pageLength: 40,
        dom: "Bfrtip",
        buttons: ["csv"],
    });

    // Reset form fields and reload the Datatable
    $("button:contains('Reset')").on("click", function () {
        $("form")[0].reset();
        table.draw();
    });
    $('#exportCsv').on('click', function () {
        let query = {
            rentername: $("input[name='rentername']").val(),
            adminname: $("input[name='adminname']").val(),
            fromsearch: $("input[name='fromsearch']").val(),
            tosearch: $("input[name='tosearch']").val(),
        };

        let url = `renter-info-update-history/export?${$.param(query)}`;
        window.location.href = url;
    });
});

$(document).on("click", ".edit", function () {
    var id = $(this).data("id");
    // Open a modal or inline editing interface here
    // Use AJAX to save changes back to the server
});

// $(document).on('click', '.delete', function() {
//     var id = $(this).data('id');

//     Swal.fire({
//         title: 'Are you sure?',
//         text: "You won't be able to revert this!",
//         icon: 'warning',
//         showCancelButton: true,
//         confirmButtonColor: '#3085d6',
//         cancelButtonColor: '#d33',
//         confirmButtonText: 'Yes, delete it!'
//     }).then((result) => {
//         if (result.isConfirmed) {
//             $.ajax({
//                 url: '/users/' + id,
//                 type: 'DELETE',
//                 success: function(result) {
//                     $('#users-table').DataTable().ajax.reload(); // Reload table data
//                     toastr.success('Record deleted successfully!');
//                 },
//                 error: function(xhr) {
//                     toastr.error('Failed to delete the record. Please try again.');
//                 }
//             });
//         }
//     });
// });

// $(".delete-btn").on("click", function () {
//     alert('dddd');
//     // var id = $(this).data("id");
//     // console.log("checkId", id);
//     // swal({
//     //     title: "Are you sure?",
//     //     text: "You will not be able to recover this record!",
//     //     icon: "warning",
//     //     buttons: true,
//     //     dangerMode: true,
//     // }).then((willDelete) => {
//     //     if (willDelete) {
//     //         $.ajax({
//     //             url: "/school-management/" + id,
//     //             method: "Post",
//     //             success: function (response) {
//     //                 toastr.success(response.message);
//     //                 location.reload();
//     //             },
//     //             error: function () {
//     //                 toastr.error(
//     //                     "An error occurred while deleting the record."
//     //                 );
//     //             },
//     //         });
//     //     }
//     // });
// });

$(document).on('click', '.delete-btn', function () {
    var id = $(this).data("id");
    console.log("checkId", id);
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this record!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            $.ajax({
                url: "/school-management/" + id,
                method: "Post",
                success: function (response) {
                    toastr.success(response.message);
                    location.reload();
                },
                error: function () {
                    toastr.error(
                        "An error occurred while deleting the record."
                    );
                },
            });
        }
    });
});
