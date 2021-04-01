<?php

    /*
        AND - both should be true to be true
        OR - any one can be true to be true
        && - both should be true to be true
        || - any one can be true to be true
        ! - if not
    */
    //sample 1-----AND condition with ternanry conditional operator
    $permission = true;
    $loggedin = true;
    $user = "Rabbi,Sajjad";
    echo ($permission AND $loggedin) ? "Hello user" : "Hello guest";
    echo PHP_EOL;

    //smaple 2--------OR
    $student = "Rabbi";
    $mathspassed = false;
    $sciencepassed = true;

    echo ( $mathspassed OR $sciencepassed) ? "$student  has  passed" : "$student has not passed";

    //sample 3---- AND &&
    $result1 = true && false;
    $result2 = true AND false;

    echo PHP_EOL;
    echo ($result1) ? "true" : "false";
    echo PHP_EOL;
    echo ($result2) ? "true" : "false";
    echo PHP_EOL;

    //sample 4------
    $result1 = true || false;
    $result2 = true OR false;

    echo PHP_EOL;
    echo ($result1) ? "true" : "false";
    echo PHP_EOL;
    echo ($result2) ? "true" : "false";
    echo PHP_EOL;

    echo PHP_EOL;
    echo (true || false) ? "true" : "false";
    echo PHP_EOL;
    echo (true OR false) ? "true" : "false";
    echo PHP_EOL;

    //sample 5------
    $studentTotal = 34;
    $passingMarks = 35;
    $ispassed = ( $studentTotal >= $passingMarks) ? true : false;

    echo PHP_EOL;
    echo (!$ispassed) ? "not passed" : "passed";//basically ! operator means that 'not' which is 'not true' or 'not false'
    echo PHP_EOL;
    
?>