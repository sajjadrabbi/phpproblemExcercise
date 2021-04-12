<?php

    function custom_exception_handler($exception){
        echo "Caught Exception: " . $exception->getmessage() . PHP_EOL;
    }

    function add($x, $y):int {

        if( gettype($x) != "integer" || gettype($y) != "integer" ){
            throw new Exception("Value is not integer");
        }

        $result = $x +$y;
        return $result;
    }

    set_exception_handler("custom_exception_handler");
    echo add(4, "6") . PHP_EOL;










?>