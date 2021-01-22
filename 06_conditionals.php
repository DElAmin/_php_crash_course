<?php

$age = 0;
$salary = 300000;

// Sample if
if ($age === 20) {
    echo "1";
}
echo '<br>';
// Without circle braces

// Sample if-else

// Difference between == and ===
if ($age === '20') {
echo "1";
}
echo '<br>';
// if AND
if ($age == 20 && $salary == 300000) echo 'Do something';
echo '<br>';
// if OR
echo '<br>';
// Ternary if
echo $age <22 ? 'Young' : 'Old';
echo '<br>';
// Short ternary
$myAge = $age ?: 36;
echo $myAge.'<br>';
// Null coalescing operator
$myName = isset($name) ? $name : 'ElAmin';
//$myname = $name ?? 'DElAMin';
echo $myName.'<br>';
// switch
$userRole = 'admin';
switch ($userRole) {
    case 'admin':
        echo 'admin';
        break;
    case 'editor':
        echo 'editor';
        bresk;
    default:
        echo 'Invalid role';
}