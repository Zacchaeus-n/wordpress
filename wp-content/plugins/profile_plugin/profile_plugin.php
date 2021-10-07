<?php

/*

Plugin Name: PROFILE REGISTRATION FORM

Plugin URI: https://zacchaeus-profile.netlify.app/

Description: PROFILE REGISTRATION FORM allows you to easily create and manage your employees.

Version: 1.0

Author: Zacchaeus Napuo

Author URI: https://zacchaeus-profile.netlify.app/

License: Free

Text Domain: Profile Registration Form

*/

/**
 * ADDING MENU ITEM TO THE ADMIN DASHBOARD
 */


/**
 * 
 *FINAL ASSIGNMENT FOR PLUGIN AND THEME DEV
 */

// wp actions
add_action('admin_menu', '_main_menu_profile_plugin');

// main employee page
function _main_menu_profile_plugin()
{
    add_menu_page('Profile Main Page', 'Profile Main Page', 'manage_options', 'profile-main-page', 'main_page_profile_plugin_action');
}


//  page content directories
function main_page_profile_plugin_action()
{
    require_once(WP_PLUGIN_DIR . '/profile_plugin/main_profile_page.php');
}
