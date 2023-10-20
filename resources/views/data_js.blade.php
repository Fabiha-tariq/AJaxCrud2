<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    // $("#add_data").on('click', function() {
    //     $("#form_data").trigger('reset');
    //     $("#modal_title").html( 'Add Data');
    //     $("#myModel").model('show');
    // })

    // $("body").on('click', '#edit_data', function() {
    //     var id = $(this).data('id');
    //     $.get( '/edit/ '+ id , function(res) {
    //         $("#modal_title").html('Edit Todo');
    //         $("#id").val(res.id);
    //         $("#firstname_data").val(res.firstname);
    //         $("#lastname_data").val(res.lastname);
    //         $("#email_data").val(res.email);
    //         $("#password_data").val(res.password);
    //         $("#myModaledit").model('show');
    //     })
    // });
</script>
<script>
    $(document).ready(function() {

                // add data
                $(document).on('click', '.add_data', function(e) {
                    e.preventDefault();
                    let firstname = $("#firstname").val();
                    let lastname = $("#lastname").val();
                    let email = $("#email").val();
                    let password = $("#password").val();
                    //    console.log(firstname+lastname+email+password);

                    $.ajax({
                        url: "{{ route('add-data') }}",
                        method: 'post',
                        data: {
                            firstname: firstname,
                            lastname: lastname,
                            email: email,
                            password: password
                        },
                        success: function(res) {
                            if (res.status == 'success') {
                                $('#myModal').modal('hide');
                                $('#addDataForm')[0].reset();
                                $('.table').load(location.href + ' .table');

                            }
                        },
                        error: function(err) {
                            let error = err.responseJSON;
                            $.each(error.errors, function(index, value) {
                                $(".errMsgContainer").append('<span class="text-danger">' +
                                    value + '</span>' + '<br>')
                            });
                        }
                    });
                })

                // show data for update

                $(document).on('click', '.update_data_form', function() {
                    let id = $(this).data('id');
                    let firstname = $(this).data('firstname');
                    let lastname = $(this).data('lastname');
                    let email = $(this).data('email');
                    let password = $(this).data('password');

                    $('#up_id').val(id);
                    $('#up_firstname').val(firstname);
                    $('#up_lastname').val(lastname);
                    $('#up_email').val(email);
                    $('#up_password').val(password);

                })

                // update product

                $(document).on('click', '.update_data', function(e) {
                    e.preventDefault();
                    let up_id = $("#up_id").val();
                    let up_firstname = $("#up_firstname").val();
                    let up_lastname = $("#up_lastname").val();
                    let up_email = $("#up_email").val();
                    let up_password = $("#up_password").val();
                    //    console.log(firstname+lastname+email+password);

                    $.ajax({
                        url: "{{ route('update-data') }}",
                        method: 'post',
                        data: {
                            up_id: up_id,
                            up_firstname: up_firstname,
                            up_lastname: up_lastname,
                            up_email: up_email,
                            up_password: up_password
                        },
                        success: function(res) {
                            if (res.status == 'success') {
                                $('#updateModal').modal('hide');
                                $('#updateDataForm')[0].reset();
                                $('.table').load(location.href + ' .table');

                            }
                        },
                        error: function(err) {
                            let error = err.responseJSON;
                            $.each(error.errors, function(index, value) {
                                $(".errMsgContainer").append('<span class="text-danger">' +
                                    value + '</span>' + '<br>')
                            });
                        }
                    });
                })

                // delete product

                $(document).on('click', '.delete_data', function(e) {
                    e.preventDefault();
                    let data_id = $(this).data('id');

                    if (confirm('Are you want to delelete the data???')) {

                        $.ajax({
                                url: "{{ route('delete-data') }}",
                                method: 'post',
                                data: {data_id:data_id },
                                success: function(res) {
                                    if (res.status == 'success') {
                                        $('.table').load(location.href + ' .table');

                                    }
                                },


                          });

                        }

                        })


                });
</script>
