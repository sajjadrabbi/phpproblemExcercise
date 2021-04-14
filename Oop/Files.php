<?php

    class Files{

        function displayContent($fileName) : bool{

            $result = true;

            try{

                echo PHP_EOL . "Read the content of the file: $fileName" . PHP_EOL;
                $content = file_get_contents($fileName);
                echo "Display Content of the file: $fileName" . PHP_EOL;
                echo $content;
            }catch(Exception $exception){
                $result = false;
            }

            return $result;

        }


    }

    $files1 = new Files();
    $files1->displayContent("Text.txt");

    //Oop brings resuabilty to your code
    $files2 = new Files();
    $files2->displayContent("Text1.txt");



?>