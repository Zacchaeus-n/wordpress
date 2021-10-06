<?php

/*

Plugin Name: EMPLOYEE

Plugin URI: https://zacchaeus-profile.netlify.app/

Description: EMPLOYEE allows you to easily create and manage your employees.

Version: 1.0

Author: Zacchaeus Napuo

Author URI: https://zacchaeus-profile.netlify.app/

License: Free

Text Domain: employee Plugin

*/

/**
 * ADDING MENU ITEM TO THE ADMIN DASHBOARD
 */


/**
 * PFA, the plugin File
 *FINAL ASSIGNMENT FOR PLUGIN DEV

 *Create a New Plugin:
 *1) Proper Menus (MainPage, Register, Listing)
 *2) Insert Data in DB
 *3) Fetch Data from DB
 *4) Show in the Table Form
 *Make sure to use proper HTML and name convention for the Menu Items and Pages
 */

// wp actions
add_action('admin_menu', '_main_menu_employee_plugin');
add_action('admin_menu', '_sub_menu_register_employee_page');
add_action('admin_menu', '_sub_menu_display_employee_page');

// main employee page
function _main_menu_employee_plugin()
{
    add_menu_page('Employee Main Page', 'Employee Main Page', 'manage_options', 'employee-main-page', 'main_page_employee_plugin_action');
}

//  register employee page
function _sub_menu_register_employee_page()
{
    add_submenu_page('employee-main-page', 'Register Page', 'Register Page', 'manage_options', 'register-page', 'sub_page_employee_plugin_register_action');
}

//  display employee page
function _sub_menu_display_employee_page()
{
    add_submenu_page('employee-main-page', 'Employee Listing', 'Employee Listing', 'manage_options', 'display-page', 'sub_page_employee_plugin_display_action');
}

//  page content directories
function main_page_employee_plugin_action()
{
    require_once(WP_PLUGIN_DIR . '/employee_plugin/main_employee_page.php');
}

function sub_page_employee_plugin_register_action()
{
    require_once(WP_PLUGIN_DIR . '/employee_plugin/inc/register_form.php');
}

// display employee info
function sub_page_employee_plugin_display_action()
{
    require_once(WP_PLUGIN_DIR . '/employee_plugin/inc/display_employee_data.php');
}

