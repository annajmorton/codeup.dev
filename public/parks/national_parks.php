<?php  
	
require_once '../../parks/password.php';
require_once '../../db_connect.php';
require_once 'offset.php';

$stmt = $connection->query('SELECT * FROM national_parks;');
$pcount = $stmt->rowCount();
$pinfo = $stmt->columnCount();


$total_pages = floor(($pcount-1)/4);
$offset = offSet($pcount,$total_pages);
$sql_offset = $offset*4;

$stmt = $connection->query('SELECT * FROM national_parks LIMIT 4 OFFSET '. $sql_offset . ';');
$parks = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>

<html>

	<head>
	
		<title>Parks Page</title>
	
		<meta charset="utf8">
		<link rel="stylesheet" href="./parks.css">
		<link href='https://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>

	</head>



	<body>

		<?php include_once "parksNavBar.php"; ?>

		<div id="pageBuckett">
			
			<!-- TO PUT ITMES IN STND FLEX BOX, ADD FLEX CLASS -->
			<div id="hat" class="flex"><img src="HH_Park_ranger_hat.png" alt="ranger hat"></div>

			<div class="flex">

				<?php foreach ($parks as $key => $park): ?>
					<div class="parks">
						<h3><?= $park['name'];?></h3>
						<div class="park_details">
							<h4>location: <?= $park['location'];?></h4>
							<h4>date established: <?= $park['date_established'];?></h4>
							<h4>park area (acres): <?= $park['area_in_acres'];?></h4>
						</div>
					</div>

				<?php endforeach; ?>

				
			</div>

		
		</div>
		
		<?php include_once "parksFooter.html"; ?>		

	</body>

</html>

