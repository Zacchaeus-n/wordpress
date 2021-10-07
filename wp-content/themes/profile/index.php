<?php

// READING FROM DATABASE
global $wpdb;
$table = 'user_profile';
$users_data = $wpdb->get_results("Select * from $table");

$atable = 'admin_profile';
$admins_data = $wpdb->get_results("Select * from $atable");
?>

<div class="mainContainer">
    <div class="indexHeader">
        <!-- including the header page -->
        <?php get_header(); ?>
    </div>
    <!-- content of the page -->
    <div class="indexContent">
        <section>
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://pbs.twimg.com/media/EGHYvttU4AAYKb7?format=jpg&name=large" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://pbs.twimg.com/media/EGHYvtkUcAAuc8T?format=jpg&name=large" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://pbs.twimg.com/media/EGHYvtjU0AAO8w1?format=jpg&name=large" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>     
        <div class="container mt-7">
            <!-- Table -->
            <h2 class="mb-5">LIST OF USER AND ADMINISTRATORS</h2>
            <div class="row">

                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <h3 class="mb-0">CURRENT USERS</h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">FIRST NAME</th>
                                        <th scope="col">SURNAME</th>
                                        <th scope="col">EMAIL</th>
                                        <th scope="col">CONTACT</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users_data as $val) { ?>

                                        <tr>
                                            <th scope="row">
                                                <?= $val->id ?>
                                            </th>
                                            <td>
                                                <?= $val->firstname ?>
                                            </td>
                                            <td>
                                                <?= $val->surname ?>
                                            </td>
                                            <td>
                                                <?= $val->email ?>
                                            </td>
                                            <td>
                                                <?= $val->phone ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer py-4">
                            <nav aria-label="...">
                                <ul class="pagination justify-content-end mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">
                                            <i class="fas fa-angle-left"></i>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">
                                            <i class="fas fa-angle-right"></i>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dark table -->
            <div class="row mt-5">
                <div class="col">
                    <div class="card bg-default shadow">
                        <div class="card-header bg-transparent border-0">
                            <h3 class="text-white mb-0">CURRENT ADMINISTRATORS</h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-dark table-flush">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">FIRST NAME</th>
                                        <th scope="col">SURNAME</th>
                                        <th scope="col">EMAIL</th>
                                        <th scope="col">CONTACT</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($admins_data as $val) { ?>

                                        <tr>
                                            <th scope="row">
                                                <?= $val->id ?>
                                            </th>
                                            <td>
                                                <?= $val->afirstname ?>
                                            </td>
                                            <td>
                                                <?= $val->asurname ?>
                                            </td>
                                            <td>
                                                <?= $val->aemail ?>
                                            </td>
                                            <td>
                                                <?= $val->aphone ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="indexSidebar">
        <!-- including the sidebar page -->
        <?php get_sidebar(); ?>
    </div>

    <div class="indexFooter">
        <!-- including the footer page -->
        <?php get_footer(); ?>
    </div>
</div>