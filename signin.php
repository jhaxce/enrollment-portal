<?php
require('db.php');
session_start();

// When form submitted, check and create user session.
if (isset($_POST['username'])) {
    $username = stripslashes($_REQUEST['username']);    // removes backslashes
    $username = mysqli_real_escape_string($con, $username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);

    // Check if the user exists in the database
    $query = "SELECT * FROM `stud_accounts` WHERE username='$username'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $rows = mysqli_num_rows($result);

    if ($rows == 1) {
        $user = mysqli_fetch_assoc($result);
        if (md5($password) === $user['password']) {
            $_SESSION['username'] = $username;

            // Retrieve the student ID from the database
            $studentId = $user['student_id'];
            $_SESSION['student_id'] = $studentId;

            // Redirect to user dashboard page
            $response = array(
                'redirect' => 'dashboard/'
            );
        } else {
            // Password is incorrect
            $response = array(
                'message' => '<h4 style=\'color: maroon;\'>Incorrect password</h4>'
            );
        }
    } else {
        // User does not exist
        $response = array(
            'message' => '<h4 style=\'color: maroon;\'>User does not exist</h4>'
        );
    }
    // Send the JSON response
    echo json_encode($response);
}
?>