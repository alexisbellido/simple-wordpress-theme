<?php
namespace Zoo\Mammals;
/**
 * Dog
 *
 */

class Dog extends \Zoo\Animal {

	public function bark() {
		echo "<h2>Woof, woof, I'm {$this->name}</h2>";
	}

}
