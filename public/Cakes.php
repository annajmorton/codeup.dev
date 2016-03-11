<?php 
class Cakes
{
	public $frosting_color;
	public $cake_flavor;
	public $decor_message;

	public function cakeSum() 
	{
		$cake_string = $this->cake_flavor . ' ' . $this->frosting_color . ' ' . $this->decor_message;
		return $cake_string;
	
	}
	
	// public function cakeOps($cake)
	// {
		
	// }

}

