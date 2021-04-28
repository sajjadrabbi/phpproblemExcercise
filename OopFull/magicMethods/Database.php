<?php

class Database
{

    public $db = "Oracle";
    public $dbname = "Students";
    public $tablename = "tbl_users";

    function hello()
    {
        return "hello" . PHP_EOL;
    }

    function __debugInfo()
    {
        echo "Take the control to print the variables." . PHP_EOL;
    }
}

$db = new Database();
var_dump($db);
