<?php
$myArray = array(7 => 1, 2, 3);
$myArray[] = 4;
$myArray[2] = 5;
reset($myArray);
next($myArray);
echo current($myArray);
echo key($myArray);
?>
