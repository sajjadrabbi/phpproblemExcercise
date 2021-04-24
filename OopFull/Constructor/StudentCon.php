<?php

class Student
{
    public $name;
    public $class;

    //constructor inisializing
    function __construct($name = "", $class = "")
    {
        $this->name = $name;
        $this->class = $class;
    }

    function printDetails()
    {
        echo "$this->name is studying in the $this->class class." . PHP_EOL;
    }
}
//reccomand way
$student1 = new Student("John", "1st");
$student1->printDetails();
