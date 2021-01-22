<?php
/**
 * Created by PhpStorm.
 * User: Computer
 * Date: 20/01/2021
 * Time: 22:25
 */
require_once "Person.php";

class Student extends Person
{
    public $studentId;

    public function __construct($name, $surname, $studentId)
    {
        $this->age = 18;
        $this->studentId = $studentId;
        parent::__construct($name, $surname);
    }

}