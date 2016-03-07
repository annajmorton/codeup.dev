<?php

echo "burn the booooooksssss!" . PHP_EOL . PHP_EOL;


$book_arr = [

	'title' => '',
	'author' => ''

];


$authorName = [

	'first_name' => '',
	'last_name'  => ''

];


$book1 = $book_arr;
$book1['title'] = "All the Light We Cannot See";
$authorName['first_name'] = "Anthony";
$authorName['last_name'] = "Doerr";
$book1['author'] = $authorName;

print_r($book1);


$book2 = $book_arr;
$book2['title'] = "The Gold Finch";
$authorName['first_name'] = "Donna";
$authorName['last_name'] = "Tart";
$book2['author'] = $authorName;

print_r($book2);


$book3 = $book_arr;
$book3['title'] = "Olive Kitteridge";
$authorName['first_name'] = "Elizabeth";
$authorName['last_name'] = "Strout";
$book3['author'] = $authorName;

print_r($book3);



$book4 = $book_arr;
$book4['title'] = "Orphan Master's Son";
$authorName['first_name'] = "Adam";
$authorName['last_name'] = "Johnson";
$book4['author'] = $authorName;

print_r($book4);



$book5 = $book_arr;
$book5['title'] = "The Corrections";
$authorName['first_name'] = "Jonathan";
$authorName['last_name'] = "Franzen";
$book5['author'] = $authorName;

print_r($book5);