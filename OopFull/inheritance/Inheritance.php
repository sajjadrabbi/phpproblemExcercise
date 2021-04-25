<?php

//this is Parent
class Universityy
{
    protected $universityName = "Boston University";

    function helloUniversity()
    {
        echo "Hello from $this->universityName." . PHP_EOL;
    }
}

//this is Child
class Teacherr extends Universityy
{
    public $teacherName = "Jane";

    function helloTeacher()
    {
        echo "Hello from $this->teacherName." . PHP_EOL;
    }

    function getUniversityName(): string
    {
        return $this->universityName;
    }
}

class partTimeTeacherr extends Teacherr
{
    //    function getUniversityName(): string
    //    {
    //        return $this->universityName;
    //    }
}

$teacher1 = new Teacherr();
$teacher1->helloTeacher();
$teacher1->helloUniversity();
echo $teacher1->getUniversityName() . PHP_EOL;

$partTeacher1 = new partTimeTeacherr();
echo "This is from" . $partTeacher1->getUniversityName() . PHP_EOL;
