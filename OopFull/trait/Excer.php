<?php

trait FileOperation
{
    function getFileSize($fileName)
    {
        return filesize($fileName);
    }
}


class Post
{
    use FileOperation;

    function checkSize($fileName)
    {
        return $this->getFileSize($fileName);
    }
}

$post1 = new Post();
echo $post1->checkSize("Posts.txt");
