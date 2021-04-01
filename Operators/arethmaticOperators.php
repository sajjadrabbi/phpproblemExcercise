<?php
    //sample 1
    $maths = 70;
    $science = 30;
    $english = 80;
    $totalMarks = $maths + $science + $english;

    echo "Student Total Marks: $totalMarks for maths ($maths) +
    Science ($science) + English($english)" . PHP_EOL;

    //sample 2
    echo "Student Total Marks: " . ($maths + $science + $english) . " for maths ($maths) +
    Science ($science) + English($english)" . PHP_EOL;


    //sample 3
    $totalSubject = 300;
    $totalDifference = $totalSubject - $totalMarks;
    echo "diference between total and marks achived: 
        $totalDifference" . PHP_EOL;

    //sample 4
    $length = 10;
    $breath = 20;
    $area = $length * $breath;
    echo "area: $area" . PHP_EOL;

    //sample 5
    
    $percentage = ($totalMarks/$totalMarks) * 100;
    echo "percentage : $percentage" . PHP_EOL;

    //sample 6 
    $a = 100 % 5; //modulas this give reminder value
    echo $a . PHP_EOL;

    $b = 7 % 5;
    echo $b . PHP_EOL;
    
    //sample 7 
    //exponential
    $a = 10;
    $b = 20;
    $result = ($a **2) * ($b **2);
    echo $result . PHP_EOL;





?>