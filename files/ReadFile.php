<?php

    file_put_contents("NewFile.txt", "some more new text\r\n", FILE_APPEND);

    $fileHandler = fopen("NewFile.txt", "r");
    $fileSize = filesize("NewFile.txt");

    $content = fread($fileHandler, $fileSize);

    echo $content . PHP_EOL;

    fclose($fileHandler);





?>