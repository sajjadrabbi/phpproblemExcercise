<?php

class Teacher
{
    public $name = "This is a test";

    function __toString(): string
    {
        echo "Name: " . $this->name . PHP_EOL;
        return "To string method is called" . PHP_EOL;
    }
}

$teacher = new Teacher();
echo $teacher;
