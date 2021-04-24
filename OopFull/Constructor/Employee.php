<?php


class Employee
{
    public $id;
    public $name;
    public $workingHoursPerDay = 8;
    public $hourlyRate = 15;
    public $totalLeaveTaken;
    public $workingDays;

    function __construct($id, $name, $totalLeaveTaken)
    {
        $this->id = $id;
        $this->name = $name;
        $this->totalLeaveTaken = $totalLeaveTaken;
    }

    function getSalaryAmount($totalDays): int
    {
        //$this will be explain in next section
        //$this is used to access class properties.
        $this->workingDays = $totalDays - $this->totalLeaveTaken;
        $salary = $this->workingDays * $this->workingHoursPerDay * $this->hourlyRate;
        return $salary;
    }
}

$emp1 = new Employee(101, "John, Smith", 4);
$salary = $emp1->getSalaryAmount(20);
echo "$emp1->name has worked for $emp1->workingDays and taken $emp1->totalLeaveTaken leaves." . PHP_EOL;
echo "$emp1->name salary is $salary" . PHP_EOL;

$emp1 = new Employee(102, "jacob", 2);
$salary = $emp1->getSalaryAmount(20);
echo "$emp1->name has worked for $emp1->workingDays and taken $emp1->totalLeaveTaken leaves." . PHP_EOL;
echo "$emp1->name salary is $salary" . PHP_EOL;
