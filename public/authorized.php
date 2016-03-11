<?php 
	
	include_once	"../Auth.php";

	session_start();

		
	if (Auth::check()) {
		
		header('Location: http://codeup.dev/login.php');
		exit;

	} 

?>
<!DOCTYPE html>

<html>

	<head>
	
		<title>Authorized</title>
		
		<meta charset="utf8">

	</head>



	<body>

		<h1>Authorized <?= Auth::user(); ?></h1>
		

		<form method="POST" action='http://codeup.dev/logout.php'>
			<input type="submit" value="Logout">
		</form>

	</body>

</html>

