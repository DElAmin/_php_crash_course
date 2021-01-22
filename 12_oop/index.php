<?php

// What is class and instance
require_once "Person.php";
require_once "Student.php";

$person = new Person('ElAmin', 'Douani');
$person_1 = new Person('Ahmed', 'Dahou');
$person_2 = new Person('Abdou', 'Samed');
//$person->name = 'ElAmin';
//$person->surname = 'Douani';
$person->setAge(36);
echo '<pre>';
var_dump($person);
echo '</pre>';

echo $person->name.'<br>';
echo $person->getAge().'<br>';

echo Person::$counter.'<br>';

$student = new Student('ElAmin', 'Douani', '1234');
echo '<pre>';
var_dump($student);
echo '</pre>';

print_r($person);

// Create Person class in Person.php

// Create instance of Person

// Using setter and getter