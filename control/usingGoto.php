<?php

    $inputValue = 0;
    if($inputValue <= 0){
        goto error_block;
    }

    exit();
    error_block:
        echo "this is a error block and will execute anyway" . PHP_EOL;
    
        for($count=0; $count <=10; $count++ ){
            if($count == 2){
                goto loop2;
            }
        }
    
    loop2:
        echo "came out" . PHP_EOL;


?>