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

    function __construct($lid, Course $c)
    {
        $this->lid = $lid;
        $this->cid = $c->cid;
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
    function __construct($qid, Course $c)
    {
        $this->qid = $qid;
        $this->cid = $c->cid;
    }
}

$course1 = new Course(5);
//echo $course->cid;
//$course->courseDetails();
$lesson1 = new Lesson(100, $course1);
$lesson1->showLessons();
$lesson1->courseDetails();
echo $lesson1->cid;
