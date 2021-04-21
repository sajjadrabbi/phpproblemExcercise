<?php

    $settings = parse_ini_file("test.ini");
    print_r($settings);


    foreach($settings as $keys => $val){
        echo $keys . "=>" . $val . PHP_EOL;
    }

    echo $settings['white'] . PHP_EOL;








?>