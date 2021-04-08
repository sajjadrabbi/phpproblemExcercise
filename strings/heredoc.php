<?php

    $name = "Sajjad Rabbi";
    $number = 10;

    //write a block of strings using heredoc

    echo <<< DOC_LABEL
    you can write anything inside this 
    "double quotes" .anything
    'single quote' .......
    $name know how to write php
    ($number * 10)
    new lines and strings.
    (true) ? "is it printed" : or "not i think";
    PHP_EOL
    <strong>iss this bold</strong>
    apart from variable nothing will work.
    DOC_LABEL;

?>