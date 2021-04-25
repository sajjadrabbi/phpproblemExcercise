<?php

//this is Parent
class University
{
    public $universityName = "Boston University";

    function helloUniversity()
    {
        echo "Hello from $this->universityName." . PHP_EOL;
    }
}

//this is Child
class Teacher extends University
{
    public $teacherName;

    function helloTeacher()
    {
        echo "Hello from $this->teacherName." . PHP_EOL;
    }
}

$teacher1 = new Teacher();
