<?php

    declare(strict_types = 1);

    function add(int $a, int $b): int{
        $result = $a + $b;
        return $result;
    }

    function sub(int $a, int $b): int{
        $result = $a - $b;
        return $result;
    }

    $addFunction = "sub";
    echo $addFunction(5, 2) . PHP_EOL;

    $addFunction = "add";
    echo $addFunction(5, 2) . PHP_EOL;


?>