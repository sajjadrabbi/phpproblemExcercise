<?php

class Files
{
    function displayContent($fileName)
    {
        if (!file_exists($fileName)) {
            echo "$fileName does not exists." . PHP_EOL;
        }

        echo file_get_contents($fileName) . PHP_EOL;
    }

    function getContent($fileName): string
    {
        if (!file_exists($fileName)) {
            echo "$fileName does not exists." . PHP_EOL;
        }

        $content = file_get_contents($fileName);
        return $content;
    }
}


$files1 = new Files();
$files1->displayContent("Test.txt");
$files1->getContent("Test.txt");
