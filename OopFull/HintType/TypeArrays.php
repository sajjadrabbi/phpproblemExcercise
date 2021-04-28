<?php

declare(strict_types=1);

class University
{
    private $name;

    function getName(): string
    {
        return $this->name;
    }
    function setName(string $name): void
    {
        $this->name = $name;
    }
}

class Student extends University
{
    private $studentID = "";
    private $studentName = "";

    function setDetails(array $students): void
    {
        $this->studentID = $students['id'];
        $this->studentName = $students['name'];
    }
}

$u = new University();
$u->setName("Boston University");

$s = new student();
$students = [
    'id' => 1,
    'name' => 'jane'
];
$s->setDetails($students);
var_dump($s);
