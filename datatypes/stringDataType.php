<?php
    //define string and print with quotation
    $name1 = "Sajjad, Rabbi";
    $name2 = "Rabbi";

    echo "$name1 and $name2" . PHP_EOL;
    echo '$name1 and $name2' . PHP_EOL;

    //Combine String variables with concatination
    $name3 = $name1 . " - " . $name2;
    echo $name3 . PHP_EOL;

    //use back slack to escape the characters
    $name4 = "This is a \"Special\" string"; //now it can be printed
    echo $name4 . PHP_EOL;

    $name4 = "This is a \"Special\" string"; //now it can be printed
    echo $name4 . PHP_EOL;

    $name4 = "\t\t\tThis is a \"Special\" string"; //now it can be printed
    echo $name4 . PHP_EOL;

    echo strlen($name4);
    echo PHP_EOL;

    $result = strcmp($name1, $name2);
    echo $result .PHP_EOL;

?>