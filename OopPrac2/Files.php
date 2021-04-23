<?php

class Files
{

    function displayContent($fileName): bool
    {

        $result = true;

        try {
            echo "Read the Content of the file: $fileName" . PHP_EOL;
            //file open
            $fileHandler = fopen($fileName, "r");
            $fileSize = filesize($fileName);
            //red file
            $content = fread($fileHandler, $fileSize);
            echo $content;
            //close files
            fclose($fileHandler);
        } catch (Exception $e) {
            $result = false;
        }
        return $result;
    }
}

$files1 = new Files();
$fileName = "Test.txt";
$files1->displayContent($fileName);
