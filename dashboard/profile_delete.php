                  <?php include("../db.php");

                  // Check if the delete button is clicked
                  if (isset($_POST['delete_profile'])) {

                    // Delete the profile from the database
                    $query9 = "DELETE FROM stud_profile WHERE student_id = '$studentId'";
                    $query10 = "DELETE FROM stud_parents WHERE student_id = '$studentId'";
                    $query11 = "DELETE FROM stud_contacts WHERE student_id = '$studentId'";
                    $query12 = "DELETE FROM stud_addresses WHERE student_id = '$studentId'";

                    $combinedQueryDelete = "$query9; $query10; $query11; $query12";

                    // Execute the query
                    if (mysqli_multi_query($con, $combinedQueryDelete)) {
                      // Profile deleted successfully

                      // Redirect to the current page using header()
                      header("Location: ./?page=profile");
                      exit(); // Make sure to exit the script after redirecting
                    } else {
                      echo "Error deleting profile: " . mysqli_error($con);
                    }
                    // Close the database connection
                    mysqli_close($con);
                  }
                  ?>