<?php

class Posts
{
    public $content;

    function __construct($content)
    {
        //initialize the value
        $this->content = $content;
    }
    /*
    function getContent(): string
    {
        return $this->content;
    }
    */
    function __destruct()
    {
        //close the connection or empty the space
        echo "this destructor" . PHP_EOL;
    }

    function printContent()
    {
        echo $this->content;
        return $this;
    }
}

$content = "This is the excersize for the chaining" . PHP_EOL;
$post1 = new Posts($content);
//pritn and get the $content property from the $post at the same time
echo $post1->printContent()->content;
