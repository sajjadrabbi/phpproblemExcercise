<!doctype html>
<html>
<head>
    <title>
        Expressions and Operators
    </title>
</head>
<body>

    <h1>Exercise 1: How to Use the Operators</h1>

    <h2>Add two numbers using Arithmetical Operators:</h2>
        
        <?php
            $a = 4;
            $b = 5;
            $total = $a + $b;
            echo $total;
        ?>

    <h2>Find Student passed or failed using Conditional Operatos:</h2>

        <?php
            $result = "passed";
            echo ($result == "passed") ? "student is passed" : "student is not passed";
        ?>

    <h2>Show a number is even or odd using Comparison Operators:</h2>
        
        <?php
            $num = 51;
            $num %= 2;
            echo ($num == 0) ? "this is even number" : "this odd number";
        ?>

    <h2>Check if user has access and login rights using Logical Operators:</h2>
        
        <?php
            $userAccess = true;
            $loginRight = true;

            echo ($userAccess && $loginRight) ? "User is allowed" : "User is not allowed";
        ?>

    <h2>Assign a integer value and increment by 10 using Assignment Operator:</h2>
        
        <?php
            $num = 50;
            $num +=10;
            echo $num;
        ?>
        
</body>
</html>

