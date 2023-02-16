<?php
function tabel($maxNumber)
{
    echo "<table>";
    echo "<tr>";
    for ($i = 1; $i <= $maxNumber; $i++) {

        if ($i % 8 == 1) {
            echo "</tr>";
        } elseif ($i == $maxNumber + 1) {
            echo "</tr>";
        }
        if ($i % 3 == 0 || $i % 4 == 0) {
            echo "<td>" . $i . "</td>";
        } else {
            echo "<td style='background:black;color:white;'>" . $i . "</td>";
        }
    }

    echo "</table>";
}

tabel(64);
