<?php

    //sample 1
    //Defining the global variable 
     
    global $name;
    $name = "rabbi"; // then assign the variable

    function print_name(){
        $name = "Rabbi hello";
        echo $name . "<br>";
    }

        print_name(); //this will print its local value not the global
        echo $name;  // this will print the gloabl value





    //------smaple 2

    // now define a global variable first then assign it
    global $message;
    $message = "Welcome to php";

    function print_message(){
        echo $message . "<br>";
    }

        print_message(); //this didnt print anything because its not globally defined inside the function
        echo $message;  // this gets printed







    //----sample 3
    print "<h1>gloabal value accessed</h1>";
    /*this will print the global variable */
    global $message1;
    $message1 = "lets print this";

    function print_message1(){
        global $message1; //this variable is now defined inside the function
        $message1 = "inside a function the global variable value can be change";
        echo $message1 . "<br>";
    }

    print_message1();
    echo $message1; // this value is also being changed after the variable changed in the function