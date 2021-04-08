<?php

    $name = "Sajjad Rabbi";
    $number = 10;

    //write a block of strings using heredoc

    echo <<< DOC_LABEL
    you can write anything inside this 
    "double quotes" .anything
    <br>
    'single quote' .......
    $name know how to write php
    ($number * 10)
    new lines and strings.
    (true) ? "is it printed" : or "not i think";
    PHP_EOL
    <strong>iss this bold</strong>
    apart from variable nothing will work.
    DOC_LABEL;
     //dont need to end with semi colon
    echo <<< DOC_LABEL
    dfsnfldsn;mfd
    s
    ds
    fdksmlkfldksmlfkmdslknfs
    <br>
    ds
    n
    fkldsn
    fnd
    DOC_LABEL;

    echo <<< doc_label
    dsjd
    doc_label;

?>