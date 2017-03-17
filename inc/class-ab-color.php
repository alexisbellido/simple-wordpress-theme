<?php
namespace Color;
/**
 * AB functionas
 *
 * @since  1.0.0
 * @package ab
 */

class AB_Color {
	/**
	 * Placeholder method
	 *
	 * @since 0.1.0
	 */
	public function __construct() { }

	/**
	 * Setup actions and filters
	 *
	 * @since 0.1.2
	 */
	public function setup() {
		// print '<h1>test setup for singleton instance of class AB_Color</h1>';
	}

	/**
	 * Return a singleton instance of the current class
	 *
	 * @since 0.1.0
	 * @return EP_Sync_Manager
	 */
	public static function factory() {
		static $instance = false;

		if ( ! $instance ) {
			$instance = new self();
			$instance->setup();
		}

		return $instance;
	}

}

AB_Color::factory();
