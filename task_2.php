<?php

$numbers = range(1, 10); // Create an array containing numbers 1 to 10

function removeEvenNumbers($numbers) {
    $result = array();

    foreach ($numbers as $number) {
        if ($number % 2 != 0) {
            $result[] = $number;
        }
    }

    return $result;
}

$filteredNumbers = removeEvenNumbers($numbers);

// Print the resulting array
print_r($filteredNumbers);



