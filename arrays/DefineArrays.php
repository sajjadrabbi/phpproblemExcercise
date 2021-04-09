<?php

    //define an array
    $arr = [ 1, 2, 3 ];

    //function to print an array
    var_dump($arr);

    //human readable
    print_r($arr);
    
    //error
    //echo $arr;  only shows the data type

    //acess and print
    echo $arr[0] . PHP_EOL;
    echo $arr[1] . PHP_EOL;
    echo $arr[2] . PHP_EOL;
    echo PHP_EOL;
    echo "$arr[0]" .PHP_EOL;
    echo "$arr[1]" .PHP_EOL;
    echo "$arr[2]" .PHP_EOL;
    
    //$arr is array variable
    //$arr[0] is a array element
    //0 is a index of an array
    //array index starts with 0 not 1
    //array can store any type of value string, integer, double or boolean
    // array has length based on the number of the element it has
    //you can have array inside of an array
    //usecase: collection of variable together

    echo "array length: " . count($arr) . PHP_EOL;

    //loop thru the array using for loop
    for($i = 0; $i <= count($arr); $i++){
        echo $arr[$i].PHP_EOL;
        echo "$arr[$i]" . PHP_EOL;
    }

    //acess array element inside the string using constant
    const ARRAY_ELEMENT = 1;
    echo "{$arr[ARRAY_ELEMENT]}" . PHP_EOL;

    //change array element
    print_r($arr);
    $arr[0] = 5;
    $arr[1] = 6;
    $arr[2] = 7;
    print_r($arr);

    //change the data types
    var_dump($arr);
    $arr[0] = "this is php";
    $arr[1] = true;
    $arr[] = 7.5;
    var_dump($arr);

    //store any data types in arrays
    //see the indentation of arrays
    $arr1 = [
                1,
                "string",
                23.2,
                4,
                true
            ];
    var_dump($arr);
?>