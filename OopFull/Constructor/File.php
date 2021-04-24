<?php

class File
{
    public $fileHandler;
    public $fileName;
    public $fileSize;
    public $content;
    public $fileFound;

    function __construct($fileName)
    {
        $this->fileHandler = null;
        $this->fileFound = false;

        //file exists or not
        if (file_exists($fileName)) {
            //is this the file
            if (is_file($fileName)) {

                $this->fileFound = true;
            }
        }

        if ($this->fileFound) {

            $this->fileName = $fileName;
            $this->fileHandler = fopen($this->fileName, "r");
            $this->fileSize = filesize($this->fileName);
        }
    }

    function getContent()
    {
        if ($this->fileFound) {
            $this->content = fread($this->fileHandler, $this->fileSize);
            return $this->content;
        } else {
            return "No files Found" .  PHP_EOL;
        }
    }

    function __destruct()
    {
        if ($this->fileFound) {
            fclose($this->fileHandler);
            echo "file is closed from destructor" . PHP_EOL;
        }
    }
}

$file1 = new File("Test.txt");
echo $file1->getContent();
