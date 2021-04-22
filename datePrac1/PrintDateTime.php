<?php

    echo "Current Date: " . date("d-D-M-Y") . PHP_EOL;


    echo "Current Date: " . date("d-D-M-Y h:i:s:a") . PHP_EOL;

    echo "Current Time in MiliSecind: " . time() . PHP_EOL;

    $time = time() + 2000;
    echo "Current time: " . date("d-D-M-y h:i:s:a", $time) . PHP_EOL;

    












?>