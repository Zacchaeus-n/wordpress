<?php

/*

Plugin Name: ZACCHAEUS

Plugin URI: https://zacchaeus-profile.netlify.app/

Description: ZACCHAEUS allows you to easily create personal profile pages.

Version: 1.0

Author: Zacchaeus Napuo

Author URI: https://zacchaeus-profile.netlify.app/

License: Free

Text Domain: Zacchaeus Plugin

*/

/**
 * ADDING MENU ITEM TO THE ADMIN DASHBOARD
 */


/**ASSIGNMENT 1
 * Create a plugin with your name
 * Add a Link in WP Admin Sidebar
 * Create a Page and Link it to menu
 */


function zacchaeus_plugin_setup_menu()
{
    add_menu_page('Zacchaeus Plugin Page', 'Zacchaeus Plugin', 'manage_options', 'zacchaeus_plugin', 'zacchaeus_init');
}


add_action('admin_menu', 'zacchaeus_plugin_setup_menu');

// RUNNING THE PAGE CONTENT
function zacchaeus_init()
{
    require_once(WP_PLUGIN_DIR . "/zacchaeus/inc/home.php");
}




// add_action('admin_menu', '_main_menu_st_pl');
// add_action('admin_menu', '_sub_menu_st_pl');

// function _main_menu_st_pl()
// {
//     add_menu_page('Main Page', 'Main Page', 'manage_options', 'main-page', 'main_page_st_plugin_action');
// }

// function _sub_menu_st_pl()
// {
//     add_submenu_page('main-page', 'Register Page', 'Register Page', 'manage_options', 'register-page', 'sub_page_st_plugin_action');
// }

// function main_page_st_plugin_action()
// {
//     require_once(WP_PLUGIN_DIR . '/first_custom_plugin/main_page.php');
// }

// function sub_page_st_plugin_action()
// {
//     require_once(WP_PLUGIN_DIR . '/first_custom_plugin/register_page.php');
// }





/**ASSIGNMENT 2
 * <!-- 
    Create a Teachers Form
Name:
Email:
Telephone:
Address:
Post that form, and print the DATA of Teacher.
After Printing to Data Add a Button to GO BACK TO FORM.
 -->
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

// add_action('admin_post_submit_form', '_handle_form_action');

// function _handle_form_action()
// {
//     if (isset($_POST['submitbtn'])) {
//         $data = array(
//             'firstname' => $_POST['firstname'],
//             'lastname' => $_POST['lastname'],
//             'email' => $_POST['email'],
//             'telephone' => $_POST['telephone'],
//             'address' => $_POST['address'],
//         );

//         print_r($data);
//     }


//     // foreach ($data as $key => $value) {
//     //     echo $value . '<br>';
//     // }

//     // print_r($_POST);
//     // die();

//     wp_redirect(admin_url('admin.php?page=zacchaeus_plugin'));
//     die();
// }





// export function response( input ) {
// 	 //Insert your code here 
// 	 const response = []; 
// 	for (var i=1; i <= input; i++){
// 		if (i % 15 == 0) response.push("FizzBuzz");
// 		else if (i % 3 == 0) response.push("Fizz");
// 		else if (i % 5 == 0) response.push("Buzz");
// 		else response.push(i);
// 	}
// 	return response;
// }
