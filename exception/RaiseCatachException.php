<?php

    //funtion of divide
    function divide($x, $y):int {

        if($y <= 0){
            //when the error is found throw the message to catch block
            throw new Exception("Divide by zero exception might happen");
        }

        $result = $x / $y;
        return $result;
    }

    try{
        //executing the code which might give error
        //here i am runnning my code and also checking for errors
        $result = divide(8,0);
        echo $result . PHP_EOL;

    }catch(Exception $e){
        //from the throw keyword, catch is accepts the exception
        echo "Caught Exception: " . $e->getmessage() .PHP_EOL;
    }

    //now i can execute other line without the eroor getting in the way
    //or not letting the other get executed


    //again
    function dividee($x, $y):int {
        
        if($result <= 0){
            throw new Exception("Divide by zero exception might happen");
        }
        $result = $x / $y;
        return $result;
    };

    try{
        
        $result = dividee(4,0);
        echo $result;

    }catch(Exception $e){
        echo "caught exception: " . $e->getmessage() . PHP_EOL;
    }










?>