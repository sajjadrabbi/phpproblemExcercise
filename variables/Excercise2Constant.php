<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>excercise 1: Define and display Constant</h1>

    <h2>String Constant</h2>
                
    <?php
        define("MESSAGE","This is a constant");
        echo MESSAGE;            
    ?>
    
    <h2>Integer Constant</h2>

        <?php
            define("PI",3.14);
            echo "this is constant PI value: " . PI ; 
        ?>
    <h2>print Constant from Function:</h2>

        <?php
            define("VALUE",8);
            
            function constant_valuee(){
                echo "Value is: " . VALUE;
            }
            constant_valuee(); // call the function
        ?>

    <h2>Display magic</h2>
        <?php
            echo __LINE__;
        ?>
</body>
</html>