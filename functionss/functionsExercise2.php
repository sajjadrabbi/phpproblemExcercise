<?php

    declare (strict_types = 1);

    function Calculator(int $a, int $b, string $operation) {

        $operation = strtolower($operation);

        if($operation == "add"){
            $result = $a + $b;
            echo "the value of " . $operation . " is " . $result . PHP_EOL;
        }elseif($operation == "sub"){
            $result = $a - $b;
            echo "the value of " . $operation . " is " . $result . PHP_EOL;
        }elseif($operation == "mul"){
            $result = $a * $b;
            echo "the value of " . $operation . " is " . $result . PHP_EOL;
        }elseif($operation == "div"){
            $result = $a / $b;
            echo "the value of " . $operation . " is " . $result . PHP_EOL;
        }else{
            echo "there is no operation related to \"" . $operation . "\"". PHP_EOL;
        }
    }

    Calculator(1, 2, "aDd");
    Calculator(1, 2, "sUb");
    Calculator(1, 2, "mul");
    Calculator(1, 2, "div");





?>