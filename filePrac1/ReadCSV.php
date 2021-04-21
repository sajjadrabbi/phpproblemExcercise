<?php

    echo "This is whole content" . PHP_EOL;
    //read whole content
    $fileName = "students.csv";
    if(!file_exists($fileName)){
        die("file doesnt exists");
    }
    $content = file_get_contents($fileName);
    print_r($content);

    echo PHP_EOL;
    echo PHP_EOL;
    //read line by line
    echo "This is LINE by LINE content" . PHP_EOL;
    $csvFile = file($fileName);
    foreach($csvFile as $line){
        echo $line . PHP_EOL;
    }

    echo PHP_EOL;
    echo PHP_EOL;
    echo "This is in array content" . PHP_EOL;
    $csvFile = file($fileName);
    foreach($csvFile as $line){
        $data[] = str_getcsv($line);
        print_r($data);
    }

    $csv = array_map('str_getcsv', file($fileName));
    print_r($csv);










?>