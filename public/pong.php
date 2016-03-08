<?php 

	function crazycrazydntmksense () {

		$message = "PONG";
		
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
	
		<title>PONG</title>
		
		<meta charset="utf8">

	</head>



	<body>

		<h1><?= $message?></h1>
		<a href="http://codeup.dev/ping.php?status=hit&count=<?=$count + 1;?>">hit</a>
		<a href="http://codeup.dev/ping.php?status=miss">miss</a>



	</body>

</html>

