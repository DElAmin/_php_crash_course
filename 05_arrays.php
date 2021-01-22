<?php

// Create array
$fruits = ["Banana", "Apple", "Orange"];
// Print the whole array
echo '<pre>';
var_dump($fruits);
echo '</pre>';
// Get element by index
echo $fruits[1].'<br>';
// Set element by index

// Check if array has element at index 2
isset($fruits[3]);
// Append element
$fruits[] = 'Banana';
// Print the length of the array
echo count($fruits).'<br>';
// Add element at the end of the array
array_push($fruits, 'foo');
var_dump($fruits);
echo '<br>';
// Remove element from the end of the array
array_pop($fruits);
var_dump($fruits);
echo '<br>';
// Add element at the beginning of the array
array_unshift($fruits, 'foo');
var_dump($fruits);
echo '<br>';
// Remove element from the beginning of the array
array_shift($fruits);
var_dump($fruits);
echo '<br>';
// Split the string into an array
$string = "Banana, Apple, Peach";
var_dump(explode(",", $string));
echo '<br>';
// Combine array elements into string
echo implode("-", $fruits);
echo '<br>';
var_dump($fruits);
echo '<br>';
// Check if element exist in the array
var_dump(in_array('Apple', $fruits));
echo '<br>';
// Search element index in the array
var_dump(array_search('Apple', $fruits));
echo '<br>';
// Merge two arrays
$vegetables = ["Potato", "Cucumber"];
var_dump(array_merge($vegetables, $fruits));
//var_dump([...$vegetables, ...$fruits]);
echo '<br>';
// Sorting of array (Reverse order also)
rsort($fruits);
var_dump($fruits);
echo '<br>';
// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' => 'ElAmin',
    'surname' => 'Douani',
    'age' => 36
];
print_r($person);
echo '<br>';
// Get element by key
echo $person['name'].'<br>';
// Set element by key
$person['hobbies'] = ['Tennis', 'Video Games'];
// Null coalescing assignment operator. Since PHP 7.4
if (!isset($person['address'])) {
    $person['address'] = 'unknown';
}
var_dump($person);
echo '<br>';
//$person['address'] ??= 'unknown';
//$person['address'] = $person['address'] ?? 'unknown';
// Check if array has specific key

// Print the keys of the array
var_dump(array_keys($person));
echo '<br>';
// Print the values of the array
var_dump(array_values($person));
echo '<br>';
// Sorting associative arrays by values, by keys
ksort($person);
// Two dimensional arrays
$todos = [['this' => 'this'],['that', 'that']];
var_dump($todos);
echo '<br>';