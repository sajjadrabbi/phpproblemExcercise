<?php

class University
{
    public $universityName = "Gargarion University";

    function helloUniversity()
    {
        echo "I am from $this->universityName." . PHP_EOL;
    }
}

class Teacher extends University
{
    public $teacherName = "Kakashi Sensei";

    function helloTeacher()
    {
        echo "My name is $this->teacherName and "; //trying to join the word
        return $this; //to chain the word
    }
}

$teacher1 = new Teacher();
$teacher1->helloTeacher()->helloUniversity();

echo $teacher1->universityName;
