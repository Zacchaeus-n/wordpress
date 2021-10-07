<!-- including css file -->
<?php wp_head(); ?>

<!-- hero section -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- table -->
<script src="https://raw.githack.com/creativetimofficial/argon-dashboard/master/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css" rel="stylesheet">


<style>
    .wrap-nav {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        padding: 0 2rem;
    }

    .z-brand {
        font-size: 1.7rem;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        color: darkcyan;
        font-weight: 550;
    }

    .z-nav ul li {
        display: inline-block;
        list-style: none;
        text-decoration: none;
    }

    .z-nav ul li a {
        text-decoration: none;
        font-size: 1.2rem;
        margin-right: 1.2rem;
        color: aliceblue;
    }
</style>

<div class="header">
    <header class="wrap-nav">
        <div class="z-brand">ZPROFILE</div>
        <nav class="z-nav">
            <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
        </nav>
    </header>
</div>

<!-- You need to add menu in your currently developed template, 
one menu with multiple menu items in header. -->