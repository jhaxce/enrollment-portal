<?php
    session_start();
    
    if(!isset($_SESSION["username"])) {
        header("Location: ../");
        exit();
    }

    $studentId = $_SESSION['student_id'];
?>