<?php

    $totalScore = 78.87;
    echo $totalScore .PHP_EOL;

    //negative DEcimals
    $temparature = -40.23;
    echo $temparature .PHP_EOL;

    //round
    $price = 4.99;
    echo round($price) .PHP_EOL;

    //compare two double preceision 
    $price = 1.87;
    $bid = 1.97;
    echo (abs($price - $bid) < 0.1) ? "Accepting" : "Rejected";

?>