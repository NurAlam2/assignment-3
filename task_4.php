<?php
function calculateAverageGrades($studentGrades) {
    $averageGrades = array();

    foreach ($studentGrades as $student => $grades) {
        $total = array_sum($grades);
        $count = count($grades);
        $average = $total / $count;

        $averageGrades[$student] = $average;
    }

    return $averageGrades;
}

$studentGrades = array(
    'Student 1' => array('Math' => 85, 'English' => 92, 'Science' => 78),
    'Student 2' => array('Math' => 88, 'English' => 95, 'Science' => 90),
    'Student 3' => array('Math' => 75, 'English' => 80, 'Science' => 85)
);

$averageGrades = calculateAverageGrades($studentGrades);

// Print the average grades for each student
foreach ($averageGrades as $student => $average) {
    echo "$student: Average Grade = $average\n";
}
