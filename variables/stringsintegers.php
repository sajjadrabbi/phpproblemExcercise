<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable and Constant</title>
</head>
<body>
    <!--sample 1--->
    <h1>Define strings</h1>
    <?php
    
    $name = "john, smith";
    $message = "this is a string message";
    echo $name . ": " . $message . "<br>";
    echo "$name: $message";

    ?>

    <h1>Define Integers</h1>
    <?php
    $version = 7.0;
    echo "Php version in this computer is $version";
    ?>


    <!--sample 2 -->
    <h1>Combine String and Integers</h1>
    <?php
    echo "$name: $message <br>";
    echo "name: $name <br>";
    $language = "php";
    echo $language . " version is " . "$version";

    ?>

    <!---sample 3---->
    <h1>Add two integers</h1>
    <?php
    $firstVariable = 30;
    $secondVariable = 40;

    $toatl = $firstVariable + $secondVariable;
    echo "Total: " . $toatl;

    ?>
</body>
</html>