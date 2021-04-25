<?php

class University
{
    public $universityName = "Boston university";

    function helloUniversity()
    {
        echo "Hello from $this->universityName;." . PHP_EOL;
    }
}


class Teacher extends University
{
    public $teacherName = "Jane";
    private $workingHours = 40;
    //Overriding of Methods
    function helloTeacher()
    {
        echo "Hello from $this->universityName;." . PHP_EOL;
    }

    function calculateSalary($perHour): int
    {
        return $perHour * $this->workingHours;
    }
}

class partTimeTeacher extends Teacher
{
    public $teacherName = "June";
    private $workingHours = 8;
    //Overriding of Methods
    function helloTeacher()
    {
        echo "Hello from $this->teacherName." . PHP_EOL;
    }

    function calculateSalary($perHour): int
    {
        return $perHour * $this->workingHours;
    }
}

$teacher1 = new partTimeTeacher();

$teacher1->helloUniversity();
$teacher1->helloTeacher();
echo $teacher1->calculateSalary(10) . PHP_EOL;
