<?php 
	var_dump($_POST);

	$username = 'guest';
	$password = 'password';
	$URL = "";


	if (isset($_POST['username']) && isset($_POST['password'])) {
		
		if ($_POST['username'] == $username && $_POST['password'] == $password) {
			
			
			header('Location: http://codeup.dev/authorized.php');
			exit;
			touch('scrip-is-still-running.txt');

		} else {

			$URL = "";
			echo "that is not the correct username or password";
		}
	}

?>

<!DOCTYPE html>

<html>

	<head>
	
		<title></title>
		
		<meta charset="utf8">

	</head>



	<body>

	

	<form method="POST">
	
		<label for="username">username</label>
		<input id="username" name="username">

		<label for="password">password</label>
		<input id="password" name="password">

		<input type="submit">

	</form>

	

	</body>

</html>

