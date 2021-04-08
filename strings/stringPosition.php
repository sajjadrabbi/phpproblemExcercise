<?php
    //find the word position inside the string
    $content = "This is a very long content and it is a string";
    $findContentWord = "CONTENT";

    $position = stripos($content, $findContentWord);
    echo $position . PHP_EOL;

    $findContentWord = "content1";
    $position = stripos($content,$findContentWord);
    echo "nothing is printed: ".$position . PHP_EOL;

    if($position == false){
        echo "not found" . PHP_EOL;
    }

    $findContentWord = "This";
    $position = stripos($content, $findContentWord);
    echo $position . PHP_EOL;




?>