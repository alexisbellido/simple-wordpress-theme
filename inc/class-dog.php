<?php
/**
 * Dog
 *
 */

class Dog extends Animal {

	public function bark() {
		echo "<h2>Woof, woof, I'm {$this->name}</h2>";
	}

}
