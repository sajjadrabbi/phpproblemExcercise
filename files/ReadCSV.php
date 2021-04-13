<?php
    //read entire content
    $fileName = "students.csv";
    $content = file_get_contents($fileName);
    print_r($content);
    echo PHP_EOL;

    //read line by line
    $csvFile = file($fileName);
    var_dump($csvFile);
    foreach($csvFile as $line){
        echo $line . PHP_EOL;
    }
    

    $csvFile = file($fileName);
    var_dump($csvFile);
    foreach($csvFile as $line){
        $data[] = str_getcsv($line);
        print_r($data);
    }

    $csv = array_map('str_getcsv', file($fileName));
    print_r($csv);












?>