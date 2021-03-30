<?php

    $male = "Rabbi, Noushin";
    $gender = "male";

    echo $gender . "<br>";
    echo $$gender . "<br>"; //----$($gender) == > $(male)


    //---sample 2
    print "<h1>doing it with 3 variables</h1>";
    $student = "Rabbi";
    $male = "student";
    $gender = "male";

    echo $gender . "<br>";
    echo $$gender . "<br>";
    echo $$$gender . "<br>";
    
?>