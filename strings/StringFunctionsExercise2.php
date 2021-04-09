<!doctype html>
<html>
<head>
    <title>
        Strings
    </title>
</head>
<body>

<h1>Exercise 2: String Functions</h1>

<h2>Word Wrap the Long String</h2>
    <?php
        $content = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita magnam facilis, ab mollitia culpa provident odio consequuntur velit dolorem harum?";
        echo wordwrap($content, 30);
    ?>
<h2>Find and Replace the word in upper case</h2>
    <?php
        $findWord = "dolor";
        $position = false;
        $position = stripos($content, $findWord);
        
        if($position == true){
           $new_content = str_replace($findWord, strtoupper($findWord), $content);
           echo $new_content;
        }else{
            echo "word not found";
        }

    ?>
<h2>Count number of words</h2>
        <?php
            echo str_word_count($content);
        ?>
<h2>Shuffle the Strings</h2>
        <?php
            echo str_shuffle($content);
        ?>

</body>
</html>

