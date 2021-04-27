<?php

class FileHelper
{
    static function hasData($filename): bool
    {
        if (!file_exists($filename)) {
            echo "$filename does not exits" . PHP_EOL;
            return false;
        }

        $content = file_get_contents($filename);

        if (empty($content)) {
            return false;
        } else {
            return true;
        }
    }
}

if (FileHelper::hasData("Test.txt")) {
    echo "data found";
} else {
    echo "data not found";
}
