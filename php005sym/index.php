<?php

require 'Car.php';

class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

$car = new Car('red');

$person = new Person('John', 25);

var_dump($car);

var_dump($person);