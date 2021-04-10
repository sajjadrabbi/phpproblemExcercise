<?php

    $arr = [1, 2, 3, 4, 5, 6];
    $Employee = [
        "name" => "John Smith",
        "gender" => "Male",
        "age" => 5,
        "blood" => "b+"
    ];

    foreach($arr as $value){
        echo $value . PHP_EOL;
    }
    foreach($Employee as $keys => $values){
        echo $keys . " is " . $values . PHP_EOL;
    }


    $employee = [100, 101, 102];
    foreach($employee as $emp){
        echo "EmpID:" . $emp . PHP_EOL;
    }

    $emp_details = [

        "100" => [
                    "Name" => "John",
                    "job" => "PHP developer"
                ],
        "101" => [
                    "Name" => "Rabbi",
                    "job" => "PHP senior developer"
                ],
        "102" => [
                    "Name" => "John",
                    "job" => "PHP junior developer"
                ]

        ];
    
    foreach($emp_details as $key => $valuee){
        
        foreach($valuee as $ky => $val){
            echo $ky . " is " . $val . PHP_EOL;
        }
    }


?>