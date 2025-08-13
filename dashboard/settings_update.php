                  <?php
                  // Assuming you have established a database connection
                  if (session_status() === PHP_SESSION_NONE) {include("auth_session.php");};
                  require('../db.php');

                  // Retrieve the student ID from the session
                  // $studentId = $_SESSION['student_id'];

                  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_picture'])) {
                      // Check if the dark mode value is submitted
                      $darkMode = isset($_POST['dark_mode']) ? $_POST['dark_mode'] : 0;

                      // Check if a profile picture is uploaded
                      if (isset($_FILES['display_picture']) && $_FILES['display_picture']['error'] === UPLOAD_ERR_OK) {
                          $profilePicture = file_get_contents($_FILES['display_picture']['tmp_name']);
                          // Update the dark mode and profile picture in the stud_settings table
                          $query = "UPDATE stud_settings SET student_id = ?, dark_mode = ?, profile_picture = ? WHERE student_id = ?";
                          $stmt = $con->prepare($query);
                          $stmt->bind_param("sbss", $studentId, $darkMode, $profilePicture, $studentId);
                          $stmt->execute();
                          $stmt->close();
                      } else {
                          $con->close();

                          // Redirect back to the settings page or any other desired location
                          header("Location: ./?page=settings");
                          ?>
                          <script>
                          $("#feedback").html("Error in updating");
                          </script>
                          <?php
                          exit(); // Make sure to exit the script after redirecting
                      }

                      $con->close();

                      // Redirect back to the settings page or any other desired location
                      header("Location: ./?page=settings");
                      exit();
                  }
                  ?>
