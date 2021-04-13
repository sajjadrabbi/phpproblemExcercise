<?php

    //the timezone i live in
    echo date_default_timezone_get() . PHP_EOL;
    echo date("m/d/y h:i:s a") . PHP_EOL;

    date_default_timezone_set("Australia/melbourne");
    echo date("m/d/y h:i:s a") .PHP_EOL;


    echo date_default_timezone_get() . PHP_EOL;











?>