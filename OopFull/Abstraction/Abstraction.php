<?php

abstract class Shape
{
    protected $color;
    abstract function calculateArea();
    public function getColor()
    {
        return $this->color;
    }
}

class Rectangle extends Shape
{
    public $length;
    public $breath;

    function __construct($color, $length, $breath)
    {
        $this->color = $color;
        $this->length = $length;
        $this->breath = $breath;
    }

    function calculateArea()
    {
        return $this->length * $this->breath;
    }
}

class Circle extends Shape
{
    public $radius;

    function __construct($color, $radius)
    {
        $this->color = $color;
        $this->radius = $radius;
    }

    function calculateArea()
    {
        return ($this->radius * $this->radius) * 3.14;
    }
}

$rec = new Rectangle("red", 10, 20);
echo "Rec area: " . $rec->calculateArea() . PHP_EOL;
echo "Rec color: " . $rec->getColor() . PHP_EOL;

$cir = new Circle("blue", 10);
echo "Cir area is " . $cir->calculateArea() . PHP_EOL;
echo "Cir color is: " . $cir->getColor() . PHP_EOL;
