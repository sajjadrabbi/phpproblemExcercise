<?php

    //open a file
    //read file content
    //close the file

    //file modes
    //read mode
    //write mode
    //append mode

    //---------------READ OPERATION-------------------

    //METHOD 1  ------------------
    //filename
    //easiest way to read a file
    $fileName = "content.txt";
    //file exists or not
    if(!file_exists($fileName)){
        if(!is_file($fileName)){
            die("file does not exists");
        }
    }
    //read the file
    $content = file_get_contents("content.txt");
    //print the content
    echo $content . PHP_EOL;


    //METHOD 2 ------------------
    //Open file
    $fileHandler = fopen($fileName, "r"); //here the data gets loaded
    $fileSize = filesize($fileName);
    //Read the content
    $content = fread($fileHandler, $fileSize);
    echo $content . PHP_EOL;
    //close the file
    fclose($fileHandler);


    //---------------WRITE OPERATION-------------------

    //METHOD 1 ------------------
    //filename
    //easiest way to read a file
    $fileName1 = "NewFile.txt";
    //write the file
    file_put_contents($fileName1, "This is the new file modified");


    //METHOD 2 ------------------
    //open file
    $fileHandler = fopen($fileName, "w") or die("Unable to Write the file");
    //read the content
    fwrite($fileHandler, "This is now modified content");
    //file close
    fclose($fileHandler);








?>