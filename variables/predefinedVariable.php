<?php

    /*@$value = 10/0;
    echo $php_errormsg;
    */

    echo $value;
    print_r(error_get_last());

    $value = 10/0;
    print_r(error_get_last());
    
    ?>

