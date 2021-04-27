<?php

abstract class Database
{
    public $connection;
    public $connectionActive = false;

    abstract function getConnection();
    abstract function setConnection($dbName);
}
