<?php

    //good---always should use uppercase
    define("LANGUAGE","PHP");
    define("VERSION","7.3");

    //bad---dont use _ for the constant
    define("__CONSTANT__", "Wrong practice");

    //avoid same name in constant
    $name = "Rabbi, Sajjad";
    define ("NAME","Rabbi, Sajjad");

    //bad----dont use numbers to start a variable name
    $_1message = "hello";
    define ("_1message","hello");
    echo $_1message . _1message;

?>