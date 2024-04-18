<?php
/*
* Plugin Name: WP Sweet Alert Cookies
* Description: Display customizable cookie notices on your WordPress website.
* Version: 1.0.44
* Author: Vishwa LiyanaArachchi
* Author URI: https://northbridgelk.com
* Plugin URI: https://northbridgelk.com/portfolio/plugins/wp-sweet-alert-cookies/
* License: GPL v3 or later
* License URI: https://www.gnu.org/licenses/gpl-3.0.html
* Text Domain: wp-sweet-alert-cookies
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define plugin constants
define( 'WP_SWEET_ALERT_COOKIES_VERSION', '1.0.44' );
define( 'WP_SWEET_ALERT_COOKIES_FILE', __FILE__ );
define( 'WP_SWEET_ALERT_COOKIES_DIR', plugin_dir_path( WP_SWEET_ALERT_COOKIES_FILE ) );
define( 'WP_SWEET_ALERT_COOKIES_URL', plugin_dir_url( WP_SWEET_ALERT_COOKIES_FILE ) );

// Include necessary files
require_once WP_SWEET_ALERT_COOKIES_DIR . 'includes/WP_Sweet_Alert_Cookies_Admin.php';
require_once WP_SWEET_ALERT_COOKIES_DIR . 'includes/WP_Sweet_Alert_Cookies_Frontend.php';

// Initialize the plugin
function wp_sweet_alert_cookies_init() {
    // Initialize admin functionality
    new WP_Sweet_Alert_Cookies_Admin();

    // Initialize frontend functionality
    new WP_Sweet_Alert_Cookies_Frontend();
}
add_action( 'plugins_loaded', 'wp_sweet_alert_cookies_init' );

