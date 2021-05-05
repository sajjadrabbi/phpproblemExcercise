<?php

spl_autoload_register(function ($className) {
    echo "Loading the class $className." . PHP_EOL;
    require_once("$className.php");
});

$file1 = new Filess();
$db1 = new Databasee();

$file1->hello();
$db1->hello();
