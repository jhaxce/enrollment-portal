                  <?php include("../db.php");

                  // Check if the form is submitted
                  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_profile'])) {
                    
                    if (!isset($_POST['agree'])) {
                      mysqli_close($con);
                      // Redirect to the current page using header()
                      header("Location: ./?page=profile");
                      ?>
                      <script>
                      $("#feedback").html("Make sure you agree to the condition");
                      </script>
                      <?php
                      exit(); // Make sure to exit the script after redirecting
                    }

                    // Retrieve the form data
                    $firstName = $_POST['student_first_name'];
                    $middleName = $_POST['student_middle_name'];
                    $lastName = $_POST['student_last_name'];

                    $birthDay = $_POST['birth_date_day'];
                    $birthMonth = $_POST['birth_date_month'];
                    $birthYear = $_POST['birth_date_year'];

                    $gender = $_POST['gender'];
                    $religion = $_POST['religion'];
                    $bloodType = $_POST['blood_type'];
                    $nationality = $_POST['nationality'];
                    $nationalId = $_POST['national_id'];

                    $father = $_POST['father'];
                    $mother = $_POST['mother'];
                    $guardian = $_POST['guardian'];

                    $email = $_POST['email'];
                    $mobileNumber = $_POST['mobile_number'];

                    $permanentProvince = $_POST['permanent_province'];
                    $permanentMunicipality = $_POST['permanent_municipality'];
                    $permanentBarangay = $_POST['permanent_barangay'];
                    $permanentStreet = $_POST['permanent_street'];
                    $temporaryProvince = $_POST['temporary_province'];
                    $temporaryMunicipality = $_POST['temporary_municipality'];
                    $temporaryBarangay = $_POST['temporary_barangay'];
                    $temporaryStreet = $_POST['temporary_street'];

                    // Perform any necessary data validation or sanitization

                    // Insert the data into the database
                    $query1 = "INSERT INTO stud_profile (student_id, first_name, middle_name, last_name, birth_date_day, birth_date_month, birth_date_year, gender, religion, blood_type, nationality, national_id)
                              VALUES ('$studentId', '$firstName', '$middleName', '$lastName', '$birthDay', '$birthMonth', '$birthYear', '$gender', '$religion', '$bloodType', '$nationality', '$nationalId')";

                    $query2 = "INSERT INTO stud_parents (student_id, father, mother, guardian)
                              VALUES ('$studentId', '$father', '$mother', '$guardian')";

                    $query3 = "INSERT INTO stud_contacts (student_id, email, mobile_number) 
                              VALUES ('$studentId', '$email', '$mobileNumber')";

                    $query4 = "INSERT INTO stud_addresses (student_id, permanent_province, permanent_municipality, permanent_barangay, permanent_street, temporary_province, temporary_municipality, temporary_barangay, temporary_street)
                              VALUES ('$studentId', '$permanentProvince', '$permanentMunicipality', '$permanentBarangay', '$permanentStreet', '$temporaryProvince', '$temporaryMunicipality', '$temporaryBarangay', '$temporaryStreet')";

                    // if (mysqli_query($con, $query1)){
                    //   if (mysqli_query($con, $query2)){
                    //     if (mysqli_query($con, $query3)){
                    //       if (mysqli_query($con, $query4)){
                    // }}}}

                    // Combine the queries into a single statement
                    $combinedQueryInsert = "$query1; $query2; $query3; $query4";

                    // Execute the queries
                    if (mysqli_multi_query($con, $combinedQueryInsert)) {
                      // Data inserted successfully

                      // Redirect to the current page using header()
                      header("Location: ./?page=profile");
                      exit(); // Make sure to exit the script after redirecting
                    } else {
                      echo "Error inserting data: " . mysqli_error($con);
                    }
                    // Close the database connection
                    mysqli_close($con);
                  }?>