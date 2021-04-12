<?php

    //checks the Exists
    $fileName = "Myfolder.txt";


    if( file_exits($fileName)){
        echo "File exists" . PHP_EOL;

        if(is_dir($fileName)){
            die("it is a directory not a file");
        }

        //copy file
        copy($fileName , "CopyFile.txt");
        copy("CopyFile.txt", "CopyFile1.txt");

        //rename the files
        rename("CopyFile1.txt","RenamedFile.txt");
        copy("RenamedFile.txt","RenamedFileDeleted.txt");

        //delete file
        unlink("RenamedFileDeleted.txt");




    }else{
        echo "file/directory does not exits" . PHP_EOL;
        die("no such files"); //this keyword means the program is closed
    }













?> 