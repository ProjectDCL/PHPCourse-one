<?php

echo "<table>";

echo "<table>";

for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($b = 1; $b <= 10; $b++) {
        if ($i % 2 == 0 and $b % 2 == 0) {
            echo "<td>(" . $i*$b . ")</td>";
        } elseif ($i % 2 == 1 and $b % 2 == 1) {
            echo "<td>[" . $i*$b . "]</td>";
        } else {
            echo "<td>" . $i*$b . "</td>";
        }
    }


    echo "</tr>";
}

echo "</table>";
