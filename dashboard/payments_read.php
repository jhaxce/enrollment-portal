                  <?php
                  if (session_status() === PHP_SESSION_NONE) {
                    include("auth_session.php");
                  }
                  require('../db.php');

                  // Fetch the student's information
                  $query = "SELECT sa.username, sa.course_abbr, sa.year_level, c.college_abbr, d.department_abbr
                            FROM stud_accounts sa
                            JOIN departments d ON sa.course_abbr = d.course_abbr
                            JOIN colleges c ON d.college_id = c.college_id
                            WHERE sa.student_id = '$studentId'";

                  $result = mysqli_query($con, $query);

                  if ($result) {
                    // Check if the student exists
                    if (mysqli_num_rows($result) > 0) {
                      // Fetch the row
                      $row = mysqli_fetch_assoc($result);

                      $username = $row['username'];
                      $courseAbbr = $row['course_abbr'];
                      $yearLevel = $row['year_level'];
                      $collegeAbbr = $row['college_abbr'];
                      $departmentAbbr = $row['department_abbr'];
                    }
                  }

                  // Retrieve department fee
                  $query = "SELECT sp.organization_fee_id, sp.payment_status, sp.payment_method, sp.reference_number, sp.receipt, sp.due_date, sf.amount
                            FROM stud_payment sp
                            INNER JOIN organization_fees sf ON sp.organization_fee_id = sf.organization_fee_id
                            INNER JOIN organizations o ON sf.organization_id = o.organization_id
                            INNER JOIN departments d ON o.department_id = d.department_id
                            WHERE sp.student_id = '$studentId'
                            AND d.department_abbr = '$departmentAbbr'";

                  $result = mysqli_query($con, $query);

                  if ($result) {
                    $departmentFee = mysqli_fetch_assoc($result);

                    $departmentFeeId = $departmentFee['organization_fee_id'] ?? '';
                    $departmentPaymentStatus = $departmentFee['payment_status'] ?? '';
                    $departmentPaymentMethod = $departmentFee['payment_method'] ?? '';
                    $departmentReferenceNumber = $departmentFee['reference_number'] ?? '';
                    $departmentReceipt = $departmentFee['receipt'] ?? '';
                    $departmentDueDate = $departmentFee['due_date'] ?? '';
                    $departmentAmount = $departmentFee['amount'] ?? '';
                  }

                  // Retrieve college fee
                  $query = "SELECT sp.payment_status, sp.payment_method, sp.reference_number, sp.receipt, sp.due_date, sf.amount
                            FROM stud_payment sp
                            INNER JOIN organization_fees sf ON sp.organization_fee_id = sf.organization_fee_id
                            INNER JOIN organizations o ON sf.organization_id = o.organization_id
                            INNER JOIN colleges c ON o.college_id = c.college_id
                            WHERE sp.student_id = '$studentId'
                            AND c.college_abbr = '$collegeAbbr'";

                  $result = mysqli_query($con, $query);

                  if ($result) {
                    $collegeFee = mysqli_fetch_assoc($result);

                    $collegePaymentStatus = $collegeFee['payment_status'] ?? '';
                    $collegePaymentMethod = $collegeFee['payment_method'] ?? '';
                    $collegeReferenceNumber = $collegeFee['reference_number'] ?? '';
                    $collegeReceipt = $collegeFee['receipt'] ?? '';
                    $collegeDueDate = $collegeFee['due_date'] ?? '';
                    $collegeAmount = $collegeFee['amount'] ?? '';
                  }

                  // Retrieve SSC fee
                  $query = "SELECT sp.payment_status, sp.payment_method, sp.reference_number, sp.receipt, sp.due_date, sf.amount
                            FROM stud_payment sp
                            INNER JOIN organization_fees sf ON sp.organization_fee_id = sf.organization_fee_id
                            INNER JOIN organizations o ON sf.organization_id = o.organization_id
                            WHERE sp.student_id = '$studentId'
                            AND o.organization_abbr = 'SSC'";

                  $result = mysqli_query($con, $query);

                  if ($result) {
                  $sscFee = mysqli_fetch_assoc($result);

                  $sscPaymentStatus = $sscFee['payment_status'] ?? '';
                  $sscPaymentMethod = $sscFee['payment_method'] ?? '';
                  $sscReferenceNumber = $sscFee['reference_number'] ?? '';
                  $sscReceipt = $sscFee['receipt'] ?? '';
                  $sscDueDate = $sscFee['due_date'] ?? '';
                  $sscAmount = $sscFee['amount'] ?? '';
                  }

                  // Retrieve BAGWIS fee
                  $query = "SELECT sp.payment_status, sp.payment_method, sp.reference_number, sp.receipt, sp.due_date, sf.amount
                            FROM stud_payment sp
                            INNER JOIN organization_fees sf ON sp.organization_fee_id = sf.organization_fee_id
                            INNER JOIN organizations o ON sf.organization_id = o.organization_id
                            WHERE sp.student_id = '$studentId'
                            AND o.organization_abbr = 'BAGWIS'";

                  $result = mysqli_query($con, $query);

                  if ($result) {
                  $bagwisFee = mysqli_fetch_assoc($result);

                  $bagwisPaymentStatus = $bagwisFee['payment_status'] ?? '';
                  $bagwisPaymentMethod = $bagwisFee['payment_method'] ?? '';
                  $bagwisReferenceNumber = $bagwisFee['reference_number'] ?? '';
                  $bagwisReceipt = $bagwisFee['receipt'] ?? '';
                  $bagwisDueDate = $bagwisFee['due_date'] ?? '';
                  $bagwisAmount = $bagwisFee['amount'] ?? '';
                  }

                  // Retrieve PESO fee
                  $query = "SELECT sp.payment_status, sp.payment_method, sp.reference_number, sp.receipt, sp.due_date, sf.amount
                            FROM stud_payment sp
                            INNER JOIN organization_fees sf ON sp.organization_fee_id = sf.organization_fee_id
                            INNER JOIN organizations o ON sf.organization_id = o.organization_id
                            WHERE sp.student_id = '$studentId'
                            AND o.organization_abbr = 'PESO'";

                  $result = mysqli_query($con, $query);

                  if ($result) {
                  $pesoFee = mysqli_fetch_assoc($result);

                  $pesoPaymentStatus = $pesoFee['payment_status'] ?? '';
                  $pesoPaymentMethod = $pesoFee['payment_method'] ?? '';
                  $pesoReferenceNumber = $pesoFee['reference_number'] ?? '';
                  $pesoReceipt = $pesoFee['receipt'] ?? '';
                  $pesoDueDate = $pesoFee['due_date'] ?? '';
                  $pesoAmount = $pesoFee['amount'] ?? '';
                  }

                  // Retrieve insurance fee for the student's college
                  $queryInsurance = "SELECT sp.organization_id, sp.penalty_amount, sp.payment_status, sp.payment_method, sp.reference_number, sp.receipt, sp.due_date
                  FROM stud_penalty sp
                  JOIN organizations o ON sp.organization_id = o.organization_id
                  WHERE sp.student_id = '$studentId'
                  AND sp.penalty_from = 'College'";

                  $resultInsurance = mysqli_query($con, $queryInsurance);

                  if ($resultInsurance) {
                    $insuranceFee = mysqli_fetch_assoc($resultInsurance);

                    $insuranceOrganizationId = $insuranceFee['organization_id'];
                    $insuranceAmount = $insuranceFee['penalty_amount'];
                    $insurancePaymentStatus = $insuranceFee['payment_status'];
                    $insurancePaymentMethod = $insuranceFee['payment_method'];
                    $insuranceReferenceNumber = $insuranceFee['reference_number'];
                    $insuranceReceipt = $insuranceFee['receipt'];
                    $insuranceDueDate = $insuranceFee['due_date'];
                  } else {
                    // Handle query error
                  }
        
                  // Retrieve penalty fees
                  $query = "SELECT penalty_id, organization_id, penalty_from, penalty_amount, payment_status, payment_method, reference_number, receipt, due_date
                            FROM stud_penalty
                            WHERE student_id = '$studentId'";

                  $result = mysqli_query($con, $query);

                  $penaltyFees = array();

                  if ($result) {
                    // Retrieve the penalty fee details
                    while ($row = mysqli_fetch_assoc($result)) {
                      $penaltyFee = array(
                      'penalty_id' => $row['penalty_id'],
                      'organization_id' => $row['organization_id'],
                      'penalty_from' => $row['penalty_from'],
                      'penalty_amount' => $row['penalty_amount'],
                      'payment_status' => $row['payment_status'],
                      'payment_method' => $row['payment_method'],
                      'reference_number' => $row['reference_number'],
                      'receipt' => $row['receipt'],
                      'due_date' => $row['due_date']
                    );

                    $penaltyFees[] = $penaltyFee;
                    }
                  }

                  // Close the database connection
                  mysqli_close($con);
                  ?>