<?php
namespace Zoo\Reptiles;
/**
 * Snake
 *
 */

class Lizard extends \Zoo\Animal {

	public function laugh() {
		echo "<h2>Haha!, I'm a lizard called {$this->name}</h2>";
	}

}
