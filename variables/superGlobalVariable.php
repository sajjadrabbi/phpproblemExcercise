<?php
    ///sample 1 ----after defining the global variable, we can call it through the printing
    global $message;
    $message = "Welcome to php";
    print $GLOBALS['message'] . "<br>";




    //sample 2
    //---here it shows the folder or location of it
    echo "filename: " . $_SERVER['PHP_SELF'] . "<br>";



    //sample 3
    global $name; 
    $name = "Rabbi";
    //---here with the help of superGlobal we didnt hav to write the global inside e.g global $name
    function print_name(){
        print "thi is the name fetched fom the global: " . $GLOBALS['name'];
    }

    print_name();
?>