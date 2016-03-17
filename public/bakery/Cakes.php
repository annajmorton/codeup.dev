<?php 
class Cakes
{
	public $frosting_color;
	public $cake_flavor;
	public $decor_message;
	public static $frosting_color_opt =[];
	public static $cake_flavor_opt =[];


	public function cakeSum() 
	{
		$cake_string = '<div> the cake flavor is ' . $this->cake_flavor . "</div><div> the cake frosting color is " . $this->frosting_color . "</div><div> your message is " . $this->decor_message . "</div>";
		return $cake_string;
	
	}

	public static function selectOptions($item) 
	{
		$option_html = '';

		foreach ($item as $option) {
			
			$option_html .= "<option value='" . $option . "'>" . $option . "</option>";
		}

		return $option_html;
	}

}

