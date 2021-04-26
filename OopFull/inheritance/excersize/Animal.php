<?php

class Animal
{
    //properties
    protected $name;
    protected $isHunting;

    //Constructor
    public function __construct($name, bool $isHunting)
    {
        $this->name = $name;
        $this->isHunting = $isHunting;
    }

    //methods
    function doesHunting()
    {
        if ($this->isHunting) {
            echo "$this->name does hunting in the wild" . PHP_EOL;
        } else {
            echo "$this->name does not hunt." . PHP_EOL;
        }
    }
}
