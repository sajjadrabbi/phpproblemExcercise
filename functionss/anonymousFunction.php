<?php

    declare (strict_types = 1);

    $addFunction = function ($a, $b): int{
        $addition = $a + $b;
        return $addition;
    };
    echo $addFunction(1, 2) . PHP_EOL;
    
    $content = "this is a string message";

    $printContent = function () use($content){
        echo $content;
    };

    $printContent();




?>