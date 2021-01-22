<?php

// Function which prints "Hello I am ...."
function hello()
{
    echo "Hello, I am DElAmin".'<br>';
}
hello();
// Function with argument
function hi($name) {
    return "HI, I am $name".'<br>';
}
echo hi('Douani');
// Create sum of two functions

// Create function to sum all numbers using ...$nums
function sum(...$nums)
{
    $sum = 0;
    foreach ($nums as $num) {
        $sum += $num;
    }
    return $sum;
}
echo sum(1, 2, 3, 4, 5, 6);
// Arrow functions
//function sum(...$nums)
//{
//    return array_reduce($nums, fn($carry, $n) => $carry + $n);
//}