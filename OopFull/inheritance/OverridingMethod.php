<?php

class Universityyy
{
    function sayHello()
    {
        echo "This from the University." . PHP_EOL;
    }
}


class Teacherrr extends Universityyy
{
    //Overriding of Methods
    function sayHello()
    {
        echo "This from the Teacher." . PHP_EOL;
        //to acces the parent Method
        parent::sayHello();
    }
}

$teacher1 = new Teacherrr();
$teacher1->sayHello();
