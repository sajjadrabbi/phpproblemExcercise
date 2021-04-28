<?php

class Database1
{
    function getConnection()
    {
        echo "Default it is connected to MySQL." . PHP_EOL;
    }
}

class OracleDatabase extends Database1
{
    function getConnection()
    {
        echo "It is connected to Oracle." . PHP_EOL;
    }
}

$db1 = new Database1();
$db2 = new OracleDatabase();

$db1->getConnection();
$db2->getConnection();
