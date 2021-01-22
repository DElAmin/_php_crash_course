<?php
/**
 * Created by PhpStorm.
 * User: Computer
 * Date: 20/01/2021
 * Time: 21:58
 */

class Person {
    public $name;
    public $surname;
    protected $age;
    public static $counter = 0;

    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
        self::$counter++;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public static function getCounter()
    {
        return self::$counter;
    }
}