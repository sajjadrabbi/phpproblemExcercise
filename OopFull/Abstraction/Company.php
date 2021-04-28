<?php

abstract class Company
{
    protected $name;

    public function getName(): string
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    abstract function setExpert($subject);
}

class Employee1 extends Company
{
    protected $subject;

    function setExpert($subject)
    {
        $this->subject = $subject;
    }
}

$emp1 = new Employee1();
