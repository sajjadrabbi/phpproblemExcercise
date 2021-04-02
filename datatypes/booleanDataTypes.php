<?php

    $flag1 = TRUE;
    $flag2 = FALSE;
    echo ($flag1) ? "true" : "false";
    echo PHP_EOL;
    echo ($flag2) ? "true" : "false";
    echo PHP_EOL;

    //print boolean Variables out as
    echo "True " . $flag1 . PHP_EOL;
    echo "False:" . $flag2 . PHP_EOL;

    //Use String as Boolean Condition
    $isLoggedIn = true;
    $userSessionName; // no value assigned so its false
    echo ($isLoggedIn && $userSessionName) ? "User logged in" : "Not logged in";
    echo PHP_EOL;

    //use integer variable as boolean 
    $mark = 0;
    echo ($mark) ? "have value" : "does not have value";
    echo PHP_EOL;

    //operator result for boolean
    $name = "Rabbi";
    echo ($name == "Rabbi") ? "Yes it is rabbi" : "No not him";






?>