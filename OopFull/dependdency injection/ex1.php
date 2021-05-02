<?php

declare(strict_types=1);

class University
{
    public $name = "";

    function __construct($name)
    {
        $this->name = $name;
    }

    function universityDetails()
    {
        echo "This is the name of the university $this->name." . PHP_EOL;
    }
}

class Student extends University
{
    public $id;

    function __construct($id, University $uni1)
    {
        $this->id = $id;
        $this->name = $uni1->name;
    }

    function studentInfo()
    {
        echo "this is student $this->id." . PHP_EOL;
    }
}
$uni1 = new University("Tailord UNIVERsiTY");
$stu1 = new Student(45, $uni1);

echo $stu1->name . PHP_EOL;
echo $stu1->id;
