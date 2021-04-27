<?php

require_once "Car.php";
require_once "SportsCar.php";

$car1 = new SportsCar();

$car1->applyBreak();
$car1->increaseSpeed();
$car1->decreaseSpeed();
