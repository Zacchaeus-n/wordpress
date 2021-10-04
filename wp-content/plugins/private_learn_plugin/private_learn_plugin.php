<?php

/*

Plugin Name: PRIVATE LEARN

Plugin URI: https://zacchaeus-profile.netlify.app/

Description: PRIVATE LEARN series of plugin builds.

Version: 1.0

Author: Zacchaeus Napuo

Author URI: https://zacchaeus-profile.netlify.app/

License: Free

Text Domain: Private Learn Plugin

*/

/**
 * blocking external access to the plugin
 */
defined('ABSPATH') or die("Access Denied! You do not have permission here.");
/**
 * checking if the add_action function exist
 */

//creating a class
class PrivateLearnP1
{
    function __construct()
    {
        add_action('init', array($this, 'custom_post_type'));
    }

    function activate()
    {
        //generate a CPT - Custom Post Type
        //flush rewrite rules
    }
    function deactivate()
    {
        //flush rewrite rules
    }
    function uninstall()
    {
        //delete CPT or 
        //delete all the plugin data from the DB
    }

    // Generating CPT
    function custom_post_type()
    {
        register_post_type('book', ['public' => true, 'label' => 'Books']);
    }
}

if (class_exists('PriavteLearnP1')) {
    $private_learn_plugin1 = new PrivateLearnP1();
}

//activation
register_activation_hook(__FILE__, array($private_learn_plugin1, 'activate'));

//deactivation
register_deactivation_hook(__FILE__, array($private_learn_plugin1, 'deactivate'));

 //uninstall
