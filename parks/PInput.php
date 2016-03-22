<?php 

include_once '../../Input.php';

class PInput 
{
	public $input;
	public $input_key;
	public $isSet = false;

	public function pageSet() 
	{

		$this->input = Input::has($this->input_key) ? Input::escape(Input::get($this->input_key)) : emptyFalse($this->isSet);		
	}

	public static function emptyFalse($bool) {

		$bool = false;
		return "";

	}

}


