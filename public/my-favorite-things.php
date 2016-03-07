<?php 

	$FavThings = ['raindrops on roses','whiskers on kittens','bright copper kettles','warm woolen mittens','brown paper packages tied up with string'];


 ?>

<!DOCTYPE html>

<html>

	<head>
	
		<title>favorite things</title>
		
		<meta charset="utf8">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	</head>



	<body>



		
		 <table class="table table-striped">
			 <tr><th><h1>These are a few of my favorite things:</h1></th></tr>
		 	<tbody>
			 	<?php foreach ($FavThings as $key => $value) { ?> 
			 		
			 		<tr><td><?php echo $value;  ?></td></tr>
			 		
			 	<?php } ?>
		 	</tbody>

	 	</table>

		 

	</body>

</html>

