<?php
    //sort() and rsort()
    //INDEX ARRAY
    $arr = [5, 3, 6, 2, 1, 0, 4];//not sorted
    print_r($arr);

    sort($arr);  //arranging the values in ascending order
    print_r($arr);

    rsort($arr);//arranging he value in decending order
    print_r($arr);



    //asort and arsort
    //ASSOCIATIVE ARRAY
    $arr1 = [
        "3" => "john",
        "1" => "Rabbi",
        "2" => "Abir"
    ];

    print_r($arr1);
    
    asort($arr1);//arranging the values in ascending
    print_r($arr1);

    arsort($arr1);//arrranging the values in decending order
    print_r($arr1);



    //ksort() and krsort()
    //KEYS SORT
    ksort($arr1);
    print_r($arr1);

    krsort($arr1);
    print_r($arr1);





?>