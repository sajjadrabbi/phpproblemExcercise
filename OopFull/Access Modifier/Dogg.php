<?php

class Dogg
{
    private $color;
    private $breed;

    //getter and setter for COLOR
    function getColor(): string
    {
        return $this->color;
    }
    function setColor($color)
    {
        $this->color = $color;
    }

    //getter and setter for BREED
    function getBreed(): string
    {
        return $this->breed;
    }
    function setBreed($breed)
    {
        return $this->breed = $breed;
    }

    //METHODS 
    public function dogBark()
    {
        echo "woof! woof!" . PHP_EOL;
        //acessing the private method from another public method
        $this->dogSleep();
    }

    private function dogSleep()
    {
        echo "ZZZZZZzzzzzzzzzzz" . PHP_EOL;
    }
}

$dogg1 = new Dogg();
$dogg1->setColor("Black");
$dogg1->setBreed("German Shepard");

$dogg1->dogBark();
//$dogg1->dogSleep(); ------cannot be access but

echo "My dog color is" . $dogg1->getColor() . "and is " . $dogg1->getBreed() . "." . PHP_EOL;
