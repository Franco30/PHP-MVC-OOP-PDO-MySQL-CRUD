$(document).ready(function () {

    showAllusers();

    function showAllusers() {
        $.ajax({
            url: "action.php",
            type: "POST",
            data: {
                action: "view"
            },
            success: function (response) {
                // console.log(response);
                $("#showUser").html(response);
                $("table").DataTable({
                    order: [0, 'desc']
                });
            }
        });
    }

    // insert ajax request
    $("#insert").click(function (e) {
        if ($("#form-data")[0].checkValidity()) {
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure you want to add this user?',
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "action.php",
                        type: "POST",
                        data: $("#form-data").serialize() + "&action=insert",
                        success: function (response) {
                            Swal.fire({
                                title: 'User added successfully!',
                                icon: 'success'
                            })
                            $("#addModal").modal('hide');
                            $("#form-data")[0].reset();
                            showAllusers();
                        }
                    });
                }
            });
        }
    });

    // Edit User
    $("body").on("click", ".editBtn", function (e) {
        e.preventDefault();
        edit_id = $(this).attr('id');
        $.ajax({
            url: "action.php",
            type: "POST",
            data: {
                edit_id: edit_id
            },
            success: function (response) {
                data = JSON.parse(response);
                $("#id").val(data.id);
                $("#fname").val(data.first_name);
                $("#lname").val(data.last_name);
                $("#email").val(data.email);
                $("#phone").val(data.phone);
            }
        });
    });

    // update ajax request
    $("#update").click(function (e) {
        if ($("#edit-form-data")[0].checkValidity()) {
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure you want to update this user?',
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "action.php",
                        type: "POST",
                        data: $("#edit-form-data").serialize() + "&action=update",
                        success: function (response) {
                            Swal.fire({
                                title: 'User updated successfully!',
                                icon: 'success'
                            })
                            $("#editModal").modal('hide');
                            $("#edit-form-data")[0].reset();
                            showAllusers();
                        }
                    });
                }
            });
        }
    });

    // Delete ajax request
    $("body").on("click", ".delBtn", function (e) {
        e.preventDefault();
        var tr = $(this).closest('tr');
        del_id = $(this).attr('id');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "action.php",
                    type: "POST",
                    data: {
                        del_id: del_id,
                        },
                    success: function (response) {
                        showAllusers();
                        tr.css('background-color', '#ff6666');
                        Swal.fire({
                            title: 'Deleted!',
                            text: 'User deleted Successfully!',
                            icon: 'success'
                        })
                        //                            Swal.fire(
                        //                                'Deleted!',
                        //                                'User deleted Successfully!',
                        //                                'success'
                        //                            )
                        showAllusers();
                    }
                });
            }
        });
    });

    //show user details
    $("body").on("click", ".infoBtn", function (e) {
        e.preventDefault();
        info_id = $(this).attr('id');
        $.ajax({
            url: "action.php",
            type: "POST",
            data: {
                info_id: info_id
            },
            success: function (response) {
                //                console.log(response);
                data = JSON.parse(response);
                Swal.fire({
                    title: '<strong>User Info : ID(' + data.id + ')</strong>',
                    icon: 'info',
                    html: '<b>First Name : </b>' + data.first_name + '<br><b>Last Name : </b>' + data.last_name + '<br><b>Email : </b>' + data.email + '</br><b>Phone : </b>' + data.phone,
                    showCancelButton: true
                })
            }
        });
    });

});
