<?php

    class Bank{

        //Properties
        public $accNo;
        public $name;
        public $balance = 1000;

        //Methods
        function depositAmount($amt) : int{

            $this->balance += $amt;
            return $this->balance;
        }


        function deductAmount($amt) : int{

            $this->balance -= $amt;
            return $this->balance; 
        }


        function checkBalance(){
            echo "The balance is $this->balance" . PHP_EOL;
        }

    }

    $user1 = new Bank();

    $user1->accNo = 101;
    $user1->name = "Rabbi";
    $user1->depositAmount(50);
    $user1->checkBalance();




?>