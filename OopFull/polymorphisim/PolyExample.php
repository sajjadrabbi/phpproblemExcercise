<?php

interface Database
{
    function openConnection();
}

class OrcaleDatabase implements Database
{
    function openConnection()
    {
        echo "Using the Orcale Driver to establish the connection" . PHP_EOL;
    }
}
class MySQLDatabase implements Database
{
    function openConnection()
    {
        echo "Using the MySQL Driver to establish the connection" . PHP_EOL;
    }
}
