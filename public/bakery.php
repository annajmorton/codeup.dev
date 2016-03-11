<?php 

include_once "Employees.php";
include_once "Cakes.php";
include_once  "Orders.php";

$sarah = new Employees('sarah','lopez','03/08/2000','50,000');
$cake = new Cakes;
$wedding = new Orders('hogs','chocolate',$cake);
var_dump($wedding);
$cake->decor_message = $_GET['decmsg'];
var_dump($cake);

$decmsg = '';


?>


<!DOCTYPE html>

<html>

	<head>
	
		<title>bakery</title>
		
		<meta charset="utf8">

	</head>



	<body>

		<h3>employee info:</h3>
		<h2><?= $sarah->employeeInfo();?></h2>
	
		<h3>cake message:</h3>
		<h2><?= $cake->cakeSum();?></h2>

		<form method="GET">

			<label for="cake">Cake Message: </label>
			<input id="cake" name= <?= $decmsg?> value="<?= $cake->decor_message ?>">
			<input type="submit">

		</form>



	</body>

</html>

