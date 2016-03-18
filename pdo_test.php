<?php 

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'codeup_test_db');
define('DB_USER', 'vagrant');
define('DB_PASS', 'vagrant');

require_once 'db_connect.php';

echo $connection->getAttribute(PDO::ATTR_CONNECTION_STATUS) . PHP_EOL; 

$sql = <<<QUERY
	
	CREATE TABLE teams(
		team_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
		name VARCHAR(100) NOT NULL,
		PRIMARY KEY(team_id)
	)

QUERY;

$connection->exec($sql);

$insert = 'INSERT INTO teams '

echo "\nyou did it!";
