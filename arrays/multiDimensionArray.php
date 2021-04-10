<?php
    
    //array inside an array is called as multi dimension array
    //array holding one or mulitple arrays

    //single dimension - indexed arrays
    $arr = [0, 1, 2, 3, 4, 5];
    var_dump($arr);


    //single dimension - Associative arrays
    $arr1 = [
        "john" => "john@gmail.com",
        "jenny" => "jenny@gmail.com",
        "rabbi" => "rabbi@gmail.com"
    ];
    var_dump($arr1);

    //multi dimension with indexed
    $arr2 = [
                [0, 1, 2, 3, 4, 5],
                [6, 7, 8],
                [9, 10]
            ];

    var_dump($arr2);

    foreach($arr2 as $singleArr){
        var_dump($singleArr);
    }

    foreach($arr2 as $singleArr){
        echo "[";
        foreach($singleArr as $value){
            echo $value . ",";
        }
        echo "]" . PHP_EOL;
    }

    //multi dimension with associative
    $arr3 = [
        "emailList_1" => 
                        [
                            "john1" => "john_1@gmail.com",
                            "jenny1" => "jenny_1@gamil.com",
                            "rabbi1" => "rabbi_1@gmail.com"
                        ],
        
        "emailList_2" => 
                        [
                            "john2" => "john_2@gmail.com",
                            "jenny2" => "jenny_2@gmail.com",
                            "rabbi2" => "rabbi_2@gmail.com"
                        ]
            ];
    //to print second array keys
    /*
    foreach($arr3 as $keys => $values){
        foreach($values as $Val){
            print_r(array_keys($values));
        }
    }
    */

    foreach($arr3 as $valueArray){
        foreach($valueArray as $values){
            echo $values . PHP_EOL;
        }
    }

    //access all the key value pair. key is string and value is arrays

    foreach($arr3 as $keys => $valueArray){
        echo "The index key is: " . $keys . PHP_EOL;
        foreach($valueArray as $values){
            echo $values .PHP_EOL;
        }
    }




?>