<!doctype html>
<html>
<head>
    <title>
        Data Types
    </title>
</head>
<body>

<h1>Exercise 1: Print Student Details</h1>

    <?php
        $studentName = "Alex";
        $classSection = "5c";
        $age = 10;
        $gender = "male";
        $contact = "+123456789";

        //initialized variables
        $maths = 0;
        $science = 0;
        $total = 0;
        $totalMarks = 200;
        $percentage = 0;
        $passed = null;

    ?>
<h2>Student Information:</h2>
    
    <table border = "1">
        <tr>
            <td>Name</td>
            <td>Class</td>
            <td>Age</td>
            <td>Gender</td>
            <td>Contact</td>
        </tr>
        <tr>
            <td><?= $studentName ?></td> <!--here the value is printed from php, same with all the down value-->
            <td><?= $classSection ?></td>
            <td><?= $age ?></td>
            <td><?= $gender ?></td>
            <td><?= $contact ?></td>
        </tr>
    </table>

<h2>Exams Attended and Marks:</h2>
    
    <?php
        $maths = 56;
        $science = 78;
        $total = $maths + $science;
        $examAttended = ($total > 0) ? true : false;
    ?>
    Exam Attended: <?= ($examAttended) ? "yes Atteded" : "Not attended"; ?>

<h2>Final Marks:</h2>
        Total Marks: <?= $total ?>
<h2>Percentage:</h2>
    <?php
        $percentage = ($total / $totalMarks)*100;
    ?>
    percentage: <?= $percentage ?>
<h2>Result:</h2>
    final Result : <?= ($percentage >= 60) ? "passed" : "failed"; ?>
    

</body>
</html>

