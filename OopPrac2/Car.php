<?php

//this is a Car class
class Car
{
    public $name;
    public $color;

    function sayHello()
    {
        echo "Hello from Car Class" . PHP_EOL;
    }
}

$car1 = new Car();
$car1->name = "Ferrrari";
$car1->color = "Red";
$car1->sayHello();

echo "$car1->name is the big car and its color is $car1->color." . PHP_EOL;
