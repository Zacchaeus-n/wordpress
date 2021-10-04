<?php

if (isset($_POST['submit'])) {
    global $wpdb;
    $table = 'employees';
    $data = array(
        'firstname' => $_POST['fname'],
        'lastname' => $_POST['lastname'],
        'email' => $_POST['email'],
        'phone' => $_POST['mob'],
        'job' => $_POST['job'],
    );
    $format = array('%s', '%d');
    $wpdb->insert($table, $data, $format);
}

// READING FROM DATABASE
global $wpdb;
$table = 'employees';
$employee_data = $wpdb->get_results("Select * from $table");
?>

<div class="wrap_table">
    <table class="table table-striped w-auto">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Business Phone</th>
                <th>Job Title</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employee_data as $val) { ?>

                <tr>
                    <td><?= $val->id ?></td>
                    <td><?= $val->firstname ?></td>
                    <td><?= $val->lastname ?></td>
                    <td><?= $val->email ?></td>
                    <td><?= $val->phone ?></td>
                    <td><?= $val->job ?></td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
</div>