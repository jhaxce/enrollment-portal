                  <?php include("../db.php");

                  // Initialize variables with empty values
                  $firstName = '';
                  $middleName = '';
                  $lastName = '';
                  $birthDay = '';
                  $birthMonth = '';
                  $birthYear = '';
                  $gender = '';
                  $religion = '';
                  $bloodType = '';
                  $nationality = '';
                  $nationalId = '';
                  $father = '';
                  $mother = '';
                  $guardian = '';
                  $email = '';
                  $mobileNumber = '';
                  $permanentProvince = '';
                  $permanentMunicipality = '';
                  $permanentBarangay = '';
                  $permanentStreet = '';
                  $temporaryProvince = '';
                  $temporaryMunicipality = '';
                  $temporaryBarangay = '';
                  $temporaryStreet = '';

                  // Retrieve the data from the students table
                  $query1316 = "SELECT stud_profile.*, stud_parents.*, stud_contacts.*, stud_addresses.*
                          FROM stud_profile
                          LEFT JOIN stud_parents ON stud_profile.student_id = stud_parents.student_id
                          LEFT JOIN stud_contacts ON stud_profile.student_id = stud_contacts.student_id
                          LEFT JOIN stud_addresses ON stud_profile.student_id = stud_addresses.student_id
                          WHERE stud_profile.student_id = '$studentId'";

                  if ($result = mysqli_query($con, $query1316)) {
                      if (mysqli_num_rows($result) > 0) {
                          while ($row = mysqli_fetch_assoc($result)) {
                              // Retrieve the form data
                              $firstName = !empty($row['first_name']) ? $row['first_name'] : '';
                              $middleName = !empty($row['middle_name']) ? $row['middle_name'] : '';
                              $lastName = !empty($row['last_name']) ? $row['last_name'] : '';

                              $birthDay = !empty($row['birth_date_day']) ? $row['birth_date_day'] : '';
                              $birthMonth = !empty($row['birth_date_month']) ? $row['birth_date_month'] : '';
                              $birthYear = !empty($row['birth_date_year']) ? $row['birth_date_year'] : '';

                              $gender = !empty($row['gender']) ? $row['gender'] : '';
                              $religion = !empty($row['religion']) ? $row['religion'] : '';
                              $bloodType = !empty($row['blood_type']) ? $row['blood_type'] : '';
                              $nationality = !empty($row['nationality']) ? $row['nationality'] : '';
                              $nationalId = !empty($row['national_id']) ? $row['national_id'] : '';

                              $father = !empty($row['father']) ? $row['father'] : '';
                              $mother = !empty($row['mother']) ? $row['mother'] : '';
                              $guardian = !empty($row['guardian']) ? $row['guardian'] : '';

                              $email = !empty($row['email']) ? $row['email'] : '';
                              $mobileNumber = !empty($row['mobile_number']) ? $row['mobile_number'] : '';

                              $permanentProvince = !empty($row['permanent_province']) ? $row['permanent_province'] : '';
                              $permanentMunicipality = !empty($row['permanent_province']) ? $row['permanent_province'] : '';
                              $permanentBarangay = !empty($row['permanent_barangay']) ? $row['permanent_barangay'] : '';
                              $permanentStreet = !empty($row['permanent_street']) ? $row['permanent_street'] : '';
                              $temporaryProvince = !empty($row['temporary_province']) ? $row['temporary_province'] : '';
                              $temporaryMunicipality = !empty($row['temporary_municipality']) ? $row['temporary_municipality'] : '';
                              $temporaryBarangay = !empty($row['temporary_barangay']) ? $row['temporary_barangay'] : '';
                              $temporaryStreet = !empty($row['temporary_street']) ? $row['temporary_street'] : '';
                          }
                          mysqli_free_result($result);
                      } else {
                          // echo "No data found for the student ID: $studentId";
                      }
                  } else {
                      echo "Query failed: " . mysqli_error($con);
                  }
                  mysqli_close($con);
                  ?>
