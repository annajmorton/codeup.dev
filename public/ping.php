<?php 

	function crazycrazydntmksense () {

		$message = "PING";
		
		if (isset($_GET['count'])) {
			
			$count = $_GET['count'];

		} else {

			if (isset($_GET['status']) && $_GET['status'] == 'miss') {
				
				$message = "GAME OVER";

			}

			$count=0;
		}
			
		
		$passme['count'] = $count;
		$passme['message'] = $message;

		return $passme;
		
	}


	extract(crazycrazydntmksense());

?>


<!DOCTYPE html>

<html>

	<head>
	
		<title><?= $message; ?></title>
		
		<meta charset="utf8">

	</head>



	<body>

		<h1><?= $message?></h1>
		<a href="http://codeup.dev/pong.php?status=hit&count= <?= $count + 1;?> ">hit</a>
		<a href="http://codeup.dev/pong.php?status=miss">miss</a>

	</body>

</html>

