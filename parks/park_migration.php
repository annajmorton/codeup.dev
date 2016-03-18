<?php 

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', 'parks_user');

require_once '../db_connect.php';

echo $connection->getAttribute(PDO::ATTR_CONNECTION_STATUS) . PHP_EOL; 

$query = "DROP TABLE IF EXISTS national_parks";

$connection->exec($query);

$query = <<<PARKS
	
	CREATE TABLE national_parks(

		id INT UNSIGNED NOT NULL AUTO_INCREMENT, 
		name VARCHAR(100) NOT NULL,
		location VARCHAR(50) NOT NULL,
		date_established DATE,
		area_in_acres DOUBLE(10,2) UNSIGNED,
		PRIMARY KEY (id)
	);

PARKS;

$connection->exec($query);

echo "\nthis worked...?";