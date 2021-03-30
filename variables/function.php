<?php
    //define the function
    function add(){
        $length = 10;
        $width = 20;
        $area = $length * $width;
        echo "Area: ". "$area" . "<br>";
    }

    //calling the function
    add();
    //--cant have same function name
    //-------sample 3
    welcome();
    function welcome(){
        echo "welcome to the island";
    }



?>