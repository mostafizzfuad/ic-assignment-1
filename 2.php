<?php
function countWords($filePath) {

    if (!file_exists($filePath)) {
        return "File does not exist.";
    }

    $contents = file_get_contents($filePath);
    preg_match_all('/\b\w+\b/', $contents, $matches);

    // count
    $wordCount = count($matches[0]);

    return $wordCount;
}

$filePath = './file.txt';

echo countWords($filePath);
