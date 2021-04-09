<?php

//remember [] means empty array
    $arr = []; //empty array

    echo count($arr) . PHP_EOL;
    var_dump($arr) . PHP_EOL;
    print_r($arr) . PHP_EOL;

    if(empty($arr)){
        echo "array is empty" . PHP_EOL;
    }

    $arr = [10, 4, 4, 6 , 8, 9];
    $arr = [10];
 
    $arr[0] = 1;
    $arr[1] = 2;
    $arr[2] = 3;
    $arr[3] = 4;
    $arr[4] = 5;
    $arr[5] = 6;

    $arr = [[6, 6, 8, 8], ["hi", "hello", "hey"], [[[[[4]]]]] ];
    echo $arr[2][0][0][0][0][0];
    //var_dump($arr) . PHP_EOL;
?>