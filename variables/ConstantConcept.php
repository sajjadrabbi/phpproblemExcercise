<?php

    //define a constant
    define("LANGUAGE", "PHP");
    echo LANGUAGE . " <br>";

    //dont define again for the constant
    define("LANGUAGE", "JAVA");
    echo LANGUAGE . "<br>";

    //we can call a constant inside a string by assigning it to a variable
    $lang = LANGUAGE;
    print "$lang is my favourite lanugage";

?>