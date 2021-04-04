<!doctype html>
<html>
<head>
    <title>
        Data Types
    </title>
</head>
<body>

<h1>Exercise 1: Use All Data Types</h1>

<h2>Calculate the area using Length and breath using Integer:</h2>
    <?php
        $length = 4;
        $breath = 5;
        $result = $length * $breath;
        echo "Area value is: $result"; 
    ?>
<h2>Calculate Student Exact Marks Percentage with Double:</h2>
    <?php
        $maths = 45;
        $science = 35;
        $total = $maths + $science;
        $totalMarks = 200;
        $percentage = $total / $totalMarks;
        echo "Percentage: " . $percentage . "<br>";

    ?>
<h2>Check if the user has admin roles:</h2>

    <?php
        $userName = "John Smath";
        $hasRoles = null;
        $adminRoles = "Admin";
        $userRoles = "Admin";

        $hasRoles = ($adminRoles == $userRoles);
        echo ($hasRoles) ? "$userName has admin Roles" : "$userName does not have Admin Roles" . "<br>";

    ?>
<h2>Define and Display a User Name using Strings:</h2>
    
    <?php
        $firstName = "John";
        $secondName = "Rabbi";
        $FullName = $firstName . " , " . $secondName;
        echo $FullName;
    ?>
<h2>Check if the variable is null or not:</h2>
    
    <?php
        $num ="sss";
        $result = !is_null($num) ? "this is the value $num" : "didnt found the value";
        echo $result;
?>

</body>
</html>

