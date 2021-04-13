<?php

    //open a file 
    //read file content
    //close the file

    //file MODE
    //r - read mode
    //w -  write
    //a - append

    //METHOD  ------------1
    //filename
    $fileName = "content.txt";
    
    //good practice----checking if the file exisits or not
    if( !file_exists($fileName) ){
        if(!is_file($fileName)){
            die("File does not exists");
        }
    }

    //read the file using the predefined (quickest method)
    $content = file_get_contents($fileName);// this does the OPENING-> then the READING-> then the CLOSING

    //print the content of the file
    echo $content . PHP_EOL;

    




    //METHOD-------2 
    //manually open and read and close file
    $fileHandler = fopen($fileName, "r");
    $fileSize = filesize( $fileName );

    //Read the file Content
    $content = fread($fileHandler, $fileSize);
    echo $content . PHP_EOL;

    //close the file
    fclose($fileHandler);






    //write operation - Method--------2
    //open the file and write and close file
    $fileHandler = fopen($fileName, "w") or die("Unable to Write the file");
    
    //write the file content
    fwrite($fileHandler, "This is a modified content");
    fclose($fileHandler); 

    



    //write operation METHOD------------1
    $fileName1 = "NewFile.txt";
    file_put_contents($fileName1, "This is modified Conten");


    //good practice
    /*
    if( file_exists($fileName) ){
        if(is_file($fileName)){

        }
    }
    */













?>