<?php

class Car
{
    public $name;

    //getter methods
    function getName(): string
    {
        return $this->name;
    }

    //setter methods
    function setName($name)
    {
        $this->name = $name;
    }
}

$car1 = new Car();
$car1->setName("BMW");
echo "This is th car name " . $car1->getName() . PHP_EOL;
$car1->setName("Ferrari");
echo "Now is th car name is changed " . $car1->getName() . PHP_EOL;

$car2 = new Car();
$car2->setName("hundai");
$car2->getName();
echo "This is th another object of the car " . $car2->getName() . PHP_EOL;
