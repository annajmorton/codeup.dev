<?php

$rando = rand(0,4);

$languages = ['PHP','CSS','MySQL','JS','HTML'];

echo $languages[$rando] . PHP_EOL . PHP_EOL;


// associative arrays
$person1 = [

	'first_name' => '',
	'the_main_squeeze' => '',
	'your_mom' => ''

];
print_r($person1);


$myBike = [

	'head_lights' => '',
	'mudd_gaurds' => '',
	'finders' => '',
	'automatic_helmet_fixer' => "what is this?"

];

print_r($myBike);