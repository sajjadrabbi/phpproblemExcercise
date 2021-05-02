<?php

declare(strict_types=1);

class Post
{
    private $post = "";

    public function getPost(): string
    {
        return $this->post;
    }
    public function setPost(string $post): void
    {
        $this->post = $post;
    }

    public function savePost(): bool
    {
        $flag = false;
        echo "Saving Posts in Database" . PHP_EOL;
        $flag = true;
        return true;
    }

    public function fetchPost(int $id): array
    {
        $post = [];
        echo "retrive all the post" . PHP_EOL;
        $post = [
            1,
            "this is a post",
            2,
            "type hinting is good practice"
        ];
        return $post;
    }
}
