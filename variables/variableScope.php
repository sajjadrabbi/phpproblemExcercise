<?php
    //---sample 1

    $name = "Rabbi";

    function print_name(){
        $name = "Rabbi_hello";
        echo "Name in function: " . $name . "<br>";
    }

    //---printing the function with same vaariable
    print_name();
    echo $name  . "<br>";

    //---sample 2

    $message = "lets see if this message gets printed or not through the function";

    function lets_print(){
        echo "$message";
    }
    echo "so cant print at all";
?>