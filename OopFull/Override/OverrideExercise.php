<?php

class Doctor
{
    function calculateFees($hours)
    {
        return 10 * $hours;
    }
}

class Specialist extends Doctor
{
    function calculateFees($hours)
    {
        return 25 * $hours;
    }
}

$doc1 = new Doctor();
echo $doc1->calculateFees(2) . PHP_EOL;

$spec1 = new Specialist();
echo $spec1->calculateFees(2);
