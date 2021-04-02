<?php

    //define and check null
    $name = NULL;
    echo $name . PHP_EOL;
    echo ($name) ? "has value" : "It is null" . PHP_EOL;

    //check if the variable is null or not
    $name = "0";
    echo (!is_null($name)) ? "has value" . PHP_EOL : "null" . PHP_EOL; //this 

    //remove the variable from the memmory
    echo "that is: " . $name . PHP_EOL;

    unset($name);
    echo (is_null($name)) ? "This is null" . PHP_EOL : "This is not null" . PHP_EO;
    echo "that is: " . $name . PHP_EOL;


?>