<?php
require_once 'inc/partials/header.html';

// user register

if (isset($_POST['submit'])) {
        global $wpdb;
        $table = 'user_profile';
        $data = array(
                'firstname' => $_POST['firstname'],
                'surname' => $_POST['surname'],
                'password' => $_POST['password'],
                'cpassword' => $_POST['cpassword'],
                'gender' => $_POST['gender'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
                'squestion' => $_POST['squestion'],
                'sanswer' => $_POST['sanswer'],
        );
        $format = array('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s');
        $wpdb->insert($table, $data, $format);
}


// admin register

if (isset($_POST['asubmit'])) {
        global $wpdb;
        $table = 'admin_profile';
        $data = array(
                'afirstname' => $_POST['afirstname'],
                'asurname' => $_POST['asurname'],
                'apassword' => $_POST['apassword'],
                'acpassword' => $_POST['acpassword'],
                'agender' => $_POST['agender'],
                'aemail' => $_POST['aemail'],
                'aphone' => $_POST['aphone'],
                'asquestion' => $_POST['asquestion'],
                'asanswer' => $_POST['asanswer'],
        );
        $format = array('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s');
        $wpdb->insert($table, $data, $format);
}
?>


<h1></h1>

<body>
        <div class="container register">
                <div class="row">
                        <div class="col-md-3 register-left">
                                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                                <h3>Profile Registration Form</h3>
                                <p>You are 30 seconds away from joining us!</p>
                                <input type="submit" name="" value="Login" /><br />
                        </div>
                        <div class="col-md-9 register-right">
                                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                                        <li class="nav-item">
                                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">New User</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">New Admin</a>
                                        </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                <h3 class="register-heading">Apply as a New User</h3>
                                                <form class="form-card" role="form" method="POST" action="<?php echo get_admin_url() . 'admin.php?page=profile-main-page'; ?>">
                                                        <div class="row register-form">
                                                                <div class="col-md-6">
                                                                        <div class="form-group">
                                                                                <input type="text" class="form-control" name="firstname" placeholder="First Name *" value="" />
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <input type="text" class="form-control" name="surname" placeholder="Last Name *" value="" />
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <input type="password" class="form-control" name="password" placeholder="Password *" value="" />
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password *" value="" />
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <div class="maxl">
                                                                                        <label class="radio inline">
                                                                                                <input type="radio" name="gender" value="male" checked>
                                                                                                <span> Male </span>
                                                                                        </label>
                                                                                        <label class="radio inline">
                                                                                                <input type="radio" name="gender" value="female">
                                                                                                <span>Female </span>
                                                                                        </label>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                        <div class="form-group">
                                                                                <input type="email" class="form-control" name="email" placeholder="Your Email *" value="" />
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <input type="text" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="Your Phone *" value="" />
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <select class="form-control" name="squestion">
                                                                                        <option class="hidden" selected disabled>Please select your Sequrity Question</option>
                                                                                        <option>What is your Birthdate?</option>
                                                                                        <option>What is Your old Phone Number</option>
                                                                                        <option>What is your Pet Name?</option>
                                                                                </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <input type="text" class="form-control" name="sanswer" placeholder="Enter Your Answer *" value="" />
                                                                        </div>
                                                                        <input type="submit" class="btnRegister" name="submit" value="Register" />
                                                                </div>
                                                        </div>
                                                </form>
                                        </div>
                                        <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                <h3 class="register-heading">Apply as a New Admin</h3>
                                                <form class="form-card" role="form" method="POST" action="<?php echo get_admin_url() . 'admin.php?page=profile-main-page'; ?>">
                                                <div class="row register-form">
                                                                <div class="col-md-6">
                                                                        <div class="form-group">
                                                                                <input type="text" class="form-control" name="afirstname" placeholder="First Name *" value="" />
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <input type="text" class="form-control" name="asurname" placeholder="Last Name *" value="" />
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <input type="email" class="form-control" name="aemail" placeholder="Email *" value="" />
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <input type="text" maxlength="10" minlength="10" name="aphone" class="form-control" placeholder="Phone *" value="" />
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <div class="maxl">
                                                                                        <label class="radio inline">
                                                                                                <input type="radio" name="agender" value="male" checked>
                                                                                                <span> Male </span>
                                                                                        </label>
                                                                                        <label class="radio inline">
                                                                                                <input type="radio" name="agender" value="female">
                                                                                                <span>Female </span>
                                                                                        </label>
                                                                                </div>
                                                                        </div>

                                                                </div>
                                                                <div class="col-md-6">
                                                                        <div class="form-group">
                                                                                <input type="password" class="form-control" name="apassword" placeholder="Password *" value="" />
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <input type="password" class="form-control" name="acpassword" placeholder="Confirm Password *" value="" />
                                                                        </div>

                                                                        <div class="form-group">
                                                                                <select class="form-control" name="asquestion">
                                                                                        <option class="hidden" selected disabled>Please select your Sequrity Question</option>
                                                                                        <option>What is your Birthdate?</option>
                                                                                        <option>What is Your old Phone Number</option>
                                                                                        <option>What is your Pet Name?</option>
                                                                                </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <input type="text" class="form-control" name="asanswer" placeholder="`Answer *" value="" />
                                                                        </div>
                                                                        <input type="submit" class="btnRegister" name="asubmit" value="Register" />
                                                                </div>
                                                        </div>
                                                </form>
                                        </div>
                                </div>
                        </div>
                </div>

        </div>