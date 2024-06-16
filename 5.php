<?php

$num = 62343;
$sum = 0;

while ($num != 0) {
    $rem = $num % 10;
    $sum += $rem;
    $num /= 10;
}

echo $sum;
?>
