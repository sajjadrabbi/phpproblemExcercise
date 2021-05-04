<?php

trait DatabaseHelper
{
    function getRecords()
    {
        echo "This is the record" . PHP_EOL;
    }
}

class Student
{
    use DatabaseHelper;

    function connectDB()
    {
        $this->getRecords();
    }
}

$student1 = new Student();
$student1->connectDB();
$student1->getRecords();
