<?php

class Posts
{
    function __construct()
    {
        //initialize the value
        echo "this is Constructor" . PHP_EOL;
    }

    function __destruct()
    {
        //close the connection or empty the space
        echo "this destructor" . PHP_EOL;
    }
}

$post = new Posts();
