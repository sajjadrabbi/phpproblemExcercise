<?php

    $name = "Sajjad, Rabbi";
    $number = 10;

    echo <<< DOC_LABEL
    you can write anything inside  this 
    "double quote". anything
    'single quote'......
    $name knows how to write php
    ($number * 10)
    new lines and strings
    (true) ? "print":"ownt print";
    PHP_EOL
    <strong>hELLO</strong>
    apert from variable interpolation nothing will work;
    DOC_LABEL;
    //now doc prints everything
    echo <<< 'DOC_LABEL'
    you can write anything inside  this 
    "double quote". anything
    'single quote'......
    $name knows how to write php
    ($number * 10)
    new lines and strings
    (true) ? "print":"ownt print";
    PHP_EOL
    <strong>hELLO</strong>
    no variable interpolation nothing will work;
    DOC_LABEL;

?>