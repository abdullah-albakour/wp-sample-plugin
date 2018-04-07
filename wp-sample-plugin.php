<?php
/**
 * Plugin Name: WordPress Sample Plugin
 * Plugin URI: 
 * Description: A Sample WordPress Plugin To Test My WordPress Development
 * Version: 1.0
 * Author: Abdullah Albakour
 * Author URI: https://github.com/abdullah-albakour
 * License: GPL2
*/

/**
 * Add a link to our plugin in the menu
 * Place this link under 'settings > Sample Plugin'
*/

function wp_sample_plugin_menu(){
        
    /**
     * Use add_options_page function
     * add_options_page( page_title, menu_title, capability, menu_slug, function )
    */
    add_options_page( 
        'WordPress Sample Plugin',
        'Sample Plugin',
        'manage_options',
        'wp-sample-plugin',
        'wp_sample_plugin_options_page' 
    );

}

add_action( 'admin_menu' , 'wp_sample_plugin_menu' );

function wp_sample_plugin_options_page () {

    if( !current_user_can ('manage_options') ) {

        wp_die( 'You do not have sufficient permissions to access this page.' );

    }

    echo '<p>Welcome to sample plugin page!</p>';

}



?>