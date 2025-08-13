                  <?php
                  // Assuming you have established a database connection
                  if (session_status() === PHP_SESSION_NONE) {include("auth_session.php");};
                  require('../db.php');

                  // Retrieve the student ID from the session
                  // $studentId = $_SESSION['student_id'];
                  
                  if (isset($_POST['delete_picture'])) {
                    // Prepare and execute the query to delete the profile picture from the database
                    $query = "DELETE FROM stud_settings WHERE student_id = ?";
                    $stmt = $con->prepare($query);
                    $stmt->bind_param("s", $studentId);
                    $stmt->execute();

                    // Close the statement and database connection
                    $stmt->close();
                    $con->close();
                    // Redirect back to the settings page
                    header("Location: ./?page=settings");
                  exit();
                  }
                  ?>
