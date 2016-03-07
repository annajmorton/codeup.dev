
<?php  

	function rando() {

		$gr8name = "temp name";
		$adjectives = ['massive','literal','lame','tepid', 'hateful', 'fictional','complicated','explosive','disappointing','jolly'];
		$nouns = ['taco', 'breakfast','morass', 'bubble', 'tea' ,'gum','nook','tree','feat','molly' ];
		
		$gr8name = $adjectives[rand(0,9)];
		$gr8name = $gr8name . '-' . $nouns[rand(0,9)];

		return $gr8name;

	}


	function pageController() {

		$gr8name['title'] = 'server name generator';
		$gr8name['name'] = rando();
		return $gr8name;
	}

	extract(pageController());

?>

<!DOCTYPE html>

<html>

	<head>
	
		<title></title>
		
		<meta charset="utf8">
		<link href='https://fonts.googleapis.com/css?family=Sue+Ellen+Francisco' rel='stylesheet' type='text/css'>

		<style type="text/css">


			body{

				display: flex;
				justify-content: center;
				font-family: 'Sue Ellen Francisco', cursive;
				font-size: 2.5em;
				flex-wrap: nowrap;


			}

			
			.callout{

				display: flex;
				justify-content: center;
				height: 30% ; 
				width: 70%;
				flex-wrap: nowrap;
			}
			.gr8name{

				display: flex;
				justify-content: flex-start;
				height: 30% ; 
				width: 30%;
				flex-wrap: nowrap;
			}

		</style>

	</head>


	<body>

		<div class="callout"><h1>Here's a great new server name: </h1></div>
		<br>
		<div class="gr8name"><h1><?= $name; ?></h1></div>

	</body>

</html>

