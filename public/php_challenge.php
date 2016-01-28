<?php

$a = 0;
$b = 0;
$c = 0;
$n = 0;

do {
    
    if ($c == 0) { 

            do {

                echo $c = $n;

                $n = $n + 1;

            } while ($n == 2); 
    } else {

            echo $c = $a + $b;
            $a = $b;
            $b = $c;
    }
 
} while ($n == 5);
?>