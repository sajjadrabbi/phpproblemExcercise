<?php

    $name;

    //tarnary operator
    //echo isset($name) ? true : false ;
    echo isset($name) ? 'variable is set <br>' : 'variable is not set <br>' ;

    $country = 'bangladesh';
    echo isset($country) ? "variable is set <br>" : "variable is not set <br>";
    
    $firstName = "rabbi";
    $name = $firstName;

    echo isset($name) ? 'variable is set' : 'variable is not set';
?>