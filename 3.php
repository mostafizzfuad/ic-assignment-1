<?php
function reverseWords($sentence) {
    $words = explode(" ", $sentence);

    $reversedWords = array_map(function ($word) {
        return strrev($word);
    }, $words);

    $reversed = implode(" ", $reversedWords);

    return $reversed;
}

$sentence = "I love programming";
echo reverseWords($sentence);
