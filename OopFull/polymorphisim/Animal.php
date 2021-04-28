<?php

interface Animal
{
    public function makeSound();
}

class Dogo implements Animal
{
    function makeSound()
    {
        echo "Woof! Woof! Woof!" . PHP_EOL;
    }
}
class Cat implements Animal
{
    function makeSound()
    {
        echo "Meow! Meow! Meow!" . PHP_EOL;
    }
}
//polymorphisim is when two class are implementing same method 
//but doing different functionality with same method is called polymorphisim

$cat1 = new Cat();
$cat1->makeSound();

$dog1 = new Dogo();
$dog1->makeSound();
