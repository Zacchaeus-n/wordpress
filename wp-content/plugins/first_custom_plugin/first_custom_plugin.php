<?php

/*

Plugin Name: PLUGIN TEST NAME

Plugin URI: https://google.com/

Description: PLUGIN TESTING for the Training Purpose.

Version: 1.0

Author: Zacchaeus Napuo

Author URI: https://google.com/

License: Free

Text Domain: google

*/

/**
 * ADDING MENU ITEM TO THE ADMIN DASHBOARD
 */
function test_plugin_setup_menu()
{
    add_menu_page('Test Plugin Page', 'Test Plugin', 'manage_options', 'test_plugin', 'test_init');
}


add_action('admin_menu', 'test_plugin_setup_menu');

// RUNNING THE PAGE CONTENT
function test_init()
{
    echo "<h2>MY WORDPRESS CLASS IS AWESOME </h2>";
}


