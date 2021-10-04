<?php

if (isset($_POST['submit'])) {
    global $wpdb;
    $table = 'teachers';
    $data = array(
        'firstName' => $_POST['firstname'],
        'Surname' => $_POST['lastname'],
        'email' => $_POST['email'],
        'phone' => $_POST['telephone'],
        'address' => $_POST['address'],
    );
    $format = array('%s', '%d');
    $wpdb->insert($table, $data, $format);
    //$my_id = $wpdb->insert_id;
    // wp_redirect(admin_url('admin-post.php'));
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zacchaeus Plugin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: 'Lato', sans-serif
        }

        h1 {
            margin-bottom: 40px
        }

        label {
            color: #333
        }

        .btn-send {
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            width: 80%;
            margin-left: 3px
        }

        .help-block.with-errors {
            color: #ff5050;
            margin-top: 5px
        }

        .card {
            margin-left: 10px;
            margin-right: 10px
        }
    </style>
</head>

<body>
    <div class="container">
        <div class=" text-center mt-5 ">
            <h1>Teachers Form</h1>
        </div>
        <div class="row ">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">
                        <div class="container">
                            <form id="contact-form" name="teacher-form" role="form" method="POST" action="<?php echo get_admin_url() . 'admin.php?page=zacchaeus_plugin'; ?>">
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_name">Firstname: *</label> <input id="form_name" type="text" name="firstname" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required."> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_lastname">Lastname: *</label> <input id="form_lastname" type="text" name="lastname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required."> </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_email">Email: *</label> <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required."> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_telephone">Telephone: *</label> <input id="form_telephone" type="text" name="telephone" class="form-control" placeholder="Please enter your telephone *" required="required" data-error="Valid telephone is required."> </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group"> <label for="form_address">Address: *</label> <textarea id="form_address" name="address" class="form-control" placeholder="Write your address here." rows="4" required="required" data-error="Please, leave us your address."></textarea> </div>
                                        </div>
                                        <div class="col-md-12"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Send Information" name="submit"> </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- /.8 -->
            </div> <!-- /.row-->
        </div>
    </div>
</body>

</html>