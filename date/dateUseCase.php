<?php

    echo date_create("now")->format("Y-m-d H:i:s") . PHP_EOL;
    echo date_create("+1 day")->format("Y-m-d H:i:s") . PHP_EOL;
    echo date_create("-1 day")->format("Y-m-d H:i:s") . PHP_EOL;


    $strTime = strtotime("2019-05-21 9:00:00");
    echo date("d:m:y h:i:s", $strTime) . PHP_EOL;

    //mili second
    if(time() >= $strTime){
        echo "time is ahead";
    }else{
        echo "time is not ahead";
    }










?>