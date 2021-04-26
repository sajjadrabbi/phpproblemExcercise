<?php

require_once "Animal.php";
require_once "Dog.php";
require_once "Tiger.php";

//$animal1 = new Animal("Dog", false);

$dog1 = new Dog("Dog", false);
$dog1->doesHunting();
$dog1->makeSound();

$tiger1 = new Tiger("Tiger", true);
$tiger1->doesHunting();
$tiger1->makeSound();
