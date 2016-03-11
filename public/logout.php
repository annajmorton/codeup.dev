
<?php  

	include_once "../Auth.php";
	session_start();
	
	Auth::logout();



?>

<!DOCTYPE html>

<html>

	<head>
	
		<title>Logout Page</title>
		
		<meta charset="utf8">

	</head>



	<body>
		<h1>You are logged out</h1>
	</body>

</html>

