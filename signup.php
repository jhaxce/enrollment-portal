<?php
require('db.php');

// When form submitted, insert values into the database.
if (isset($_POST['student_id'])) {
    // Remove backslashes
    $student_id = stripslashes($_REQUEST['student_id']);
    // Validate student ID format
    if (!preg_match('/^\d{4}-\d{4}$/', $student_id)) {
        echo "<h4 style='color: maroon;'>Invalid Student ID format</h4>";
        exit();
    }

    $course_abbr = isset($_REQUEST['course_abbr']) ? stripslashes($_REQUEST['course_abbr']) : '';
    $course_abbr = mysqli_real_escape_string($con, $course_abbr);    
    $year_level = isset($_REQUEST['course_abbr']) ? stripslashes($_REQUEST['year_level']) : '';
    $year_level = mysqli_real_escape_string($con, $year_level);
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con, $username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    $confirm_password = stripslashes($_REQUEST['confirm_password']);
    $confirm_password = mysqli_real_escape_string($con, $confirm_password);

    $agree = isset($_REQUEST['agreement']) ? stripslashes($_REQUEST['agreement']) : '';
    $agree = mysqli_real_escape_string($con, $agree);

    if ($course_abbr === '') {
        echo "<h4 style='color: maroon;'>Please select a course</h4>";
        exit();
    }

    if ($password !== $confirm_password) {
        echo "<h4 style='color: maroon;'>Passwords do not match</h4>";
        exit();
    }

    // Check if student ID or username already exists
    $query = "SELECT * FROM `stud_accounts` WHERE student_id='$student_id' OR username='$username'";
    $checkResult = mysqli_query($con, $query);
    if (mysqli_num_rows($checkResult) > 0) {
        echo "<h4 style='color: maroon;'>Student ID or username already exists</h4>";
        exit();
    }

    if ($agree !== 'confirm') {
        echo "<h4 style='color: maroon;'>Please agree to the terms and conditions</h4>";
        exit();
    }

    $create_datetime = date("Y-m-d H:i:s");
    $query = "INSERT INTO `stud_accounts` (student_id, username, password, course_abbr, year_level, create_datetime)
              VALUES ('$student_id', '$username', '" . md5($password) . "', '$course_abbr', '$year_level', '$create_datetime')";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo "<h4 style='color: #2c7134;'>...</h4>"; // Success
    } else {
        echo "<h4 style='color: maroon;'>Failed</h4>";
        exit();
    }
}
?>
