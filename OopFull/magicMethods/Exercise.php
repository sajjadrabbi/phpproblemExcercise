<?php

class Exercise
{
    public $nam = "This is a test";
    private $id = "id is here";
    private $age;

    function __set($name, $value)
    {
        echo "Set method is not found" . PHP_EOL;
        echo $name . " = " . $value . PHP_EOL;
    }
    function __get($name)
    {
        echo "Get method is not found" . PHP_EOL;
        echo $name . PHP_EOL;
    }

    function __call($name, $arguments)
    {
        echo "$name does not exists and ur arguement is $arguments" . PHP_EOL;
        var_dump($arguments);
    }

    function __toString(): string
    {
        echo "Name: " . $this->nam . PHP_EOL;
        return "To string method is called" . PHP_EOL;
    }
    function __debugInfo()
    {
        echo "Take the control the variables" . PHP_EOL;
    }
}

$exer1 = new Exercise();
//__set example
$exer1->id = "This is new";
//__get example
echo $exer1->id;
//__call example
$exer1->helloMethod("I from call");
//__toString example
echo $exer1;
//__debugInfo example
var_dump($exer1);
