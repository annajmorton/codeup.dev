
<!DOCTYPE html>

<html>

	<head>
	
		<title>testing php with html</title>
		
		<meta charset="utf8">

	</head>

	<body>
		<?php $message = "i'm a little teapot";?>
		<?php var_dump($_GET); ?>
		

		<form method="GET">
		    <input type="text" name="q" value="" placeholder="Search DuckDuckGo">
		    <button type="submit">Go!</button>
		</form>


		<h1>Here is your message Sam!</h1>
		<br>
		<h2><?php echo $message;?></h2>
		<h2>That was sweet music! play it again!</h2>

	</body>

</html>

