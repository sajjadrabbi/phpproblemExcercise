<?php

class Post
{
    public $post;

    function __construct($post)
    {
        $this->post = $post;
    }
}

$post1 = new Post("This is the first post.");
$savedObject = serialize($post1);
//To serialize data means to convert a value to a sequence of bits, so that it can be stored in a file,
// a memory buffer, or transmitted across a network. 
file_put_contents("post.txt", $savedObject);

//echo $restoreObjectFromFile = file_get_contents("post.txt");
$restoreObjectFromFile = file_get_contents("post.txt");
//echo $restoreObjectFromFile;
$post2 = unserialize($restoreObjectFromFile); //this the new object
echo $post2->post;
