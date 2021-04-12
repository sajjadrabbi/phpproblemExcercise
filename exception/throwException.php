<?php

    function custom_exception_handler($exception){
        //2.getting the error it is then executed
        echo "Caught Exception: " . $exception->getmessage() . PHP_EOL;
    }

    function divide($x, $y):int {
        if($y <= 0){
            //1.here i made the error and throw the error to the function
            throw new Exception("Divide by zero exception might happen");
        }

        $result = $x / $y;
        return $result;
    }

    //telling the php that this now the new exception handler
    set_exception_handler("custom_exception_handler");

    echo divide(4, 0);





?>