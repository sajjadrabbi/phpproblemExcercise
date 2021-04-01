<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercise 1: Create and display variables</h1>

    <h2>String Variable</h2>

        <?php
            $message = "I will do my best and become a well known programmer";
            echo $message . "<br>";
        ?>

    <h2>Integer variable</h2>

        <?php
            $width = 8;
            $height = 5;
            $area = $width * $height;
            echo "The area is: $area" . "<br>";
        ?>

    <h2>Print variable from function</h2>

        <?php
            function print_variable(){
                $name = "hello i am form function";
                echo $name . "<br>";
            }
            print_variable();
        ?>

    <h2>Static Variable</h2>
        
        <?php
            function counter(){
                static $counter = 1;
                echo "value: $counter <br>";
                $counter =$counter + 1;
            }
            counter();
            counter();
            counter();
            counter();
        ?>

    <h2>Global Variable</h2>
        
        <?php
            global $value;
            $value = 20;

            function accessing(){
                global $value;
                echo "This is the value from outside $value <br>";
            }
            accessing();
        ?>

    <h2>Super Global variable</h2>
        
        <?php
            global $firstValue;
            $firstValue = "I can be acccesseable <br>";

            function superGloball(){
                echo "This is uing super global ". $GLOBALS['firstValue'] . "<br>";
            }
            superGloball();
        ?>

    <h2>Variable of Variables</h2>
        
        <?php
            $grandfather = "Shorab mia";
            $father = 'grandfather';
            $child = 'father';

            print "Child grand father name is: " . $$$child;
        ?>

</body>
</html>