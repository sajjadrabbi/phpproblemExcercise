<?php

declare(strict_types=1);

require_once "University.php";
require_once "Teacher.php";


$university1 = new University("Akatsuki", "3/4 japan", "#78678");
//here the 4th value is the instance or object of the university
//which was made above
//this is done because in this the child instance doesnt gets the values
//without passing the university object
$teacher1 = new Teacher("Kabuto", 45, "Martilart", $university1);

$teacher1->printTeacherDetails();
$teacher1->printUniversityDetails();
