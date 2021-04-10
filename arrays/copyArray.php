<?php
    $arr = [0, 1, 2, 3, 4, 5];

    //sample 1
    $arr1 = $arr;
    var_dump($arr1);

    //sample 2
    foreach($arr1 as $values){
        $arr2[] = $values;
    }
    var_dump($arr2);

    //sample 3
    $arr3 = ["3" => "John", "1" => "Rabbi", "2" => "Roger"];
    $arr4 = $arr3;
    var_dump($arr4);

    //sample 4
    $arr5 = [];
    foreach($arr4 as $keys => $values){
        $arr5[$keys] = $values;
    }

    var_dump($arr5);




?>