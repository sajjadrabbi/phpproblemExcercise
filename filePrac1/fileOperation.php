<?php

    $fileName = "MyFolder.txt";

    if(file_exists($fileName)){
        echo "File exists." . PHP_EOL;

        if(is_dir($fileName)){
            die("this is a directory or  folder its name cannot be changed" . PHP_EOL);
        }

        copy($fileName , "CopyFile.txt");
        copy("CopyFile.txt" , "CopyFile1.txt");

        rename("CopyFile1.txt" , "RenameFile.txt");
        copy("RenameFile.txt" , "RenameFileDeleted.txt");

        unlink("RenameFileDeleted.txt");

    }else{
        die("File/directory doesnt exists" . PHP_EOL);
    }

















?>