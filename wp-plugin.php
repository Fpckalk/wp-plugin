<?php

/**
 * Plugin Name:       WordPress Plugin
 * Plugin URI:        https://developer.wordpress.org/plugins/plugin-basics/header-requirements/
 * Description:       Basic WordPress plugin setup
 * Version:           1.0.0
 * Author:            Fpckalk
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wp-plugin
 */


/**
 * The above comment block gives WordPress all the necessary meta data of the plugin.
 * WordPress uses this to display the name of the plugin among other things.
 */


/**
 * I almost always use these two global variables. You can also retrieve these values by using a handy plugin function if you'd like.
 * The functions that WordPress provides don't really cut it for me.
 */

define('WP_CUSTOM_PLUGIN_PATH', dirname(__FILE__)); // You can name this constant anything you want
define('WP_CUSTOM_PLUGIN_URL', \plugins_url('/', __FILE__)); // You can name this constant anything you want


/**
 * This is where I load all my files.
 * This should be done with Composer, way easier to load files that way.
 */

include 'lib/WPPlugin/Example.php';


/**
 * Now that our files are loaded I can call the classes they contain.
 * More info about classes are found in the Example.php file.
 */

// This doesn't do anything yet, only sets up the class with some properties. Take note of the namespace 'WPPlugin'.
$example = new WPPlugin\Example();


/**
 * The hooks are the powerhouse of the plugin and how WordPress functions.
 * Everything before this was just the setup.
 */

/**
 * An action is used to do something extra when, for example, the lifecycle reaches 'wp_head'.
 * We use an array for the second argument to let WordPress know: 'hey, our function add_some_output is located somewhere in the class $example';
 */
add_action('wp_head', [$example, 'add_some_output']);

/**
 * A filter is used to alter the passed value.
 * The '10' passes the priority (10 is default). The '2' passes the amount of arguments
 * the function should receive. In this example the function 'alter_some_body_classes' will get
 * the arguments $classes and $class.
 */
add_filter('body_class', [$example, 'alter_some_body_classes'], 10, 2);