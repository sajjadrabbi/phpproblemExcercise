<?php
    /*
        function functionName(params) : return type{

        }    
    */


    declare(strict_types = 1);

    function add(int $a, int $b): int{
        $add = $a + $b;
        return $add;
    }
    echo "result: " . add(4, 5) . PHP_EOL;

    function getEvenNumbers(int $limit): array{

        $returnArr = [];

        for($i = 0; $i <= $limit; $i++){
            
            $result = $i % 2;
            if($result == 0){
                $returnArr[] = $i;
            }
        }

        return $returnArr;
    }

    $evenNumberArr = getEvenNumbers(10);

    var_dump($evenNumberArr);





?>