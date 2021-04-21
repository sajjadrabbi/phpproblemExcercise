<?php

    $path = "TestFolder1";
    $result = scandir($path);
    var_dump($result);

    foreach($result as $dir){
        if($dir != "." && $dir != ".."){
            echo $dir . PHP_EOL; 
        }
    }

    //remove another way
    $directory = array_diff($result, ['.', '..']);
    var_dump($directory);
    foreach($directory as $dir){
        echo $dir . PHP_EOL;
    }

    echo PHP_EOL;

    //sample 2 and 3
    $path = "TestFolder1";
    $result = scandir($path);
    $result = array_diff($result, ['.', '..']);
    //lets check if it is file or dir(folder)
    foreach($result as $dir){
        if(is_file($path . "/" . $dir)){
            echo $dir . PHP_EOL;
        }
    }

    //create directory
    $result = glob("*.php");
    var_dump($result);

    if(!file_exists("TestFolder3")){
        mkdir("TestFolder3");
    }

    //copy 
    copy("TestFolder1/Dummy1.txt","DummyNew.txt");



?>