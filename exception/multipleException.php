<?php

    function custom_exception_handler($exception){
        echo "Caught Exception: " . $exception->getmessage() . PHP_EOL;
    }

    function divide($x, $y): int {

        try{

            if($y <= 0){
                throw new Exception("Divide by zero Exception might happen");
            }

            $result = $x / $y;

        }catch(Exception $Exception){
            throw new Exception( "Divide method has input param 
            is less thanzero." . $Exception->getmessage() );
        }

        return $result;
    }

    set_exception_handler("custom_exception_handler");
    divide(1,0);














?>