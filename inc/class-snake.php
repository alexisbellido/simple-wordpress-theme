<?php
namespace Zoo\Reptiles;
/**
 * Snake
 *
 */

class Snake extends \Zoo\Animal {

	public function hiss() {
		echo "<h2>Sssss, help yourself an apple, I'm {$this->name}</h2>";
	}

}

// // the standard way again, using current namespace
// $lil_snake = new Snake('little snaky');
// $lil_snake->hiss();
//
// // using fully qualified name (the namespace prefix)
// $lil_dog = new \Zoo\Mammals\Dog('puppy');
// $lil_dog->bark();
