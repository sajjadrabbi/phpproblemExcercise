<?php

    function custom_exception_handler( $exception ){
        echo "Caught Exception: " . $exception->getmessage() . PHP_EOL;
    }


    function divide(int $x, $y): int{

        if($y <= 0){
            
            try{
                throw new Exception("divided by zero");
            }finally{
                echo "this will always get printed first" . PHP_EOL;
            }
        }

        $result = $x / $y;
        return $result;
    }

    set_exception_handler("custom_exception_handler");

    echo divide(4,0);














?>