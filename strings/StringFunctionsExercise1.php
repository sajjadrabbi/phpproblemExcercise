<!doctype html>
<html>
<head>
    <title>
        Strings
    </title>
</head>
<body>

<h1>Exercise 1: String Functions</h1>

<h2>Find the Given Word in the String (Case Insensitive)</h2>

    <?php
        $content = "Find the word JOKER and show it here.";
        $findWord = "joker";
        $position == false;

        $position = stripos($content, $findWord);
        if($position == true){
            echo "$findWord has been found!";
        }else{
            echo "not found!";
        }

    ?>

<h2>Calculate the Length of the String</h2>
    <?php
        $content = "This the world were no super hero ahs emerged";
        echo "this is the length of the string: " . strlen($content);


    ?>
<h2>Remove White Spaces from left in the String</h2>
    <?php
        $content = "   heloooooooooooooooooooooooooooooooooooo sknksajd";
        echo trim($content);
    ?>
<h2>Reverse the String</h2>
    <?php
        $content = "The heros will rise agein thats what everyone says";
        echo strrev($content);

    ?>


</body>
</html>

