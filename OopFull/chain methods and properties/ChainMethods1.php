<?php

class ChainMethods
{
    function method1()
    {
        echo "This is method 1" . PHP_EOL;
        return $this;
    }

    function method2()
    {
        echo "This is method 2" . PHP_EOL;
        return $this;
    }
}

$cm = new ChainMethods();
$cm->method1()->method2()->method1()->method2();
