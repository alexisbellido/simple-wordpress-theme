<?php
namespace Zoo;
/**
 * Animal
 *
 */

class Animal {

	protected $name;

	public function __construct( $name ) {
		$this->name = ucwords( $name );
	}

	public function sayName() {
		echo "<h2>Hello, I'm a ", get_class( $this ), " called {$this->name}</h2>";
	}

}
