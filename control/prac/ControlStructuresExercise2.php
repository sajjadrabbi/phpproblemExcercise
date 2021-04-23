<!doctype html>
<html>

<head>
    <title>
        Control Structures
    </title>
</head>

<body>

    <h1>Exercise 1: Easy Table Calculator</h1>

    <table>

        <?php

        for ($value = 1; $value <= 10; $value++) {
            echo "<tr>";
            for ($multiplyer = 1; $multiplyer <= 10; $multiplyer++) {
                echo "<td> $multiplyer x $value = " . ($multiplyer * $value) . "</td>";
            }
            echo "</tr>";
        }

        ?>

    </table>


</body>

</html>