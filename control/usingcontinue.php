<?php

    $i = 1;
    while(true){
        
        $result = $i % 2;
        
        if($result == 1){
            $i++;
            continue;
        }

        if($i > 10){
            break;
        }

        echo "$i is even number" . PHP_EOL;
        $i++;
    }


?>