<?php 

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', 'parks_user');

require_once '../db_connect.php';
require_once '../parks/parks_reader.php';

// delete anything in the table

$query = 'TRUNCATE national_parks;';
$connection->exec($query);


foreach ($parks as $park) {

    $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres) VALUES ('{$park['name']}', '{$park['location']}', '{$park['date_established']}', '{$park['area_in_acres']}')";

    $connection->exec($query);

    echo "Inserted ID: " . $connection->lastInsertId() . PHP_EOL;
}


