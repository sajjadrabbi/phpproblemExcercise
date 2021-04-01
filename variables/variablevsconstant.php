<?php

    /*
    1)No need to use dollar sign to use constant 
    2)Constant are only define via define method
    3)value can be asigned only once 
    4)constant has global scope. can access anywhere
    5)constant can be used to acess the constants.
    6)always use the double qutation for defining the name
    */

    $name = "Rabbi, Sajjad";
    define ("name", "Rabbi, Sajjad");

    echo $name . name;

    //able to change to variable but not constant
    $name = "Shezan, Raihan";
    define("name","Shezan, Raihan");

    echo $name . name;

    echo "<br>";
    //lets see the scope of variable and constant
    function print_constant(){
        echo $name . name;
    }
    print_constant();



?>