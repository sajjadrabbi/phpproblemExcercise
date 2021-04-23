<?php

class Bank
{
    //properties
    public $accNo;
    public $name;
    public $balance = 0;

    //methods
    function depositAmount($amt)
    {
        $this->balance += $amt;
        return $this->balance;
    }

    function deductAmount($amt)
    {
        if ($this->balance <= 0) {
            echo "No Balance in the Amount" . PHP_EOL;
            return;
        }

        if ($this->balance <= $amt) {
            echo "Requested Amount is greater than Blance" . PHP_EOL;
            return;
        }
        $this->balance -= $amt;
    }

    function checkBalance()
    {
        echo "The amount left in the bank is $this->balance." . PHP_EOL;
    }
}

$user1 = new Bank();

$user1->accNo = 415;
$user1->name = "John Smith";
$user1->checkBalance();
$user1->depositAmount(5000);
$user1->deductAmount(1000);
$user1->checkBalance();
echo "$user1->name has $user1->balance in his bank." . PHP_EOL;
