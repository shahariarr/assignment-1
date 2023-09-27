<?php
$studentGrades = array(
    array("Math" => 85, "English" => 92, "Science" => 78),
    array("Math" => 90, "English" => 88, "Science" => 95),
    array("Math" => 75, "English" => 80, "Science" => 72)
);

function calculateAndPrintAverages($gradesArray) {
    foreach ($gradesArray as $student) {
        $averageGrade = array_sum($student) / count($student);
        echo "Average grade: " . number_format($averageGrade, 2) . "</br>";
    }
}
calculateAndPrintAverages($studentGrades);
?>
