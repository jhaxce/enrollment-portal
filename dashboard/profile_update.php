                  <?php include("../db.php");

                  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_profile'])) {

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

                    $firstName = isset($_POST['student_first_name']) ? $_POST['student_first_name'] : '';
                    $middleName = isset($_POST['student_middle_name']) ? $_POST['student_middle_name'] : '';
                    $lastName = isset($_POST['student_last_name']) ? $_POST['student_last_name'] : '';

                    $birthDay = isset($_POST['birth_date_day']) ? $_POST['birth_date_day'] : '';
                    $birthMonth = isset($_POST['birth_date_month']) ? $_POST['birth_date_month'] : '';
                    $birthYear = isset($_POST['birth_date_year']) ? $_POST['birth_date_year'] : '';

                    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
                    $religion = isset($_POST['religion']) ? $_POST['religion'] : '';
                    $bloodType = isset($_POST['blood_type']) ? $_POST['blood_type'] : '';
                    $nationality = isset($_POST['nationality']) ? $_POST['nationality'] : '';
                    $nationalId = isset($_POST['national_id']) ? $_POST['national_id'] : '';

                    $father = isset($_POST['father']) ? $_POST['father'] : '';
                    $mother = isset($_POST['mother']) ? $_POST['mother'] : '';
                    $guardian = isset($_POST['guardian']) ? $_POST['guardian'] : '';

                    $email = isset($_POST['email']) ? $_POST['email'] : '';
                    $mobileNumber = isset($_POST['mobile_number']) ? $_POST['mobile_number'] : '';

                    $permanentProvince = isset($_POST['permanent_province']) ? $_POST['permanent_province'] : '';
                    $permanentMunicipality = isset($_POST['permanent_municipality']) ? $_POST['permanent_municipality'] : '';
                    $permanentBarangay = isset($_POST['permanent_barangay']) ? $_POST['permanent_barangay'] : '';
                    $permanentStreet = isset($_POST['permanent_street']) ? $_POST['permanent_street'] : '';
                    $temporaryProvince = isset($_POST['temporary_province']) ? $_POST['temporary_province'] : '';
                    $temporaryMunicipality = isset($_POST['temporary_municipality']) ? $_POST['temporary_municipality'] : '';
                    $temporaryBarangay = isset($_POST['temporary_barangay']) ? $_POST['temporary_barangay'] : '';
                    $temporaryStreet = isset($_POST['temporary_street']) ? $_POST['temporary_street'] : '';

                    // Perform any necessary data validation or sanitization

                    // Insert the data into the database
                    $query5 = "UPDATE stud_profile SET student_id = '$studentId', first_name = '$firstName', middle_name = '$middleName', last_name = '$lastName',
                            birth_date_day = '$birthDay', birth_date_month = '$birthMonth', birth_date_year = '$birthYear',
                            gender = '$gender', religion = '$religion', blood_type = '$bloodType', nationality = '$nationality', national_id = '$nationalId'
                            WHERE student_id = '$studentId'";

                    $query6 = "UPDATE stud_parents SET student_id = '$studentId', father = '$father', mother = '$mother', guardian = '$guardian'
                            WHERE student_id = '$studentId'";

                    $query7 = "UPDATE stud_contacts SET student_id = '$studentId', email = '$email', mobile_number = '$mobileNumber'
                            WHERE student_id = '$studentId'";

                    $query8 = "UPDATE stud_addresses SET student_id = '$studentId', permanent_province = '$permanentProvince', permanent_municipality = '$permanentMunicipality', permanent_barangay = '$permanentBarangay', permanent_street = '$permanentStreet',
                            temporary_province = '$temporaryBarangay', temporary_municipality = '$temporaryMunicipality', temporary_barangay = '$temporaryBarangay', temporary_street = '$temporaryStreet'
                            WHERE student_id = '$studentId'";

                    // Combine the queries into a single statement
                    $combinedQueryUpdate = "$query5; $query6; $query7; $query8";

                    // Execute the queries
                    if (mysqli_multi_query($con, $combinedQueryUpdate)) {
                        // Data inserted successfully

                        // Redirect to the current page using header()
                        header("Location: ./?page=profile");
                        exit(); // Make sure to exit the script after redirecting
                      } else {
                          echo "Error inserting data: " . mysqli_error($con);
                      }
                      // Close the database connection
                      mysqli_close($con);
                  }
                  ?>