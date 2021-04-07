<?php
    //print odd numbers from 1 to 10
    /*
     for(initialization; condition; increment){
        execute code
     }
    
    */

    //sample-1---------
     for($i = 1; $i <= 10; $i++){

        $result = $i % 2;
        
        if($result > 0){
            echo "$i is an odd number" . "<br>" . PHP_EOL;
        }
     }
     echo "<br>";



     //sample 2----------
     $i = 1;
     for(;$i <= 10; $i++){

        $result = $i % 2;

        if($result > 0){
            echo "$i is an odd number" . "<br>" . PHP_EOL;
        }

     }
     echo "<br>";
     //sample 3----
     $i = 0;
     for(; $i < 10; ++$i){

        $result = $i % 2;
        if($result > 0){
            echo "$i i s an odd number" . "<br>";
        }
     }


     

?>