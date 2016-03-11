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
		$cost = 30;

		if (isset($cake_spec->decor_message)) {
			
			$cost += count($cake_spec->decor_message);
			$this->cost = $cost;

		} else {

			return "please specify cake decoration message";
		}


	}


}