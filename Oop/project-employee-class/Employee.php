<?php

// Calculate the employee salary

class Employee
{

    //Properties of the employee
    public $id;
    public $name;
    public $workingHoursPerDay = 8;
    public $hourlyRate = 15;
    public $totalLeaveTaken;
    public $workingDays;

    //Methods of the class
    function getSalaryAmount($totalDays): int
    {
        //this is a special variable which can be used to  access th class property 
        $this->workingDays = $totalDays - $this->totalLeaveTaken;

        $salary = $this->workingDays * $this->workingHoursPerDay * $this->hourlyRate;

        return $salary;
    }
}

$emp1 = new Employee();
$emp1->id = 101;
$emp1->name = "John, Smith";
$emp1->totalLeaveTaken = 4;
$salary = $emp1->getSalaryAmount(20);

echo $emp1->name . "has worked for $emp1->workingDays and taken $emp1->totalLeaveTaken leaves" . PHP_EOL;
echo "$emp1->name salary is $salary" . PHP_EOL;


//secod employeee------------------    
$emp2 = new Employee();
$emp2->id = 102;
$emp2->name = "Rabbi";
$emp2->totalLeaveTaken = 2;
$salary = $emp2->getSalaryAmount(20);

echo $emp2->name . " has worked for $emp2->workingDays and taken $emp2->totalLeaveTaken leaves" . PHP_EOL;
echo "$emp2->name salary is $salary" . PHP_EOL;
