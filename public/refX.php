<?php
echo "hell tothe OOOOO" . PHP_EOL;
$number = 10;
echo "this is $number" . PHP_EOL; 
$number *= 3;
echo "this is $number now" . PHP_EOL;
$item1 = 5;
echo "this is item 1 $item1" . PHP_EOL;
$item2 = $item1;
echo "this is item 2 $item2" . PHP_EOL;
$item1 = 7;
echo "this is item 1 $item1 and this is item 2 $item2" . PHP_EOL;
$item2 = &$item1;
echo "this is item 2 assigned by reference $item2" . PHP_EOL;
$item1 = 7;
echo "this is item 1 $item1 and this is item 2 $item2" . PHP_EOL;


$b = 20;
echo $b . PHP_EOL;

echo --$b . PHP_EOL;

echo $b-- . PHP_EOL;

echo $b . PHP_EOL;


