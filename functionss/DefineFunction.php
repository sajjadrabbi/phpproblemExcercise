<?php

    //define a function
    function printEvenNumbers($limit){

        for($i = 0; $i <= $limit; $i++){
            $result = $i % 2;
            if($result == 0){
                echo "this is even number: " . $i .PHP_EOL;
            }
        }
    }

    printEvenNumbers(20);

    function add($a, $b){
        $result = $a + $b;
        return $result;
    }

    echo add(4, 5) . PHP_EOL;
    echo add(1245421, 4242) .PHP_EOL;



?>