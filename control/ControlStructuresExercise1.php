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
    <th>number</th>
    <th>Even Number</th>
    <th>Odd Number</th> 
  </tr>

    <?php
        include "myConfigFile.php";

        $constantt = config\MAX_NUMBERS;

        for($i = 1; $i <= $constantt; $i++){
            
            $result = $i % 2;

            echo "<tr>"; //-------this shows one row
            echo "<td>$i</td>"; //one column for number

            if($result == 0){
                echo "<td>Yes</td>"; // another column for even number
                echo "<td>No</td>"; // another column for odd number
            }
            else{
                echo "<td>No</td>";
                echo "<td>Yes</td>";
            }
            echo "</tr>";//-------row tag ends
        }


    ?>
</table><!--table ends with tag-->


</body>
</html>

