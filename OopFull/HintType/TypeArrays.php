<?php

declare(strict_types=1);

class University
{
    private $name;
    function getName(): string
    {
        return $this->name;
    }
    function setName($name)
    {
        $this->name = $name;
    }
}

class Student extends University
{
    private $studentID = "";
    private $studentName = "";

    function setDetails(array $student): void
    {
        $this->studentID = $student["id"];
        $this->studentName = $student["name"];
    }
}

$u = new University();
$u->setName("Boston University");
$s = new Student();
$stud = [
    "id" => "565",
    "name" => "Jane"
];
$s->setDetails($stud);
var_dump($s);
