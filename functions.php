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

 require_once( 'inc/class-ab-color.php' );
 require_once( 'inc/class-animal.php' );
 require_once( 'inc/class-dog.php' );
 require_once( 'inc/class-cat.php' );
 require_once( 'inc/class-snake.php' );
 require_once( 'inc/class-dragon.php' );
 require_once( 'inc/class-lizard.php' );

 // refer to an external fully qualified name with an alias,
 // also called importing
 use Zoo\Reptiles\Dragon;
 use Zoo\Reptiles\Lizard as Lizzy;

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * Note: I'm running many things that shouldn't be here for
 * the sake of convenience and quick testing.
 */
function simple_setup() {

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'simple' ),
		'social' => __( 'Social Links Menu', 'simple' ),
	) );

	// instantiate a new object of the class Dog using the good old way
	$dog = new \Zoo\Mammals\Dog('fido');
	$dog->sayName();
	$dog->bark();

	// shorter instantiation to access member of class in a single expression
	(new \Zoo\Mammals\Cat('michi'))->meow();

	// the standard way again, using different namespace
	$snake = new \Zoo\Reptiles\Snake('lucy');
	$snake->sayName();
	$snake->hiss();

	// imported
	$dragon_1 = new Dragon('firebreather');
	$dragon_1->breathe();

	// imported with alias
	$lizard_1 = new Lizzy('iguano');
	$lizard_1->laugh();


}
add_action( 'after_setup_theme', 'simple_setup' );
