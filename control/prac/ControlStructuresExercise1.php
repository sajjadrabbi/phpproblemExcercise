<!doctype html>
<html>
<head>
    <title>
        Control Structures
    </title>
</head>
<body>

    <h1>Exercise 1: Display Odd and Even Numbers</h1>

    <table>

    <tr>
    <td>Numbers</td>
    <td>Even</td>
    <td>Odd</td>
    </tr>


    <?php
    include "myConfigfile.php";

    for($i=0; $i<=myConfig\MAX_NUMBERS; $i++){

        echo "<tr>";// this thing is looping
        $result = $i % 2;
        echo "<td>$i</td>";
        if($result == 0){
            echo "<td>Yes</td> <td>No</td>";
        }else{
            echo "<td>No</td> <td>Yes</td>";
        }
        echo "</tr>";
    }

    ?>
    </table>


</body>
</html>

