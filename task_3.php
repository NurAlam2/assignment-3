<?php

$grades = array(85, 92, 78, 88, 95); // Create the grades array

function sortGradesDescending($grades) {
    rsort($grades); // Sort the array in descending order
    return $grades;
}

$sortedGrades = sortGradesDescending($grades);

// Print the sorted grades array
print_r($sortedGrades);
