<?php

    declare(strict_types = 1);

    function printOddNumbers(int $limit, $skipNumber){

        for($i = 0; $i <= $limit; $i++){

            if($i == $skipNumber){
                continue;
            }
            if($i%2 != 0){
                echo "odd number: " . $i . PHP_EOL;
            }
        }
    }

    printOddNumbers(20, "3");






?>