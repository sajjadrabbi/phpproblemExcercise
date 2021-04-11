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
    <td>Odd</td>
    <td>Even</td>
    </tr>
    
    <?php

        require_once "myConfigFile.php";

        echo "<tr></tr>";

        for($counter = 0; $counter <= MyConfigFile\MAX_NUMBERS; $counter++){
            $result = $counter % 2;
            echo "<tr>";
            echo "<td>$counter</td>";
            if($result == 0){
                echo "<td>NO</td>";
                echo "<td>YES</td>";
            }else{
                echo "<td>YES</td>";
                echo "<td>NO</td>";
            }
            echo "</tr>";
        }

    
    
    ?>    
    
    
    </table>



</body>
</html>

