<?php
    //open file
    $fileHandler = fopen("Newfile.txt","w");

    //write file
    fwrite($fileHandler, "this is test for the excerdise\n");

    //close
    fclose($fileHandler);

    //quick way to append
    file_put_contents("Newfile.txt", "some more data appended\n", FILE_APPEND);

    //open file appending
    $fileHandler = fopen("Newfile.txt", "a");

    fwrite($fileHandler, "This is at last written\n");

    fclose($fileHandler);

    







?>