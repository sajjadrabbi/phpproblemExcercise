<?php

    function checkUserRoles($userRoles){
        
        if(empty($userRoles)){
            echo "Roles cannnot be empty" . PHP_EOL;
            return; 
    //this is used so that the code doesnt have to execute the
    // rest of the function when there is no arguement
        }

        //do not execute this code when $userRoles is empty
        switch($userRoles){

            case 'Admin':
                echo "this is admin".PHP_EOL;
                break;
            case 'Editor':
                echo "this is editor".PHP_EOL;
                break;
            default:
                echo "Roles is empty".PHP_EOL;

        }
    }

    checkUserRoles('Admin');
    checkUserRoles('');
    checkUserRoles('Editor');
?>