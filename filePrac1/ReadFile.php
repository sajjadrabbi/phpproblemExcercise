<?php

    $fileName = "Newfile.txt";

    if(!file_exists($fileName)){
        die("file doesnt exists");
    }

    if(!is_file($fileName)){
        die("thi is not a file"); //this will get me out of the program
    }

    //open in read mode
    $fileHandler = fopen($fileName, "r");
    $fileSize = filesize($fileName);
    //read file
    $content = fread($fileHandler, $fileSize);
    echo $content . PHP_EOL;
    //clase
    fclose($fileHandler);

    file_put_contents($fileName, "This is a append file\n", FILE_APPEND);

    //appen manually
    $fileHandler = fopen($fileName, "a");

    fwrite($fileHandler, "This again the last and sure the last\n");

    fclose($fileHandler);












?>