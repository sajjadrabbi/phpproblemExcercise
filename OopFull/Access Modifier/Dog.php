<?php

class Dog
{
    public $color;
    public $breed;

    public function dogBark()
    {
        echo "woof! woof!" . PHP_EOL;
    }

    public function dogSleep()
    {
        echo "ZZZZZZzzzzzzzzzzz" . PHP_EOL;
    }
}

$dog1 = new Dog();
$dog1->color = "Black";
$dog1->breed = "German Shepard";

$dog1->dogBark();
$dog1->dogSleep();

echo "My dog color is $dog1->color and is $dog1->breed." . PHP_EOL;
