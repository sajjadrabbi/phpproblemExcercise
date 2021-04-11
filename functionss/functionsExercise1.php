<?php

    declare(strict_types = 1);

    function add(int $a, $b, $c = 1):int {
        
        $result = $a + $b + $c;
        return $result;
    }

    echo add(1,3);

    function getfullName(string $firstName, string $lastName):string {
        $fullName = $firstName . ", " . $lastName;
        return $fullName;
    }

    echo getfullName("Rabbi","Sajjd");

?>