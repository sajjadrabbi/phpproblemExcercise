<?php

require_once "Database.php";

class DBConnection extends Database
{
    function setConnection($dbName)
    {
        $this->connectionActive = true;
        $this->connection = "Connection handler to Database" . PHP_EOL;
    }

    function getConnection()
    {
        if ($this->connectionActive) {
            return $this->connection;
        }
    }
}

$db1 = new DBConnection();
$db1->setConnection("Test");
echo $db1->getConnection();
