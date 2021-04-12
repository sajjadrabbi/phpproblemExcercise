<?php


    try{
        throw new Exception("Raise an exception");
    }catch(Exception $exception){
        
        echo "Caught Exception: " . $exception->getmessage() . PHP_EOL;

    }finally{
        echo "this will executed first";
    }













?>