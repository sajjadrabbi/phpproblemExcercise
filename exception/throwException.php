<?php
        declare(strict_types = 1);
    //this function can be called neumarous times
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
    


    function add(int $x, $y ):int {

        if( gettype($x) != "integer" || gettype($y) != "integer"){
            throw new Exception("this is string cant add it");
        }
        return $x + $y;
    }

    //telling the php that this now the new exception handler
    set_exception_handler("custom_exception_handler");

    echo divide(4, 0) . PHP_EOL;


    
    echo "this is also a value" . add(3,"4");





?>