<?php
/**
 * Simple functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Simple
 * @since 1.0
 */
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function simple_setup() {

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'simple' ),
		'social' => __( 'Social Links Menu', 'simple' ),
	) );
}

add_action( 'after_setup_theme', 'simple_setup' );
