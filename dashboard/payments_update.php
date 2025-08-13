                    <?php if (session_status() === PHP_SESSION_NONE) {include("auth_session.php");}
                    require('../db.php');

                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['collegeFee'])) {
                      $collegePaymentMethod = $_POST['collegePaymentMethod'];
                      $collegeReferenceNumber = $_POST['collegeReferenceNumber'];
                      $collegeReceipt = $_FILES['collegeReceipt']['name'];

                      // Perform the UPDATE query for college fee
                      $query = "UPDATE stud_payment
                              SET payment_method = '$collegePaymentMethod',
                                  reference_number = '$collegeReferenceNumber',
                                  receipt = '$collegeReceipt'
                              WHERE organization_fee_id = (SELECT organization_fee_id FROM organization_fees WHERE fee_type = 'College' AND student_id = '$studentId')";
                      $result = mysqli_query($con, $query);

                      if ($result) {
                        // College fee update successful
                        // Redirect or display a success message
                        // ...
                        header("Location: ./?page=payment");
                        exit(); // Make sure to exit the script after redirecting
                      } else {
                        echo "Error inserting data: " . mysqli_error($con);
                      }
                      // Close the database connection
                      mysqli_close($con);

                    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['departmentFee'])) {
                      $departmentPaymentMethod = $_POST['departmentPaymentMethod'];
                      $departmentReferenceNumber = $_POST['departmentReferenceNumber'];
                      $departmentReceipt = $_FILES['departmentReceipt']['name'];

                      // Perform the UPDATE query for department fee
                      $query = "UPDATE stud_payment
                              SET payment_method = '$departmentPaymentMethod',
                                  reference_number = '$departmentReferenceNumber',
                                  receipt = '$departmentReceipt'
                              WHERE organization_fee_id = (SELECT organization_fee_id FROM organization_fees WHERE fee_type = 'Department' AND student_id = '$studentId')";
                      $result = mysqli_query($con, $query);

                      if ($result) {
                        // Department fee update successful
                        // Redirect or display a success message
                        // ...
                        // Redirect to the current page using header()
                        header("Location: ./?page=payment");
                        exit(); // Make sure to exit the script after redirecting
                      } else {
                        echo "Error inserting data: " . mysqli_error($con);
                      }
                      // Close the database connection
                      mysqli_close($con);

                    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['sscFee'])) {
                      $sscPaymentMethod = $_POST['sscPaymentMethod'];
                      $sscReferenceNumber = $_POST['sscReferenceNumber'];
                      $sscReceipt = $_FILES['sscReceipt']['name'];

                      // Perform the UPDATE query for SSC fee
                      $query = "UPDATE stud_payment
                              SET payment_method = '$sscPaymentMethod',
                                  reference_number = '$sscReferenceNumber',
                                  receipt = '$sscReceipt'
                              WHERE organization_fee_id = (SELECT organization_fee_id FROM organization_fees WHERE fee_type = 'SSC' AND student_id = '$studentId')";
                      $result = mysqli_query($con, $query);

                      if ($result) {
                        // SSC fee update successful
                        // Redirect or display a success message
                        // ...
                        // Redirect to the current page using header()
                        header("Location: ./?page=payment");
                        exit(); // Make sure to exit the script after redirecting
                      } else {
                        echo "Error inserting data: " . mysqli_error($con);
                      }
                      // Close the database connection
                      mysqli_close($con);

                      // Perform the UPDATE query for Bagwis fee
                    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['bagwisFee'])) {
                      $query = "UPDATE stud_payment
                              SET payment_method = '$bagwisPaymentMethod',
                                  reference_number = '$bagwisReferenceNumber',
                                  receipt = '$bagwisReceipt'
                              WHERE organization_fee_id = (SELECT organization_fee_id FROM organization_fees WHERE fee_type = 'BAGWIS' AND student_id = '$studentId')";
                      $result = mysqli_query($con, $query);

                      if ($result) {
                        // SSC fee update successful
                        // Redirect or display a success message
                        // ...
                        // Redirect to the current page using header()
                        header("Location: ./?page=payment");
                        exit(); // Make sure to exit the script after redirecting
                      } else {
                        echo "Error inserting data: " . mysqli_error($con);
                      }
                      // Close the database connection
                      mysqli_close($con);

                    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['insuranceFee'])) {
                      $insurancePaymentMethod = $_POST['insurancePaymentMethod'];
                      $insuranceReferenceNumber = $_POST['insuranceReferenceNumber'];
                      $insuranceReceipt = $_FILES['insuranceReceipt']['name'];

                      // Perform the UPDATE query for insurance fee
                      $query = "UPDATE stud_payment sp
                                JOIN organization_fees of ON sp.organization_fee_id = of.organization_fee_id
                                SET sp.payment_method = '$insurancePaymentMethod',
                                    sp.reference_number = '$insuranceReferenceNumber',
                                    sp.receipt = '$insuranceReceipt'
                                WHERE of.fee_type = 'Insurance' AND sp.student_id = '$studentId'";
                      $result = mysqli_query($con, $query);

                      if ($result) {
                        // Insurance fee update successful
                        // Redirect or display a success message
                        // ...
                        // Redirect to the current page using header()
                        header("Location: ./?page=payment");
                        exit(); // Make sure to exit the script after redirecting
                      } else {
                        echo "Error inserting data: " . mysqli_error($con);
                      }
                      // Close the database connection
                      mysqli_close($con);

                    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['penaltyFee'])) {
                      // $penaltyPaymentStatus = $_POST['penaltyPaymentStatus'];
                      $penaltyPaymentMethod = $_POST['penaltyPaymentMethod'];
                      $penaltyReferenceNumber = $_POST['penaltyReferenceNumber'];
                      $penaltyReceipt = $_FILES['penaltyReceipt']['name'];

                      // Perform the UPDATE query for penalty fee
                      $query = "UPDATE stud_payment sp
                                JOIN stud_penalty spn ON sp.penalty_id = spn.penalty_id
                                SET spn.payment_status = '$penaltyPaymentStatus',
                                    sp.payment_method = '$penaltyPaymentMethod',
                                    sp.reference_number = '$penaltyReferenceNumber',
                                    sp.receipt = '$penaltyReceipt'
                                WHERE spn.student_id = '$studentId'";
                      $result = mysqli_query($con, $query);

                      if ($result) {
                        // Penalty fee update successful
                        // Redirect or display a success message
                        // ...
                        // Redirect to the current page using header()
                        header("Location: ./?page=payment");
                        exit(); // Make sure to exit the script after redirecting
                      } else {
                        echo "Error inserting data: " . mysqli_error($con);
                      }
                      // Close the database connection
                      mysqli_close($con);
                      
                    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['bagwisFee'])) {
                      // $bagwisPaymentStatus = $_POST['bagwisPaymentStatus'];
                      $bagwisPaymentMethod = $_POST['bagwisPaymentMethod'];
                      $bagwisReferenceNumber = $_POST['bagwisReferenceNumber'];
                      $bagwisReceipt = $_FILES['bagwisReceipt']['name'];

                      // Perform the UPDATE query for bagwis fee
                      $query = "UPDATE stud_payment sp
                                JOIN organization_fees ofe ON sp.organization_fee_id = ofe.organization_fee_id
                                JOIN organizations o ON ofe.organization_id = o.organization_id
                                JOIN departments d ON o.department_id = d.department_id
                                SET sp.payment_status = '$bagwisPaymentStatus',
                                    sp.payment_method = '$bagwisPaymentMethod',
                                    sp.reference_number = '$bagwisReferenceNumber',
                                    sp.receipt = '$bagwisReceipt'
                                WHERE sp.student_id = '$studentId'
                                  AND d.department_abbr = '$departmentAbbr'";
                      $result = mysqli_query($con, $query);

                      if ($result) {
                        // Bagwis fee update successful
                        // Redirect or display a success message
                        // ...
                        // Redirect to the current page using header()
                        header("Location: ./?page=payment");
                        exit(); // Make sure to exit the script after redirecting
                      } else {
                        echo "Error inserting data: " . mysqli_error($con);
                      }
                      // Close the database connection
                      mysqli_close($con);
                    }

                    ?>
