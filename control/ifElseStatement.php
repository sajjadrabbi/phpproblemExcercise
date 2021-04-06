<?php

    //sample 1
    $booleanValueCondition = true;

    if($booleanValueCondition){
        echo "this is if block" . PHP_EOL;
        echo "this is true conditon" . PHP_EOL;
    }else{
        echo "this else block" .PHP_EOL;
        echo "this is false condition" . PHP_EOL;
    }

    //guess the output
    $secondBooleanValueCondition = true;
    if($booleanValueCondition && $booleanValueCondition){
        echo "this is if block" . PHP_EOL;
        echo "this is true conditon" . PHP_EOL;
    }else{
        echo "this else block" .PHP_EOL;
        echo "this is false condition" . PHP_EOL;
    }

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <?php if($booleanValueCondition && false){ ?>
            
            <h1>This true</h1>

        <?php } else{ ?>

        <h1>this is false condition</h1>

        <?php } ?>

    </body>
    </html>

    
    <?php
    //sample----2-------
        //$input1 = "text values";
        $input1 = NULL;
        $input2 = 34;

        //condition 1
        if(!is_null($input1)){
            echo "this is not null<br>";
        }else{
            echo "this is null <br>";
        }


        //conditon 2
        if(isset($input1) && !is_null($input1)){
            echo "$input1 is not empty";
        }else{
            echo "$input1 is empty";
        }

        //condition 3
        if($input1 != ""){
            echo "$input1 is not empty <br>";
        }else{
            echo "$input1 is empty";
        }

        //best condition    
        if($input2 >= 24){
            echo "is greater";
        }else{
            echo "not greater <br>";
        }


    ?>


<?php 
    //sample 3
    $some_boolean_condition = false;
    if($some_boolean_condition)
        echo 'this is true condition' . PHP_EOL;
    else
        echo 'this is a false condition' . PHP_EOL;


    $student = "passed";
    if($student == "passed"){
        echo "yes";
    }else{
        echo "not passed";
    }
?>



