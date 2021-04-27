<?php

use SportsCar as GlobalSportsCar;

abstract class Car
{
    abstract function applyBreak();

    function hello()
    {
        echo "Hello from Car Class" . PHP_EOL;
    }
}

class SportsCar extends Car
{
    function applyBreak()
    {
    }
}

$car1 = new SportsCar();
$car1->applyBreak();
$car1->hello();

//cannot create isntance of abstract class
//$c = new Car();