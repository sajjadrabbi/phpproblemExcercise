<?php
    
    //print even numbers for 1 to 10

    /*
    while(condition){
        code
    }
    */

    //sample 1
    $i = 1;
    while($i <= 10){

        echo "$i is the value <br>" . PHP_EOL;
        $i++;
    }
    echo PHP_EOL;
    //sample 2
    $i = 0;
    while($i <= 10){
        
        $result = $i % 2;
        if($result == 0){
            echo "$i is even number <br>" .PHP_EOL; 
        }

        $i++;
    }





?>