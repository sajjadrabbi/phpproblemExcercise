<?php

require_once "Car.php";

class SportsCar implements Car
{
    public function applyBreak()
    {
        echo "Applying Breaks" . PHP_EOL;
    }

    public function increaseSpeed()
    {
        echo "Increasing Speed" . PHP_EOL;
    }

    public function decreaseSpeed()
    {
        echo "Decreasing Speed" . PHP_EOL;
    }
}
