<?php

    //open the file
    $fileHandler = fopen("Newfile.txt", "w");


    //write the content
    fwrite($fileHandler, "this is some text\r\n");
    fwrite($fileHandler, "this is another text\r\n");

    //save file
    fclose($fileHandler);

    file_put_contents("Newfile.txt", "some more data append", FILE_APPEND);












?>