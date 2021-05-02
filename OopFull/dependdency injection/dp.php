<?php
//Parent
class Course
{
    public $cid;

    function __construct($cid)
    {
        $this->cid = $cid;
    }

    function courseDetails(): void
    {
        echo "Your course ID is: " . $this->cid . PHP_EOL;
    }
}
//Child
//this example is also for to show that, i can call the course object from the child
class Lesson extends Course
{
    public $lid;

    function __construct($lid, Course $course1)
    {
        $this->lid = $lid;
        $this->cid = $course1->cid;
    }
    function showLessons()
    {
        echo "Course ID $this->cid, here are the lessons ID $this->lid." . PHP_EOL;
    }
}
//another child
class Quiz extends Course
{
    public $qid;
    function __construct($qid, Course $course1)
    {
        $this->qid = $qid;
        $this->cid = $course1->cid;
    }
}

$course1 = new Course(5);
echo "This is from direct course " . $course1->cid . PHP_EOL;
//$course->courseDetails();
$lesson1 = new Lesson(100, $course1); //object of a parent is passed
//$lesson1->showLessons();
//$lesson1->courseDetails();

$lesson1->cid = 10;
echo $lesson1->cid . PHP_EOL;
echo $course1->cid . PHP_EOL;

$lesson1->showLessons();
