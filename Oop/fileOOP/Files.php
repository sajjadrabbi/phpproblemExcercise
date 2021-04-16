<?php

    class Files{
        
        function displayContent($fileName){

            //does the file exists or not
            if(!file_exists($fileName)){
                
                echo "$fileName does not exists" . PHP_EOL;
                return;
            }

            echo file_get_contents($fileName) . PHP_EOL;

        }



        function getContent($fileName) : string{

            if(!file_exists($fileName)){

                $value = "$fileName does not exists" . PHP_EOL;
                return $value;
            }

            $content = file_get_contents($fileName);
            return $content;

        }

    }

    $file1 = new Files();
    $file1->displayContent("text.txt");
    echo "here is your file content: " . $file->getContent("text.txt");





?>