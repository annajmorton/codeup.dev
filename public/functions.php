<?php  

	function inputHas($key){

		return isset($_REQUEST[$key]);	

	}

	function inputGet($key){

		return $_REQUEST[$key];

	}

	function escape($input){

		
		$outString = htmlspecialchars(strip_tags($input));
		return $outString;
	}






?>