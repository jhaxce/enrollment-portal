<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.

    $servername = "sql210.infinityfree.com";  // Replace with your database server name
    $username = "epiz_32823328";         // Replace with your database username
    $password = "9lRQmdASby";             // Replace with your database password
    $dbname = "epiz_32823328_enrollment";    // Replace with your database name

    // Create a connection
    $con = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>