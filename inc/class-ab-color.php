<?php
/**
 * AB functionas
 *
 * @since  1.0.0
 * @package ab
 */

class AB_COLOR {

  /**
   * Placeholder method
   *
   * @since 0.1.0
   */
  public function __construct() { }

  /**
   * Setup actions and filters
   *
   * @since 0.1.0
   */
  public function setup() {
    print '<h1>test setup for singleton instance of class AB_COLOR</h1';
  }

  /**
   * Return singleton instance of class
   *
   * @return AB_COLOR
   * @since 0.1.0
   */
  public static function factory() {
    static $instance = false;

    if ( ! $instance  ) {
      $instance = new self();
      $instance->setup();
    }

    return $instance;
  }

}

AB_COLOR::factory();
