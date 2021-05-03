<?php
//parent class of posst
class Postss
{
    public $posst;

    function __construct($posst)
    {
        $this->posst = $posst;
    }
}

//$posst1 = new Postss("This is the First post");
//echo $posst1->posst . PHP_EOL;
//$posst2 = $posst1;
//$posst2->posst = "This is modified";
//echo "this is from post 1---" . $posst1->posst . PHP_EOL;
//echo "this is from post 2---" . $posst2->posst . PHP_EOL;
//here this shows that the objects are pointing to the same value,
//so they have same output even when changed from different object
$posst1 = new Postss("This is the first post");
echo $posst1->posst . PHP_EOL;
$posst2 = clone $posst1;
$posst1->posst = "This is POST1 modified" . PHP_EOL;
echo "This is post 2 " . $posst2->posst . PHP_EOL;
echo $posst1->posst . PHP_EOL;
