<?php

/**
* The Disable WordPress Events and News Dashboard Widget Plugin
 *
 * Disable WordPress Events and News widget from the dashboard.
 *
 * @package Disable_WordPress_Events_and_News_Dashboard_Widget
 * @subpackage Main
 */

/**
 * Plugin Name: Disable WordPress Events and News Dashboard Widget
 * Plugin URI:  https://milandinic.com/wordpress/plugins/disable-wordpress-events-and-news-dashboard-widget/
 * Description: Disable WordPress Events and News widget from the dashboard.
 * Author:      Milan Dinić
 * Author URI:  https://milandinic.com/
 * Version:     1.0
 * Text Domain: disable-wordpress-events-and-news-dashboard-widget
 * Domain Path: /languages/
 * License:     GPL
 */

// Exit if accessed directly
defined( 'ABSPATH' ) or exit;

/**
 * Disable WordPress Events and News widget from the dashboard.
 *
 * @since 1.0
 */
function dweandw_remove() {
	remove_meta_box( 'dashboard_primary', get_current_screen(), 'side' );
}
add_action( 'wp_network_dashboard_setup', 'dweandw_remove', 20 );
add_action( 'wp_user_dashboard_setup',    'dweandw_remove', 20 );
add_action( 'wp_dashboard_setup',         'dweandw_remove', 20 );
