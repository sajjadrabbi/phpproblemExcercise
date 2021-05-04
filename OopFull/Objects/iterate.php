<?php

class Post
{
    public $post;
    public $hasPost = true;

    function __construct($post)
    {
        $this->post = $post;
    }

    function hello()
    {
        echo "Hello";
    }
}

$post1 = new Post("This is the first Posts");

foreach ($post1 as $key => $value) {
    echo $key . "=>" . $value . PHP_EOL;
}

var_dump($post1);
print_r($post1);
