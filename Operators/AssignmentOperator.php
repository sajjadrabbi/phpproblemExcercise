<?php

    $marks = 10;

    $name = "Rabbi";
    //math operator
    $counter = 1;
    $counter = $counter + 1;
    $counter += 1; //value 2 is added to 1
    echo $counter . PHP_EOL;

    $marks += 10;
    echo $marks . PHP_EOL;

    echo $name . PHP_EOL;
    $name1 = "Rabbi";
    $name1 .= ", ";
    $name1 .= "Hasan";
    echo $name1 . PHP_EOL;

    //sample 2

    $counter = 10;
    $counter = $counter - 1;
    $counter -= 1; //value 2 is added to 1
    echo $counter . PHP_EOL;

    //use *= operator
    $square = 10;
    $square *= $square;
    echo $square . PHP_EOL;

    //sample 3
    $divide = 50;
    $divide /= 2; //$divide = $divide / 2;
    echo $divide . PHP_EOL;

    //use %=
    $remainder = 50;
    $remainder %= 2;
    echo $remainder . PHP_EOL;

?>