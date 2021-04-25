<?php

class Bank
{
    //Properties
    private $balance;

    //Construct
    function __construct($balance)
    {
        $this->balance = $balance;
    }

    //Getter
    function getBalance(): string
    {
        return $this->balance;
    }

    //Methods
    function depositAmount($amt)
    {
        $this->balance += $amt;
        return $this;
    }

    function deductAmount($amt)
    {
        if ($amt > $this->balance) {
            echo "Amount is greater than the balance amount" . PHP_EOL;
            return $this;
        } else {
            $this->balance -= $amt;
            return $this;
        }
    }
    function __destruct()
    {
        echo "The balance is $this->balance." . PHP_EOL;
    }
}

$user1 = new Bank(10000);
$user1->depositAmount(1000)->deductAmount(5000);
