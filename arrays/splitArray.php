<?php
    //string to array
    $students = "john, parker, Rabbi, jacob, shezan";
    $studentArray = explode(",", $students);
    print_r($studentArray);

    //aaray to string
    $studentList = implode(",", $studentArray);
    echo $studentList . PHP_EOL;


    //limited number of array elements
    $studentArray = explode( "," , $students, 3 );
    print_r($studentArray);
?>