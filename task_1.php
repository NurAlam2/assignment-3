<?php

$text = "The quick brown fox jumps over the lazy dog.";

function manipulateString($text) {
    // Convert the string to all lowercase
    $text = strtolower($text);

    // Replace "brown" with "red" in the string
    $text = str_replace("brown", "red", $text);

    // Print the modified text
    echo $text;
}
manipulateString($text);

