<?php

class Post
{

    public $post;

    function __construct($post)
    {
        $this->$post = $post;
    }
}
//idenntity operator ===
function compare1(&$obj1, &$obj2)
{
    if ($obj1 === $obj2) {
        return true;
    } else {
        return false;
    }
}

//comparision operator ==
function compare2(&$obj1, &$obj2)
{
    if ($obj1 == $obj2) {
        return true;
    } else {
        return false;
    }
}

$post1 = new Post("This is the first post");
$post2 = new Post("This is the first post");

echo compare1($post1, $post2) ? 'Same' : 'Difference';
echo PHP_EOL;
echo compare2($post1, $post2) ? 'Same' : 'Difference';
