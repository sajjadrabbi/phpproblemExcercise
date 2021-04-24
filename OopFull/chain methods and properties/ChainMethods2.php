<?php

class ChainMethods
{
    public $name = "Smith";

    function method1()
    {
        echo "this is method 1 $this->name." . PHP_EOL;
        $this->name = "Koman";
        return $this;
    }

    function method2()
    {
        echo "this is method 2 and name is $this->name." . PHP_EOL;
    }
}

$cm = new ChainMethods();
$cm->method1()->method2();
