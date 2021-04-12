<?php

    /*
        1) List all Files in a Directory
        2) Check for Specific Files in a Directory
        3) Check If the Name is a Directory or File.
        4) Create Directory
        5) Copy Files between Directories.
        */
        
    //sample 1:------list all files in a directory
    $path = "TestFolder1";
    $result = scandir($path); //here candir gets the file and saves them in array
    var_dump($result);

    foreach($result as $dir){
        if($dir != "." && $dir != ".."){
            echo $dir . PHP_EOL;
        }
    }

    //another way to remove "." and ".."
    $directory = array_diff($result, ['.', '..']);
    var_dump($directory);

    foreach($directory as $dir){
        echo $dir . PHP_EOL;
    }





    //sample-2
    //2) Check for Specific Files in a Directory
    //3) Check If the Name is a Directory or File.
    //is_file and is_dir
    $result = scandir($path);
    $result = array_diff($result, [".", ".."]);
    foreach($result as $dir){
        if(is_dir($path . "/" . $dir)){
            echo $dir .PHP_EOL;
        }
    }

    $result = scandir($path);
    $result = array_diff($result, [".", ".."]);
    foreach($result as $dir){
        if(is_file($path . "/" . $dir)){
            echo $dir .PHP_EOL;
        }
    }


    $result = glob("*.php");
    var_dump($result);

    //create a directory
    //does the file name esits int he dir, if not then create one
    if( !file_exists("TestFolder3") ){
        mkdir("TestFolder3");
    }

    //copy files
    copy("TestFolder1/newDummy.txt" , "TestFolder3/justcopiedNewDummy.txt");















?>