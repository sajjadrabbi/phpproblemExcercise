<?php

class Student
{
    private $id;
    private $nam;
    //this will take care of error by set and get
    function __set($name, $value) //these are set parameters not related to the properties
    {
        echo "Set method is not found so this is called" . PHP_EOL;
        echo $name . PHP_EOL;
        echo $value . PHP_EOL;

        if ($name == 'id') {
            $this->id = $value;
        }
    }

    function __get($name)
    {
        echo "Get methods is not found so this called" . PHP_EOL;
        echo $name . PHP_EOL;
        if ($name == 'id') {
            echo $this->id;
        }
    }
}

$student1 = new Student();
//trying to access the private property or set the private property
//so as it wont be able to access the private property, it will automatically execute the __set method
$student1->id = "Test";
echo $student1->id . PHP_EOL;
