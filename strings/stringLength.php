<?php
    $name = "Rabbi";
    echo strlen($name) . PHP_EOL;

    echo strlen($name1) . PHP_EOL;

    $name = "";
    echo strlen($name) .PHP_EOL;
    
    $name = null;
    echo strlen($name) . PHP_EOL;

    $name = "something";
    if(strlen($name) > 0){
        echo $name .PHP_EOL;
    }else{
        echo "$name is empty" . PHP_EOL;
    }

    $name = "something";
    if(strlen($name) > 0){
        echo $name .PHP_EOL;
    }else{
        echo "$name is empty" . PHP_EOL;
    }
    



?>