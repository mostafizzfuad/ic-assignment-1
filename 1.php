<?php

function findMinumim($arr) {
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] < 0) {
            $arr[$i] = abs($arr[$i]);
        }
    }
    
    $min = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }

    return $min;
}

$arr = [10, -12, 34, 12, -3, 123];
echo findMinumim($arr);
