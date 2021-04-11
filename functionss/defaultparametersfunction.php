<?php

    declare(strict_types = 1);

    function printOddNumbers(int $limit, $skipNumber = 3){
        for($index = 0; $index <= $limit; $index++){
            
            if( $skipNumber == $index ){
                continue;
            }
            if( $index%2 != 0 ){
                echo "Odd Number: " . $index . PHP_EOL;
            }
        }
    }

    //optional parameters should be last
    function printEvennumbers(int $limit, $skipNumber = 4){
         
        for( $index = 0; $index <= $limit; $index++ ){

            if( $skipNumber == $index ){
                continue;
            }
            if( $index%2 == 0){
                echo "even Number: " . $index . PHP_EOL;
            }
        }
    }

    printOddNumbers(10);
    printEvennumbers(10);





?>