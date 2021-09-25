<?php
/**
 * Plugin Name: Title Year ShortCode
 * Plugin URI: https://github.com/mainulsunvi/title-year-shortcode
 * Description: It is a shortcode plugin, use [year] shortcode in your post/page title to add an Automatic Updating Dynamic Year
 * Version: 1.0.0
 * Requires at least: 5.0
 * Requires PHP: 5.6
 * Author: Mainul Sunvi
 * Author URI: https: //profiles.wordpress.org/mainulsunvi/
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: yscp
 * Domain Path: /languages
 */

if ( !defined( "ABSPATH" ) ) {
    die;
}

function yscp_loded() {
    load_plugin_textdomain( 'yscp', false, dirname( __FILE__ ) . "/languages" );
}
add_action( 'plugins_loaded', 'yscp_loded' );

if ( !function_exists( 'yscp_current_year' ) ) {
    function yscp_current_year(): string {
        $year = date( 'Y' );

        return "$year";
    }
}
add_shortcode( 'year', 'yscp_current_year' );
add_filter( 'the_title', 'do_shortcode' );
