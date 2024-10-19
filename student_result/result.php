<?php

function calculateResult($marks) {
    // Validate if all marks are in the range of 0 to 100
    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Mark range is invalid<br>";
            return;
        }
    }

    // Check if the student has failed in any subject
    foreach ($marks as $mark) {
        if ($mark < 33) {
            echo "Result: Failed (Score below 33 in one or more subjects)<br>";
            return;
        }
    }

    // Calculate total and average marks
    $total = array_sum($marks);
    $average = $total / count($marks);

    // Determine the grade using switch-case
    $grade = "";
    switch (true) {
        case ($average >= 80 && $average <= 100):
            $grade = "A+";
            break;
        case ($average >= 70 && $average <= 79):
            $grade = "A";
            break;
        case ($average >= 60 && $average <= 69):
            $grade = "A-";
            break;
        case ($average >= 50 && $average <= 59):
            $grade = "B";
            break;
        case ($average >= 40 && $average <= 49):
            $grade = "C";
            break;
        case ($average >= 33 && $average <= 39):
            $grade = "D";
            break;
        default:
            $grade = "F";
    }

    // Output the results
    echo "Total Marks: $total<br>";
    echo "Average Marks: $average<br>";
    echo "Grade: $grade<br>";
}

// Sample input: Marks for five subjects
$marks = array(45, 50, 60, 40, 37);  // Example with valid marks

// Call the function to calculate and display the result
calculateResult($marks);

?>
