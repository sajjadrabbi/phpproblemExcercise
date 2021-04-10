<?php

    $arr = [1, 2, 3, 4, 5];
    print_r($arr);

    unset($arr[4]);
    print_r($arr);

    $arr[] = 5;
    print_r($arr); //here the new key/or index will be assigned to incremented index

    $arr1 = [
        "first" => 1,
        2,
        3,
        "middle" => 4,
        5,
        6,
        "last" => 7
    ];

    print_r($arr1);

    unset($arr1["last"]);//delete the last
    print_r($arr1);

    $arr1["last"] = 10;
    print_r($arr1);

    $arr1[] = 18;
    print_r($arr1);





?>