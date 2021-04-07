<?php
    /*
    do{
       -----code
    }while(condition);
    */

    $max_value = 100;
    
    $i = 2;
    do{
        echo "$i is the value <br>" . PHP_EOL;
        $i *= 2;
    }while( $i < $max_value);



?>