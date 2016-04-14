<?php 

include_once 'User.php';

$santa = new User();


$santa->last_name = 'chris';
$santa->first_name = 'cringle';
$santa->email = 'merryXmas@timeOyear.org';
$santa->password = 'mrsClause';



$George = new User();

$George->last_name = 'George';
$George->first_name = 'straight';
$George->email = 'allmy@Xsliveintx.org';
$George->password = 'goldengate';


$santa->save();
$George->save();
$santa->save();

$result = User::find(1); 
$result->last_name = 'poo';
$result->save(); 
// var_dump($result);

$all = User::all();
var_dump($all);


Model::delete(1);

$all = User::all();
var_dump($all);




