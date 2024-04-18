<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class WP_Sweet_Alert_Cookies_Admin {

    // Constructor
    public function __construct() {
        // Add the admin functionality : menu items
        add_action( 'admin_menu', array( $this, 'wpsaco_admin_menus' ) );
    }

    // Example method to add a menu page to the admin area
    public function wpsaco_admin_menus() {

        // Main menu
        add_menu_page(
            'Sweet Alert Cookies',
            'Sweet Alert Cookies',
            'manage_options',
            'wp-sweet-alert-cookies-settings',
            array( $this, 'wpsaco_admin_menus_display_pgmain' ),
            'dashicons-privacy'
        );

        // Submenu : Settings
        add_submenu_page(
            'wp-sweet-alert-cookies-settings', // parent slug
            'Settings', // page title
            'Settings', // menu title
            'manage_options', // capability
            'wp-sweet-alert-cookies-basic-settings', // menu slug
            array( $this, 'wpsaco_admin_menus_display_pgopt' ) // callback function
        );

    }

    // Example method to display the admin page
    public function wpsaco_admin_menus_display_pgmain() {
        // Display the HTML content of admin page here
        ?>

        <style>
            #wpsaco__admin {
                border: 1px solid #dba617;
                border-radius: 10px;
                padding: 10px;
            }
        </style>

        <div class="wrap" id="wpsaco__admin">
            <h1 class="wp-heading-inline">
                <?php _e("Sweet Alert Cookies" , "wp-sweet-alert-cookies") ?>
            </h1>
        </div>
    
        <?php
    }

    public function wpsaco_admin_menus_display_pgopt(){
        echo "Settings Page";
    }


}

