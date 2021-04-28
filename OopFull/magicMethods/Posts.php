<?php

use Posts as GlobalPosts;

class Posts
{
    function __call($name, $arguments)
    {
        echo $name . PHP_EOL;
        echo $arguments . PHP_EOL;
    }
}

$post1 = new Posts();
$post1->createPosts("This is a test");
