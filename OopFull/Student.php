<?php

class Student
{
    //properties
    public $name;
    public $class;

    //methods
    //getter and setter for name
    function getName(): string
    {
        return $this->name;
    }
    function setName($name)
    {
        $this->name = $name;
    }

    //getter and setter for class
    function getClass(): string
    {
        return $this->class;
    }
    function setClass($class)
    {
        $this->class = $class;
    }

    //for printing the content
    function printDetails()
    {
        echo "$this->name is studying in $this->class" . PHP_EOL;
    }
}

$student1 = new Student();
$student1->setName("John Smith");
$student1->setClass("Class-8");
$student1->printDetails();
//echo $student1->getName() . " is in class " . $student1->getClass() . PHP_EOL;

$student2 = new Student();
$student2->setName("Ronald Koman");
$student2->setClass("Class-9");
$student2->printDetails();
//echo $student2->getName() . " is in class " . $student2->getClass() . PHP_EOL;
