<?php
    /*
    Learn to use  the following string funtion
    -number of words
    -replace string
    -reverse string
    -remove white space
    -shuffle strings
    -find position case insensitive
    -upper and lowercase
    -word wrap the string and display it.
    */

    $content = "You can do string operation easily with string function";
    $findword = "operation";
    $position = false;

    echo "$content" . PHP_EOL;

    //word count
    echo "The number of words in this string: " . str_word_count($content) . PHP_EOL;

    //replace strings
    echo "find and replace operation with manipulation: " . 
    str_replace("operation", "manipulation", $content) . PHP_EOL;

    //reverse strings
    echo strrev($content) . PHP_EOL;

    //find position case insensitive
    echo "$content" . PHP_EOL;
    echo stripos($content, "OPERATION") . PHP_EOL;

    //Uppercase and lowercase
    echo strtoupper($content) . PHP_EOL;
    echo strtolower($content) . PHP_EOL;

    //word wrap of string
    $content = "     Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates modi dolorum accusamus nostrum ex mollitia inventore soluta aliquid, sunt vitae, labore necessitatibus facilis aspernatur alias minus saepe illum est minima molestiae debitis fugit! Delectus eos doloribus officiis ratione vel velit!";

    echo $content . PHP_EOL;
    $neww = trim($content);
    echo $neww . PHP_EOL;
    echo wordwrap($content, 50) . PHP_EOL;









?>