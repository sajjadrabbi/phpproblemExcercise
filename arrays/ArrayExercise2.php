<?php

    $arr = [
        "planet" =>
         [
            "sun" => [ "temp" => "hot", 
                        "color" => "red" ],

            "moon" => [ "temp" => "cold", 
                        "color"  => "white" ],

            "earth" => [ "temp" => "normal", 
                        "color" => "blue" ]
         ]
    ];	


    foreach($arr as $key1 => $value1){

        foreach($value1 as $key2 => $value2){

            foreach($value2 as $key3 => $value3){

                echo $key1 . " is called " . $key2 . " and is " . $key3 ." $value3" . PHP_EOL;
            }
        }

    }

?>