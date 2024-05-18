<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $_POST['studentId'] ?? '';
    $academic_year = $_POST['academicYear'] ?? '';
    $course = $_POST['course'] ?? '';
    $semester = $_POST['semester'] ?? '';
    $comments = $_POST['comments'] ?? '';
    $signature = $_POST['signature'] ?? '';

    $data = [];
    for ($i = 1; $i <= 8; $i++) {
        for ($j = 1; $j <= 6; $j++) {
            $key = "q{$i}_course{$j}";
            $data[$key] = $_POST[$key] ?? 0; // Ensure default value is 0 for integer fields
        }
    }

    // Debugging: Print the $_POST data and data array
    echo "<pre>";
    print_r($_POST);
    print_r($data);
    echo "</pre>";

    $columnCount = 6 + (8 * 6); // 6 basic columns + 48 feedback columns
    $valueCount = count($data) + 6; // Total values expected in the SQL statement

    // Debugging: Print column and value count
    echo "Column Count: " . $columnCount . "<br>";
    echo "Value Count: " . $valueCount . "<br>";

    // Ensure the correct number of columns and values
    if ($columnCount !== $valueCount) {
        die("Column count doesn't match value count.");
    }

    // Debugging: Print final SQL statement with placeholders
    $sql = "INSERT INTO students_feedback (
        student_id, academic_year, course, semester, comments, signature, 
        q1_course1, q1_course2, q1_course3, q1_course4, q1_course5, q1_course6, 
        q2_course1, q2_course2, q2_course3, q2_course4, q2_course5, q2_course6, 
        q3_course1, q3_course2, q3_course3, q3_course4, q3_course5, q3_course6, 
        q4_course1, q4_course2, q4_course3, q4_course4, q4_course5, q4_course6, 
        q5_course1, q5_course2, q5_course3, q5_course4, q5_course5, q5_course6, 
        q6_course1, q6_course2, q6_course3, q6_course4, q6_course5, q6_course6, 
        q7_course1, q7_course2, q7_course3, q7_course4, q7_course5, q7_course6, 
        q8_course1, q8_course2, q8_course3, q8_course4, q8_course5, q8_course6
    ) VALUES (
        ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
    )";

    echo $sql; // Debugging: Output the SQL query

    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars($conn->error));
    }

    // Bind parameters
    $types = "ssssss" . str_repeat("i", 48);
    $values = array_merge([$student_id, $academic_year, $course, $semester, $comments, $signature], array_values($data));

    // Debugging: Print the types and values being bound
    echo "Types: " . $types . "<br>";
    echo "Values: ";
    print_r($values);

    $stmt->bind_param($types, ...$values);

    if ($stmt->execute()) {
        echo "Feedback submitted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
