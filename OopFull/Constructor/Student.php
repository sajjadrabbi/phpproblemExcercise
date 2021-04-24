<?php

class Student
{
    public $name = "John Smith";
    public $class = "1st";

    function __construct()
    {
        $this->name = "";
        $this->class = "";
    }

    function printDetails()
    {
        echo "$this->name is studying in the $this->class class." . PHP_EOL;
    }
}

$student1 = new Student();
$student1->printDetails();
