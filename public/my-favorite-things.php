<?php 


	function pageController() {

		$data['FavThings'] = ['raindrops on roses','whiskers on kittens','bright copper kettles','warm woolen mittens','brown paper packages tied up with string'];

		return $data;

	}

	extract(pageController());
 ?>

<!DOCTYPE html>

<html>

	<head>
	
		<title>favorite things</title>
		
		<meta charset="utf8">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		
		<style type="text/css">

			body{

				display: flex;
				width: 1000px;
				justify-content:center;

			}
			table {

				width: 70%;
			}



		</style>

	</head>



	<body>


		 <table class="table table-striped">
			 <tr><th><h1>These are a few of my favorite things:</h1></th></tr>
		 	<tbody>
			 	<?php foreach ($FavThings as $key => $value): ?> 
			 		
			 		<tr><td><?= $value;  ?></td></tr>
			 		
			 	<?php endforeach; ?>
		 	</tbody>

	 	</table>

	 	<script type="text/javascript">
	 		"use strict"


	 	</script>

	</body>

</html>

