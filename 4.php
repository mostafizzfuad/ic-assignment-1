<?php

$numberOfRows = 5;

for ($row = 1; $row <= $numberOfRows; $row++) {
    // spaces
    for ($col = 1; $col <= $numberOfRows - $row; $col++) {
        echo " ";
    }
    // stars
    for ($col = 1; $col <= 2 * $row - 1; $col++) {
        echo "*";
    }
    echo "\n";
}
