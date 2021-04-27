<?php

require_once "Car.php";
require_once "CarModel.php";
require_once "SportsCar.php";

$car1 = new SportsCar();

$car1->applyBreak();
$car1->increaseSpeed();
$car1->decreaseSpeed();
$car1->setModel("Lamborghini");
echo "Car Model: " . $car1->getModel() . PHP_EOL;
