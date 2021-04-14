<?php

    class Car{

        public $name;
        public $color;

        function sayHello(){
            echo "Hello from the Car class" . PHP_EOL;
        }
    }
    //First instance of the Car
    $car1 = new Car(); //creating an Instance/Object of a class
    $car1 -> name = "Ferrari";
    $car1 -> color = "red";
    $car1 -> sayHello();
    echo "$car1->name color is $car1->color." . PHP_EOL;
    


    //Second instance of the Car
    $car2 = new Car(); //creating an Instance/Object of a class
    $car2->name = "BMW";
    $car2->color = "blue";
    $car2 -> sayHello();
    echo "$car2->name color is $car2->color." . PHP_EOL;












?>