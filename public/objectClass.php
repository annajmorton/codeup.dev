<?php 

require_once 'person.php';


$luis = new Person();
$luis->fruits = ['alone','in a','world','is a','little','cat','dog'];
var_dump($luis->randomFruit());
$luis->addFavFruit('cutefruit');
var_dump($luis->fruits);

$test = new stdClass();

var_dump($luis);
var_dump($test);