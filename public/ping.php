<?php 

	require_once "../Input.php";
	require_once "FunPingPong.php";


	extract(FunPingPong());

?>


<!DOCTYPE html>

<html>

	<head>
	
		<title><?= $message; ?></title>
		
		<meta charset="utf8">

	</head>



	<body>

		<h1>PING<?= $message?></h1>
		<a href="http://codeup.dev/pong.php?status=hit&count= <?= $count + 1;?> ">hit</a>
		<a href="http://codeup.dev/pong.php?status=miss">miss</a>

	</body>

</html>

