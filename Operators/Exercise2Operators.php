<!doctype html>
<html>
<head>
    <title>
        Expressions and Operators
    </title>
</head>
<body>

    <h1>Exercise 2: How to Use the Operators</h1>

    <h2>Decrement a number using Decrement Operator:</h2>
        <?php
            $num = 10;
            $num--;
            echo $num;        
        ?>
    <h2>Show the negative of 5 using Bitwise Operator:</h2>
        <?php
            $num = 5;
            echo ~$num;
        ?>
    <h2>Execute a dos or linux command using Execution Operator:</h2>
        <?php
            echo `dir`;    
        ?>
    <h2>Raise and Error and control it using Execution Operators:</h2>
        <?php
            @$error = 1/0;
            echo "nothing";
        ?>
    <h2>Show an example of Operator Precedence Operator:</h2>
        <?php
            echo 6 + 8 * 2;
        ?>
</body>
</html>

