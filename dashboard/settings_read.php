                  <?php
                  // Assuming you have established a database connection
                  if (session_status() === PHP_SESSION_NONE) {include("auth_session.php");};
                  require('../db.php');

                  // Retrieve the student ID from the session
                  // $studentId = $_SESSION['student_id'];

                  // Fetch the profile picture and dark mode setting from the database
                  // $query = "SELECT profile_picture, dark_mode FROM stud_settings WHERE student_id = ?";
                  // $stmt = $con->prepare($query);
                  // $stmt->bind_param("s", $studentId);
                  // $stmt->execute();
                  // $stmt->bind_result($profilePicture, $darkMode);
                  // $stmt->fetch();
                  
                  $query = "SELECT dark_mode, profile_picture FROM stud_settings WHERE student_id = ?";
                  $stmt = $con->prepare($query);
                  $stmt->bind_param("s", $studentId);
                  $stmt->execute();
                  $result = $stmt->get_result();
                  $row = $result->fetch_assoc();
                  
                  if ($row) {
                      $darkMode = $row['dark_mode'];
                      $profilePicture = $row['profile_picture'];
                  } else {
                      $darkMode = 0;
                      $profilePicture = '';
                  }

                  // Close the statement
                  $stmt->close();
                  $con->close();
                  ?>