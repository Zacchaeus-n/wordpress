<!-- including css file -->
<?php wp_head(); ?>

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
        <div class="z-brand">ZACCHAEUS</div>
        <nav class="z-nav">
            <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
        </nav>
    </header>
</div>

<!-- You need to add menu in your currently developed template, 
one menu with multiple menu items in header. -->