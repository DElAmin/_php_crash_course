<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;
// Arithmetic operations
echo $a + $b."<br>";
// Assignment with math operators
$a += $b;
// Increment operator
echo $a++."<br>";
// Decrement operator

// Number checking functions
is_float($c);
is_numeric("3.55");
// Conversion
$strNumber = "12.34";
$number = (float)$strNumber;
$number = intval($strNumber);
var_dump($strNumber);
// Number functions
echo abs($b)."<br>";
// Formatting numbers
$number = 123456789.12345;
echo number_format($number, 2, ",", " " );
// https://www.php.net/manual/en/ref.math.php
