<?php

    $val = 10;
    echo $val++ . PHP_EOL;
    $counter = $val++;
    echo $counter . PHP_EOL; //this prints 11 not 12 because the post increments happens at last, means after the asign of the val
    echo $val . PHP_EOL;

    //guess
    $val = 5*2+5;
    echo $val . PHP_EOL;

?>