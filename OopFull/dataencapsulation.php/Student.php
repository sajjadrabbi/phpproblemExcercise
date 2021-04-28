<?php

class Student
{
    private $id;
    private $name;
    private $class;

    function getId(): string
    {
        return $this->id;
    }
    function setId($id)
    {
        $this->id = $id;
    }

    function getName(): string
    {
        return $this->name;
    }
    function setName($name)
    {
        $this->name = $name;
    }

    function getClass(): string
    {
        return $this->class;
    }
    function setClass($class)
    {
        $this->class = $class;
    }
}
