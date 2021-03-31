<?php
    //sample
    //define constant
    //define(NAME OF THE CONSTANT, VALUE OF THE CONSTANT);

    define("LANGUAGE", "PHP");
    $lang = LANGUAGE;

     echo "this program is written using $lang <br>";
     echo "this program is written using" . LANGUAGE . "<br>";
     echo "this program is written using LANGUAGE <br>";


     //sample 2
     define("LANGUAGE", "JAVA"); //here it will stay the same and will not change

     echo "this program is written using " . LANGUAGE ."<br>";

    
     //sample 3
    $LANGUAGE = "JAVA"; //if there is same name but different types like constant and variable then same name doesnt matter
    echo "this program is written using " . $LANGUAGE ."<br>";
    echo "this program is written using " . LANGUAGE ."<br>";

    //sample 4
    //defeine ("1VERSION", 7.3);
    //echo 1VERSION;    here constant name cant start with numbers

    //sample 5
    //define("NAME", "");
    //echo isset(NAME) ? 'variable is set' : 'variable is not set';
    //isset cant identify constant

    //sample 6
    echo constant('LANGUAGE');


?>