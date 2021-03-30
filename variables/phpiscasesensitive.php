<?php
    //php is  not case sensitive with key words
    echo "this is a message";
    ECHO "this is a message with a capitale ECHO" . "<br>";  

    //only variables are case sensitive
    $name = "Sam";
    $Name = "rabbi";

    echo "$name" . ": this variable is with lower case var" . "<br>";
    echo "$Name" . ": this variable is with Uppercase var" . "<br>";

    function print_message(){
        echo "function name not case sensitive";
    }

    print_message();
    
    ?>