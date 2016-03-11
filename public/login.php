<?php 
	session_start();

	require_once "functions.php";
	require_once "../Input.php";
	require_once "../Auth.php";

	var_dump($_SESSION);
	var_dump($_POST);

	function againcrazy() {

		$DEFusername = 'guest';
		$DEFpassword = 'password';
		$username = '';
		$password = '';
		$test = "thishere";
		var_dump($test);

		Auth::attempt($username, $password);

		if (Input::has('username') && Input::has('password')) {

			var_dump($test);
			$username = Input::get('username');
			$password = Input::get('password');
			
			if (Auth::attempt($username, $password)) {
				
				header('Location: http://codeup.dev/authorized.php');
				exit;
				
			} else if (Input::get('username')=='' && Input::get('password')=='' ) {

				echo "please enter a username and password";

			} else {

				echo "that is not the correct username or password";
			}

		} 

		// if (isset($_SESSION['logged_in_user']) && $_SESSION['logged_in_user']) {

		// 		header('Location: http://codeup.dev/authorized.php');
		// 		exit;
		// }


		$passme = ['password' => $password,'username' => $username];

		return $passme;

	}

	extract(againcrazy());
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
		<input id="username" name="username" value="<?=escape($username);?>">

		<label for="password">password</label>
		<input id="password" name="password" value="<?=escape($password);?>">

		<input type="submit">

	</form>

	

	</body>

</html>

