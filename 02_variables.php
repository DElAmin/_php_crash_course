<?php

// What is a variable
$name = "ElAmin";
// Variable types
$age = 36;
$isMail = true;
$height = 1.75;
$salary = null;
// Declare variables

// Print the variables. Explain what is concatenation
echo $age."<br>";
echo $isMail."<br>";
// Print types of the variables
echo gettype($salary)."<br>";
// Print the whole variable
var_dump($salary);
echo "<br>";
var_dump($age, $isMail);
// Change the value of the variable
$name = false;
// Print type of the variable
echo $name."<br>";
// Variable checking functions
is_string($name);
is_int($age);
// Check if variable is defined
isset($age);
echo $age."<br>";
echo $isMail."<br>";
// Constants
define("PI", 3.14);
echo PI;
// Using PHP built-in constants
echo SORT_ASC."<br>";
echo PHP_INT_MAX."<br>";