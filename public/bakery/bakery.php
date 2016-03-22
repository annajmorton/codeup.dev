<?php 
session_start();

include_once "Employees.php";
include_once "Cakes.php";
include_once  "Orders.php";
include_once "bakeryFunctions.php";

Cakes::$frosting_color_opt = ['white','cream','baby blue','pink','hot pink'];
Cakes::$cake_flavor_opt = ['chocolate','vanilla','carrot','italian cream','red velvet'];

$action = pickAnAction();
extract(employeeMake());
extract(cakemake());


?>


<!DOCTYPE html>

<html>

	<head>
	
		<title>bakery</title>
		
		<meta charset="utf8">
		<style type="text/css"></style>
		<link rel="stylesheet" type="text/css" href="bakery.css">
		<link rel="stylesheet" type="text/css" href="AMcssT.css">

	</head>



	<body>

		<?php include_once "AMnavBar.php"; ?>

		

		<div id="pageBuckett">

			<input id="action" value="<?=$action?>">

			<div id="home_page"><img src="2011-11-25-cake-batter-pancakes-586x322.jpg"></div>

			<div id="employee_select">
				<form method="GET">
					<select id="current_employee" name="current_employee" value="<?= $current_employee; ?>">
						<option value="none" selected disabled>select an employee</option>
						<?= Employees::selectEmployee();?>
					</select>
					<input type="submit">
				</form>
			</div>

			<div id="employee_info">
				<h2>Employee Info:</h2>
				<h3><?= $employee_info;?></h3>

			</div>
			

			<div id="cake_select">
				
				<h2>Specify Cake:</h2>
				<form method="GET">

					<select id="frosting_color" name="frosting_color" value="<?= $cake->frosting_color; ?>">
						<option value="none" selected disabled>select a frosting color</option>
						<?= Cakes::selectOptions(Cakes::$frosting_color_opt);?>

					</select>

					<select id="cake_flavor" name="cake_flavor" value="<?= $cake->cake_flavor; ?>">
						<option value="none" selected disabled>select a cake flavor</option>
						<?= Cakes::selectOptions(Cakes::$cake_flavor_opt);?>

					</select>

					<input id="cake" placeholder="input your cake message" name="decor_message" value="<?= $cake->decor_message; ?>">
					<input type="submit">

				</form>

			</div>
			

			<div id="order_summary">

				<h2>Order Summary:</h2>
				<h3><?= $cake->cakeSum();?></h3>
				<label for="total">Total Cost</label>
				<input id="total" name="cost" value="$ <?= $wedding->cost; ?>">

			</div>

		</div>
		<?php include_once "AMfooter.html"; ?>	

		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="bakery.js"></script>


	</body>

</html>

