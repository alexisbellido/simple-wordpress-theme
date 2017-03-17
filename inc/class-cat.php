<?php
namespace Zoo\Mammals;
/**
 * Cat
 *
 */

class Cat extends \Zoo\Animal {

	public function meow() {
		echo "<h2>Meoooow, I'm {$this->name}</h2>";
	}

}
