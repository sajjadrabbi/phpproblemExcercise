<?php
    //if index is not specified, php will use the increment of
    //the largest previously used integer key

    $arr = [];
    $arr[0] = 1;
    $arr[1] = "string";
    $arr[4] = true;
    $arr[10] = 14.5;

    //adding new values to array
    $arr[] = "new string 1";
    $arr[] = "new string 2";

    //guess the output
    var_dump($arr);

    $arr[0] = "previously 1 and now changed value to string";
    foreach($arr as $values){
        echo $values .PHP_EOL;
    }
?>