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

$(document).on('click', '.delete-btn', function() {
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
