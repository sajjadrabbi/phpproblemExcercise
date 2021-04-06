<?php
    $input = 10;
    $result = $input % 2;

    switch($result == 0){

        case 1:
            echo "even number";
            break;

        case 0:
            echo "odd number";
            break;
        
        default:
            echo "invalid input";
    }


    switch(true){
        
        case $input > 10:
            echo "yes greater";
            break;

        case $input == 10:
            echo "equal";
            break;
        
        default:
            echo "less than";
            break;
    }

    $weekday = "mon";
    switch($weekday){
        
        case "mon":
            echo 'monday';
            break;
        case 'fri':
            echo 'friday';
            break;
        default:
            echo 'others'; 
    }



?>