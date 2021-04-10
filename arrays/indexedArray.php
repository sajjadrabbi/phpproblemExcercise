<?php

    //indexed arrays are sequence array of element with integer
    //index numbers
    //mostly it is in sequence
    //new elements get the index of highest index + 1 number
    //you can always break the sequence and add new elements to future index

    $arr = [1, 2, 3, 4, 5];

    var_dump($arr) . PHP_EOL;

    $arr[100] = 6;
    var_dump($arr) . PHP_EOL;

    $arr[] = 101;
    var_dump($arr) . PHP_EOL;

    $arr = ["mon", "tues", "wed", "thurs", "fri", "sat", "sun"];
    var_dump($arr) . PHP_EOL;



?>