<?php

require_once "Car.php";
require_once "CarModel.php";
//here is an example of two interface with one class
class SportsCar implements Car, CarModel
{
    public $model;

    //from Car interface
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

    //from CarModel interface
    public function setModel($model)
    {
        $this->model = $model;
    }
    public function getModel(): string
    {
        return $this->model;
    }
}
