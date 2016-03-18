<?php 

function offSet($pcount, $total_pages) {

	if (isset($_GET['page_prev'])) {
		
		$offset = $_GET['page_prev'];

		if ($offset < 0) {
			
			$offset = 0;
		}

	} else if (isset($_GET['page_next'])) {
		
		$offset = $_GET['page_next'];

		if ($offset > $total_pages) {
			
			$offset = $total_pages;
		}


	} else {

		$offset = 0;
		
	}

	return $offset;
	
}









