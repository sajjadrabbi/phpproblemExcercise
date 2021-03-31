<?php

    //defiine a variable 
    $name = "john, smith";
    
    //variable can be used as string and integer
    $message = 1;
    $message = "php is the best!";
    echo $message . "<br>";

    //print variable with doble quotes
    echo "Name of the guy is: $name" . "<br>";
    echo 'Name of the guy is: $name' . "<br>";

    //variable typing  converting the string to integer and vice versa
    $length = "10";
    $breath = 20;
    $area = $length * $breath;
    echo "Area: $area" . "<br>";

    //variable is case sensitive
    $Name = "Walter White";
    echo "$name is not equal to $Name" . "<br>";

    //variable scope 
    $counter = 1;

    function show_counter(){
        $counter = 2;
        echo $counter;
    }
    show_counter();
    echo $counter . "<br>";

    //global variable
    global $count;
    $count = 1;
    function show_count(){
        global $count;
        $count = 2;
        echo $count . "<br>";
    }
    show_count();
    echo $count . "<br>";

    //static variable
    function counter_static(){
        static $count = 1;
        echo $count . "<br>";
        $count = $count + 1;
    }
    counter_static();
    counter_static();
    counter_static();

    //predifended variables
    function print_global_variables(){
        echo $GLOBALS['count'] . "<br>";
    }
    print_global_variables();

    //variables of variables
    $counttocount = "count";
    echo $counttocount = "count";

    //isset function
    echo isset($$counttocount) ? 'variable is set' : 'variable is not set';

?>