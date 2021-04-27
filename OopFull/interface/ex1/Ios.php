<?php

require_once "Phone.php";
class Ios implements Phone
{

    public function makeCall($number)
    {
        echo "Calling to $number." . PHP_EOL;
    }

    public function sendMessage($number, $message)
    {
        echo "Sending $message to $number." . PHP_EOL;
    }
}

$call1 = new Ios();

$call1->makeCall(123);
$call1->sendMessage(127, "saakhdkshjakdj");
