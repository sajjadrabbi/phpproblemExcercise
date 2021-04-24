<?php

class Bank
{

    //Properties
    public $accNo;
    public $name;
    public $balance = 1000;

    function __construct($accNo, $name)
    {
        $this->accNo = $accNo;
        $this->name = $name;
    }

    //Methods
    function depositAmount($amt): int
    {

        $this->balance += $amt;
        return $this->balance;
    }


    function deductAmount($amt)
    {

        if ($this->balance <= 0) {
            echo "No balance in the Account" . PHP_EOL;
            return;
        }

        if ($this->balance <= $amt) {
            echo "Requested Amount is greater than Balance." . PHP_EOL;
            return;
        }

        $this->balance -= $amt;
    }

    function __destruct()
    {
        echo "The balance is $this->balance" . PHP_EOL;
    }
}

$user1 = new Bank(101, "Rabbi");
$user1->depositAmount(50);
$user1->deductAmount(10);
echo $user1->name . " ID is $user1->accNo and has bank balance $user1->balance." . PHP_EOL;
