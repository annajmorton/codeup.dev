<?php 

function FunPingPong () {


	if (Input::has('count')) {
		
		$count = Input::get('count');

	} else {

		if (Input::has('status') && Input::get('status') == 'miss') {
			
			$message = "GAME OVER";

		}

		$count=0;
	}
		
	$message = ' ' . $count;
	
	$passme['count'] = $count;
	$passme['message'] = $message;


	return $passme;
	
}
