<?php

    $arr = ["Mon", "tues", "Wed", "Thurs", "Fri", "Sat", "Sun"];
    var_dump($arr);

    $counter = 0;
    foreach($arr as $values){
        //echo $values . PHP_EOL;
        echo "[$counter] => $values" . PHP_EOL;
        echo "[$counter] => $values => $arr[$counter]" . PHP_EOL;
        $counter++;
    }

    $counter = 0;
    $arr = ["Mon", 1, "Wed", true, "Fri", 7.5, "Sun"];
    foreach( $arr as $values ){
        echo "[$counter] => $values" . PHP_EOL;
        $counter++;
    }
    var_dump($arr);

?>