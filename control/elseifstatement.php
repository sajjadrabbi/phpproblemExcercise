<?php
    $input  = 10;
    $result = $input % 2;
    if($result == 0){
        echo "even num";
    }else if($result != 0){
        echo "odd num";
    }

    if($input >10){
        echo "greater";
    }else if($input == 10){
        echo "equal";
    }else{
        echo "less than 10";
    }

?>