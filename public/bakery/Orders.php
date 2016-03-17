<?php 
class Orders
{
	public $customer_name;
	public $cake_type;
	public $cake_spec;
	public $cost;

	public function __construct($customer_name, $cake_type, Cakes $cake_spec)
	{

		$this->customer_name = $customer_name;
		$this->cake_type = $cake_type;
		$this->cake_spec = $cake_spec;	
	}


	public function cost() 
	{
		$cake = $this->cake_spec;
		$cost = 30;

		if (true) {
			
			$cost += strlen($cake->decor_message);
			$this->cost = $cost;

		} else {

			$this->cost = "please specify cake decoration message";
		}


	}


}