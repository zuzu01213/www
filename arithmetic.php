<?php
// LESSON 2

// Arithmetic operators

// + - * / ** %
$x = 10;
$y = 3;
$z = null;

// $z = $x + $y;
// $z = $x - $y;
// $z = $x * $y;
// $z = $x / $y;
// $z = $x ** $y;
 $z = $x % $y;
echo $z . "<br>";

// Increment/Decrement operators

$counter = 0;
$counter++;
$counter+=100;
echo $counter;

// Operator Precedence
/* () 
   ** 
   *  /  % 
   +  -
 */

$total = ((1 + 2) -3) * 4 / 5 ** 6 ;
echo $total;
?>