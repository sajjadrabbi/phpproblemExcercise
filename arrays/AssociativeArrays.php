<?php

    //in associative arrays, you specific the index
    //index => value
    //key => value -- key is the index and value is the value at that  index


    //indexed array
    $arr = ["Mon", "Tues", "Wed", "Thurs", "Fri", "Sat", "Sun"];
    var_dump($arr);
    foreach($arr as $value){
        echo $value . PHP_EOL;
    }

    //Associative Array
    $arr = ["Monday"=> "Mon", 1 => "Tues", 2 => "Wed", 3 => "Thurs", 
            4 => "fri", 5 => "Sat", "Six" => "Sun" ];

    var_dump($arr);
    foreach($arr as $value){
        echo $value . PHP_EOL;
    }

    foreach($arr as $key => $value){
        echo $key . " => " . $value . PHP_EOL;
    }

    foreach($arr as $key1 => $value1){
        echo $key1 . " => " . $value1 . PHP_EOL;
    }

    //print all the keys
    print_r(array_keys($arr));

    //acess the values only
    foreach($arr as $value){
        echo $value . PHP_EOL;
    }

    $userDetails = [
        "john" => "john@gmailcom",
        "jenny" => "jenny@gmail.com",
        "rabbi" => "rabbi@gmail.com"
    ];
    var_dump($userDetails);

    echo $userDetails["john"] . PHP_EOL;
    echo $userDetails["jenny"] . PHP_EOL;
    echo $userDetails["rabbi"] . PHP_EOL;

    $userDetails["shezan"] = "shezan@gmail.com";
    var_dump($userDetails);

    //$userDetails[] = ["coco" => "coco@gmail.com"];
    //var_dump($userDetails);

    $userDetails[] = "sajjad@gmail.com";
    var_dump($userDetails);







?>