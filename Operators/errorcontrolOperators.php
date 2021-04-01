<?php
    //error can be suppressed in the web page
    @$value = 1/0; //using the @ to suppress the error
    echo "hello";


    $result = 1/0;

    echo "Error is :" . $php_errormsg . PHP_EOL;
?>