                  <div class="form-body">
                    <div class="row">
                      <!-- <div class="form-holder"> -->
                        <div class="form-content">
                          <div class="form-items">
                            <form action="" method="post" class="requires-validation" enc="multipart/form-data" novalidate>
                              <h4 class="mt-3">Basic Information (Read only)</h4>

                              <div class="col-md">
                                <input value="Student ID: <?php echo $studentId; ?>" class="form-control mt-3" type="text" name="student_id" placeholder="Student" readonly>
                                <!-- <div class="valid-feedback">Student ID is valid!</div> -->
                                <!-- <div class="invalid-feedback">Student ID cannot be blank!</div> -->
                              </div>                          
                              <div class="col-md">
                                <input value="College: <?php echo $collegeAbbr; ?>" class="form-control mt-3" type="text" name="college_abbr" placeholder="Student" readonly>
                                <!-- <div class="valid-feedback">Student ID is valid!</div> -->
                                <!-- <div class="invalid-feedback">Student ID cannot be blank!</div> -->
                              </div>                          
                              <div class="col-md">
                                <input value="Department: <?php echo $departmentAbbr; ?>" class="form-control mt-3" type="text" name="department_abbr" placeholder="Student" readonly>
                                <!-- <div class="valid-feedback">Student ID is valid!</div> -->
                                <!-- <div class="invalid-feedback">Student ID cannot be blank!</div> -->
                              </div>                          
                              <div class="col-md">
                                <input value="Course: <?php echo $courseAbbr; ?>" class="form-control mt-3" type="text" name="cuorse_abbr" placeholder="Student" readonly>
                                <!-- <div class="valid-feedback">Student ID is valid!</div> -->
                                <!-- <div class="invalid-feedback">Student ID cannot be blank!</div> -->
                              </div>
                              <div class="col-md">
                                <input value="Year Level: <?php echo $yearLevel; ?>" class="form-control mt-3" type="text" name="year_level" placeholder="Student" readonly>
                                <!-- <div class="valid-feedback">Student ID is valid!</div> -->
                                <!-- <div class="invalid-feedback">Student ID cannot be blank!</div> -->
                              </div>
                              
                              <hr>
                              <h4>Payment Forms</h4>
                              <p>Fill in the data below. Please make sure to submit your <a href="./?page=profile">student profile</a> first.</p>
                              <hr>
                            </form>
                            <form action="payment.php" method="post" class="requires-validation" enc="multipart/form-data" novalidate>

                              <hr>
                              <h4>College Fee</h4>

                              <div class="col-md">
                                <input value="<?php echo 'Due Date: ' . $collegeDueDate; ?>" class="form-control mt-3" type="text" name="due_date" placeholder="Due Date" readonly>
                                <!-- <div class="valid-feedback">Due date field is valid!</div>
                                <div class="invalid-feedback">Due date field cannot be blank!</div> -->
                              </div>
                              <div class="col-md">
                                <input value="<?php echo 'Amount: ' . $collegeAmount; ?>" class="form-control mt-3" type="text" name="amount" placeholder="Amount" readonly>
                                <!-- <div class="valid-feedback">Amount field is valid!</div>
                                <div class="invalid-feedback">Amount field cannot be blank!</div>
                              </div> -->
                              <div class="col-md">
                                <input value="<?php echo 'Payment Status: ' . $collegePaymentStatus; ?>" class="form-control mt-3" type="text" name="payment_status" placeholder="Payment Status" readonly>
                                <!-- <div class="valid-feedback">Payment status field is valid!</div>
                                <div class="invalid-feedback">Payment status field cannot be blank!</div> -->
                              </div>
                              <div class="col-md">
                                <input value="<?php echo $collegePaymentMethod; ?>" class="form-control mt-3" type="text" name="payment_method" placeholder="Payment Method" "required">
                                <div class="valid-feedback">Payment method field is valid!</div>
                                <div class="invalid-feedback">Payment method field cannot be blank!</div>
                              </div>
                              <div class="col-md">
                                <input value="<?php echo $collegeReferenceNumber; ?>" class="form-control mt-3" type="text" name="reference_number" placeholder="Reference Number" "required">
                                <div class="valid-feedback">Reference number field is valid!</div>
                                <div class="invalid-feedback">Reference number field cannot be blank!</div>
                              </div>
                              <div class="col-md">
                                <label>Receipt:</label>
                                <input value="<?php echo $collegeReceipt; ?>" class="form-control mt-3" type="file" accept="image/*" name="receipt" placeholder="Receipt" "required">
                                <div class="valid-feedback">Receipt field is valid!</div>
                                <div class="invalid-feedback">Receipt field cannot be blank!</div>
                              </div>

                              <div class="form-button mt-3">
                                <button id="submit" type="submit" name="collegeFee" class="btn btn-primary">Save</button>
                              </div>
                            </form>
                            <form action="payment.php" method="post" class="requires-validation" enc="multipart/form-data" novalidate>

                              <hr>
                              <h4>Department Fee</h4>

                              <div class="col-md">
                                <input value="<?php echo 'Due Date: ' . $departmentDueDate; ?>" class="form-control mt-3" type="text" name="due_date" placeholder="Due Date" readonly>
                                <!-- <div class="valid-feedback">Due date field is valid!</div>
                                <div class="invalid-feedback">Due date field cannot be blank!</div> -->
                              </div>
                              <div class="col-md">
                                <input value="<?php echo 'Amount: ' . $departmentAmount; ?>" class="form-control mt-3" type="text" name="amount" placeholder="Amount" readonly>
                                <!-- <div class="valid-feedback">Amount field is valid!</div>
                                <div class="invalid-feedback">Amount field cannot be blank!</div> -->
                              </div>
                              <div class="col-md">
                                <input value="<?php echo 'Payment Status: ' . $departmentPaymentStatus; ?>" class="form-control mt-3" type="text" name="payment_status" placeholder="Payment Status" readonly>
                                <!-- <div class="valid-feedback">Payment status field is valid!</div>
                                <div class="invalid-feedback">Payment status field cannot be blank!</div> -->
                              </div>
                              <div class="col-md">
                                <input value="<?php echo $departmentPaymentMethod; ?>" class="form-control mt-3" type="text" name="payment_method" placeholder="Payment Method" "required">
                                <div class="valid-feedback">Payment method field is valid!</div>
                                <div class="invalid-feedback">Payment method field cannot be blank!</div>
                              </div>
                              <div class="col-md">
                                <input value="<?php echo $departmentReferenceNumber; ?>" class="form-control mt-3" type="text" name="reference_number" placeholder="Reference Number" "required">
                                <div class="valid-feedback">Reference number field is valid!</div>
                                <div class="invalid-feedback">Reference number field cannot be blank!</div>
                              </div>
                              <div class="col-md">
                                <label>Receipt:</label>
                                <input value="<?php echo $departmentReceipt; ?>" class="form-control mt-3" type="file" accept="image/*" name="receipt" placeholder="Receipt" "required">
                                <div class="valid-feedback">Receipt field is valid!</div>
                                <div class="invalid-feedback">Receipt field cannot be blank!</div>
                              </div>

                              <div class="form-button mt-3">
                                <button id="submit" type="submit" name="departmentFee" class="btn btn-primary">Save</button>
                              </div>
                            </form>
                            <form action="payment.php" method="post" class="requires-validation" enc="multipart/form-data" novalidate>

                              <hr>
                              <h4>SSC Fee</h4>

                              <div class="col-md">
                                <input value="<?php echo 'Due Date: ' . $sscDueDate; ?>" class="form-control mt-3" type="text" name="due_date" placeholder="Due Date" readonly>
                                <!-- <div class="valid-feedback">Due date field is valid!</div>
                                <div class="invalid-feedback">Due date field cannot be blank!</div> -->
                              </div>
                              <div class="col-md">
                                <input value="<?php echo 'Amount: ' . $sscAmount; ?>" class="form-control mt-3" type="text" name="amount" placeholder="Amount" readonly>
                                <!-- <div class="valid-feedback">Amount field is valid!</div>
                                <div class="invalid-feedback">Amount field cannot be blank!</div> -->
                              </div>
                              <div class="col-md">
                                <input value="<?php echo 'Payment Status: ' . $sscPaymentStatus; ?>" class="form-control mt-3" type="text" name="payment_status" placeholder="Payment Status" readonly>
                                <!-- <div class="valid-feedback">Payment status field is valid!</div>
                                <div class="invalid-feedback">Payment status field cannot be blank!</div> -->
                              </div>
                              <div class="col-md">
                                <input value="<?php echo $sscPaymentMethod; ?>" class="form-control mt-3" type="text" name="payment_method" placeholder="Payment Method" "required">
                                <div class="valid-feedback">Payment method field is valid!</div>
                                <div class="invalid-feedback">Payment method field cannot be blank!</div>
                              </div>
                              <div class="col-md">
                                <input value="<?php echo $sscReferenceNumber; ?>" class="form-control mt-3" type="text" name="reference_number" placeholder="Reference Number" "required">
                                <div class="valid-feedback">Reference number field is valid!</div>
                                <div class="invalid-feedback">Reference number field cannot be blank!</div>
                              </div>
                              <div class="col-md">
                                <label>Receipt:</label>
                                <input value="<?php echo $sscReceipt; ?>" class="form-control mt-3" type="file" accept="image/*" name="receipt" placeholder="Receipt" "required">
                                <div class="valid-feedback">Receipt field is valid!</div>
                                <div class="invalid-feedback">Receipt field cannot be blank!</div>
                              </div>

                              <div class="form-button mt-3">
                                <button id="submit" type="submit" name="sscFee" class="btn btn-primary">Save</button>
                              </div>
                            </form>
                            <form action="payment.php" method="post" class="requires-validation" enc="multipart/form-data" novalidate>

                              <hr>
                              <h4>BAGWIS Fee</h4>

                              <div class="col-md">
                                <input value="<?php echo 'Due Date: ' . $bagwisDueDate; ?>" class="form-control mt-3" type="text" name="due_date" placeholder="Due Date" readonly>
                                <!-- <div class="valid-feedback">Due date field is valid!</div>
                                <div class="invalid-feedback">Due date field cannot be blank!</div> -->
                              </div>
                              <div class="col-md">
                                <input value="<?php echo 'Amount: ' . $bagwisAmount; ?>" class="form-control mt-3" type="text" name="amount" placeholder="Amount" readonly>
                                <!-- <div class="valid-feedback">Amount field is valid!</div>
                                <div class="invalid-feedback">Amount field cannot be blank!</div> -->
                              </div>
                              <div class="col-md">
                                <input value="<?php echo 'Payment Status: ' . $bagwisPaymentStatus; ?>" class="form-control mt-3" type="text" name="payment_status" placeholder="Payment Status" readonly>
                                <!-- <div class="valid-feedback">Payment status field is valid!</div>
                                <div class="invalid-feedback">Payment status field cannot be blank!</div> -->
                              </div>
                              <div class="col-md">
                                <input value="<?php echo $bagwisPaymentMethod; ?>" class="form-control mt-3" type="text" name="payment_method" placeholder="Payment Method" "required">
                                <div class="valid-feedback">Payment method field is valid!</div>
                                <div class="invalid-feedback">Payment method field cannot be blank!</div>
                              </div>
                              <div class="col-md">
                                <input value="<?php echo $bagwisReferenceNumber; ?>" class="form-control mt-3" type="text" name="reference_number" placeholder="Reference Number" "required">
                                <div class="valid-feedback">Reference number field is valid!</div>
                                <div class="invalid-feedback">Reference number field cannot be blank!</div>
                              </div>
                              <div class="col-md">
                                <label>Receipt:</label>
                                <input value="<?php echo $bagwisReceipt; ?>" class="form-control mt-3" type="file" accept="image/*" name="receipt" placeholder="Receipt" "required">
                                <div class="valid-feedback">Receipt field is valid!</div>
                                <div class="invalid-feedback">Receipt field cannot be blank!</div>
                              </div>

                              <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">Save</button>
                              </div>
                            </form>
                            <form action="payment.php" method="post" name="bagwisFee" class="requires-validation" enc="multipart/form-data" novalidate>
                        
                              <hr>
                              <h4>PESO Fee</h4>

                              <div class="col-md">
                                <input value="<?php echo 'Due Date: ' . $pesoDueDate; ?>" class="form-control mt-3" type="text" name="due_date" placeholder="Due Date" readonly>
                                <!-- <div class="valid-feedback">Due date field is valid!</div>
                                <div class="invalid-feedback">Due date field cannot be blank!</div> -->
                              </div>
                              <div class="col-md">
                                <input value="<?php echo 'Amount: ' . $pesoAmount; ?>" class="form-control mt-3" type="text" name="amount" placeholder="Amount" readonly>
                                <!-- <div class="valid-feedback">Amount field is valid!</div>
                                <div class="invalid-feedback">Amount field cannot be blank!</div> -->
                              </div>
                              <div class="col-md">
                                <input value="<?php if ($yearLevel === "3rd Year" || $yearLevel === "4th Year") {echo 'Payment Status: Not Applicabable';} else{echo 'Payment Status: ' . $pesoPaymentStatus;}?>" class="form-control mt-3" type="text" name="payment_status" placeholder="Payment Status" readonly>
                                <!-- <div class="valid-feedback">Payment status field is valid!</div>
                                <div class="invalid-feedback">Payment status field cannot be blank!</div> -->
                              </div>
                              <div class="col-md">
                                <input value="<?php echo $pesoPaymentMethod; ?>" class="form-control mt-3" type="text" name="payment_method" placeholder="Payment Method" "required">
                                <div class="valid-feedback">Payment method field is valid!</div>
                                <div class="invalid-feedback">Payment method field cannot be blank!</div>
                              </div>
                              <div class="col-md">
                                <input value="<?php echo $pesoReferenceNumber; ?>" class="form-control mt-3" type="text" name="reference_number" placeholder="Reference Number" "required">
                                <div class="valid-feedback">Reference number field is valid!</div>
                                <div class="invalid-feedback">Reference number field cannot be blank!</div>
                              </div>
                              <div class="col-md">
                                <label>Receipt:</label>
                                <input value="<?php echo $pesoReceipt; ?>" class="form-control mt-3" type="file" accept="image/*" name="receipt" placeholder="Receipt" "required">
                                <div class="valid-feedback">Receipt field is valid!</div>
                                <div class="invalid-feedback">Receipt field cannot be blank!</div>
                              </div>

                              <div class="form-button mt-3">
                                <button id="submit" type="submit" name="pesoFee" class="btn btn-primary">Save</button>
                              </div>
                            </form>
                            <form action="payment.php" method="post" class="requires-validation" enc="multipart/form-data" novalidate>
                              <hr>
                              <h4>Insurance Fee</h4>

                              <div class="col-md">
                                <input value="<?php echo 'Due Date: ' . $insuranceDueDate; ?>" class="form-control mt-3" type="text" name="due_date" placeholder="Due Date" readonly>
                                <!-- <div class="valid-feedback">Due date field is valid!</div>
                                <div class="invalid-feedback">Due date field cannot be blank!</div> -->
                              </div>
                              <div class="col-md">
                                <input value="<?php echo 'Amount: ' . $insuranceAmount; ?>" class="form-control mt-3" type="text" name="amount" placeholder="Amount" readonly>
                                <!-- <div class="valid-feedback">Amount field is valid!</div>
                                <div class="invalid-feedback">Amount field cannot be blank!</div> -->
                              </div>
                              <div class="col-md">
                                <input value="<?php echo 'Payment Status: ' . $insurancePaymentStatus; ?>" class="form-control mt-3" type="text" name="payment_status" placeholder="Payment Status" readonly>
                                <!-- <div class="valid-feedback">Payment status field is valid!</div>
                                <div class="invalid-feedback">Payment status field cannot be blank!</div> -->
                              </div>
                              <div class="col-md">
                                <input value="<?php echo $insurancePaymentMethod; ?>" class="form-control mt-3" type="text" name="payment_method" placeholder="Payment Method" "required">
                                <div class="valid-feedback">Payment method field is valid!</div>
                                <div class="invalid-feedback">Payment method field cannot be blank!</div>
                              </div>
                              <div class="col-md">
                                <input value="<?php echo $insuranceReferenceNumber; ?>" class="form-control mt-3" type="text" name="reference_number" placeholder="Reference Number" "required">
                                <div class="valid-feedback">Reference number field is valid!</div>
                                <div class="invalid-feedback">Reference number field cannot be blank!</div>
                              </div>
                              <div class="col-md">
                                <label>Receipt:</label>
                                <input value="<?php echo $insuranceReceipt; ?>" class="form-control mt-3" type="file" accept="image/*" name="receipt" placeholder="Receipt" "required">
                                <div class="valid-feedback">Receipt field is valid!</div>
                                <div class="invalid-feedback">Receipt field cannot be blank!</div>
                              </div>

                              <div class="form-button mt-3">
                                <button id="submit" type="submit" name="insuranceFee" class="btn btn-primary">Save</button>
                              </div>
                            </form>
                            <?php foreach ($penaltyFees as $penaltyFee) { ?>
                            <form action="payment.php" method="post" class="requires-validation" enc="multipart/form-data" novalidate>
                              <hr>
                              <h4>Penalty Fee - <?php echo $penaltyFee['penalty_from']; ?></h4>

                              <div class="col-md">
                                <input value="<?php echo 'Due Date: ' . $penaltyFee['due_date']; ?>" class="form-control mt-3" type="text" name="due_date" placeholder="Due Date" readonly>
                                <!-- <div class="valid-feedback">Due date field is valid!</div>
                                <div class="invalid-feedback">Due date field cannot be blank!</div> -->
                              </div>
                              <div class="col-md">
                                <input value="<?php echo 'Amount: ' . $penaltyFee['penalty_amount']; ?>" class="form-control mt-3" type="text" name="amount" placeholder="Amount" readonly>
                                <!-- <div class="valid-feedback">Amount field is valid!</div>
                                <div class="invalid-feedback">Amount field cannot be blank!</div> -->
                              </div>
                              <div class="col-md">
                                <input value="<?php echo 'Payment Status: ' . $penaltyFee['payment_status']; ?>" class="form-control mt-3" type="text" name="payment_status" placeholder="Payment Status" readonly>
                                <!-- <div class="valid-feedback">Payment status field is valid!</div>
                                <div class="invalid-feedback">Payment status field cannot be blank!</div> -->
                              </div>
                              <div class="col-md">
                                <input value="<?php echo $penaltyFee['payment_method']; ?>" class="form-control mt-3" type="text" name="payment_method" placeholder="Payment Method" "required">
                                <div class="valid-feedback">Payment method field is valid!</div>
                                <div class="invalid-feedback">Payment method field cannot be blank!</div>
                              </div>
                              <div class="col-md">
                                <input value="<?php echo $penaltyFee['reference_number']; ?>" class="form-control mt-3" type="text" name="reference_number" placeholder="Reference Number" "required">
                                <div class="valid-feedback">Reference number field is valid!</div>
                                <div class="invalid-feedback">Reference number field cannot be blank!</div>
                              </div>
                              <div class="col-md">
                                <label>Receipt:</label>
                                <input value="<?php echo $penaltyFee['receipt']; ?>" class="form-control mt-3" type="file" accept="image/*" name="receipt" placeholder="Receipt" "required">
                                <div class="valid-feedback">Receipt field is valid!</div>
                                <div class="invalid-feedback">Receipt field cannot be blank!</div>
                              </div>
                              <div class="form-button mt-3">
                                <button id="submit" type="submit" name="penaltyFee" class="btn btn-primary">Save</button>
                              </div>
                            </form>
                            <?php } ?>
                          </div>
                        </div>
                      <!-- </div> -->
                    </div>
                  </div>
                  