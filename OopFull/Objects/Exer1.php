<?php

class Post
{
    public $post;
    public $hasPost = true;

    function __construct($post)
    {
        $this->post = $post;
    }
}

function copyObject(Post $obj1, Post $obj2)
{
    $obj2->post = $obj1->post;
    $obj2->hasPost = $obj1->hasPost;
}

$post1 = new Post("This is First.");
$post2 = new Post("This is Second.");

copyObject($post1, $post2);
echo $post2->post;
