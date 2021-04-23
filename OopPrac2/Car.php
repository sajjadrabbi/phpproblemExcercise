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

$car2 = new Car();
$car2->name = "Ferrrari";
$car2->color = "Red";
$car2->sayHello();
echo "$car2->name is the big car and its color is $car2->color." . PHP_EOL;
