                <div class="form-body">
                  <div class="row">
                    <!-- <div class="form-holder"> -->
                    <div class="form-content">
                      <div class="form-items">
                        <!-- <h4>Student Information</h4> -->
                        <!-- <p>Fill in the data below.</p> -->
                        <form action="profile.php" method="post" class="requires-validation" novalidate>
                          <h4>Personal Information</h4>

                          <div class="row">
                            <div class="col-md-4">
                              <input value="<?php echo $firstName; ?>" class="form-control mt-3" type="text" name="student_first_name" placeholder="First Name*" required>
                              <div class="valid-feedback">First name field is valid!</div>
                              <div class="invalid-feedback">First name field cannot be blank!</div>
                            </div>
                            <div class="col-md-4">
                              <input value="<?php echo $middleName; ?>" class="form-control mt-3" type="text" name="student_middle_name" placeholder="Middle Name"
                                >
                              <!-- <div class="valid-feedback">Middle name field is valid!</div>
                              <div class="invalid-feedback">Middle name field cannot be blank!</div> -->
                            </div>
                            <div class="col-md-4">
                              <input value="<?php echo $lastName; ?>" class="form-control mt-3" type="text" name="student_last_name" placeholder="Last Name*" required>
                              <div class="valid-feedback">Last name field is valid!</div>
                              <div class="invalid-feedback">Last name field cannot be blank!</div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-4">
                              <select name="birth_date_day" class="form-select mt-3" required>
                                <option value="<?php echo $birthDay; ?>" selected><?php if ($birthDay === '') {echo 'Select Birth Day*';} else {echo $birthDay;}; ?></option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                              </select>
                              <div class="valid-feedback">You selected a day!</div>
                              <div class="invalid-feedback">Please select a day!</div>
                            </div>
                            <div class="col-md-4">
                              <select name="birth_date_month" class="form-select mt-3" required>
                                <option value="<?php echo $birthMonth; ?>" selected><?php if ($birthMonth === '') {echo 'Select Birth Month*';} else {echo $birthMonth;}; ?></option>
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                              </select>
                              <div class="valid-feedback">You selected a month!</div>
                              <div class="invalid-feedback">Please select a month!</div>
                            </div>
                            <div class="col-md-4">
                              <select name="birth_date_year" class="form-select mt-3" required>
                              <option value="<?php echo $birthYear; ?>" selected><?php if ($birthYear === '') {echo 'Select Birth Year*';} else {echo $birthYear;}; ?></option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                              </select>
                              <div class="valid-feedback">You selected a year!</div>
                              <div class="invalid-feedback">Please select a year!</div>
                            </div>
                          </div>

                          <div class="col-md">
                            <select name="gender" class="form-select mt-3" required>
                              <option value="<?php echo $gender; ?>" selected><?php if ($gender === '') {echo 'Select Gender*';} else {echo $gender;}; ?></option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                              <option value="Secret">Secret</option>
                            </select>
                            <div class="valid-feedback">You selected a gender!</div>
                            <div class="invalid-feedback">Please select a gender!</div>
                          </div>

                          <div class="col-md">
                            <select name="religion" class="form-select mt-3" required>
                              <option value="<?php echo $religion; ?>" selected><?php if ($religion === '') {echo 'Select Religion*';} else {echo $religion;}; ?></option>
                              <option value="Islam">Islam</option>
                              <option value="Christianity">Christianity</option>
                              <option value="Buddhism">Buddhism</option>
                              <option value="Hinduism">Hinduism</option>
                              <option value="Other">Other</option>
                            </select>
                            <div class="valid-feedback">You selected a religion!</div>
                            <div class="invalid-feedback">Please select a religion!</div>
                          </div>

                          <div class="col-md">
                            <select name="blood_type" class="form-select mt-3">
                              <option value="<?php echo $bloodType; ?>" selected><?php if ($bloodType === '') {echo 'Select Blood Type';} else {echo $bloodType;}; ?></option>
                              <option value="O+">O+</option>
                              <option value="O-">O-</option>
                              <option value="A+">A+</option>
                              <option value="A-">A-</option>
                              <option value="B+">B+</option>
                              <option value="B-">B-</option>
                              <option value="AB+">AB+</option>
                              <option value="AB-">AB-</option>
                            </select>
                            <!-- <div class="valid-feedback">You selected a blood type!</div>
                        <div class="invalid-feedback">Please select a blood type!</div> -->
                          </div>

                          <div class="col-md">
                            <select name="nationality" class="form-select mt-3" required>
                              <option value="<?php echo $nationality; ?>" selected><?php if ($nationality === '') {echo 'Select Nationality*';} else {echo $nationality;}; ?></option>
                              <option value="Philippines">Philippines</option>
                            </select>
                            <div class="valid-feedback">Nationality is set!</div>
                            <div class="invalid-feedback">Nationality is not set!</div>
                          </div>

                          <div class="col-md">
                            <input value="<?php echo $nationalId; ?>" class="form-control mt-3" type="text" name="national_id" placeholder="National ID Card Number">
                            <!-- <div class="valid-feedback">National ID is valid!</div> -->
                            <!-- <div class="invalid-feedback">National ID cannot be blank!</div> -->
                          </div>

                          <hr>
                          <h4 class="mt-3">Parent/Guardian Information</h4>

                          <div class="col-md">
                            <input value="<?php echo $father; ?>" class="form-control mt-3" type="text" name="father" placeholder="Father's Name" novalidate>
                            <!-- <div class="valid-feedback">Father's name field is valid!</div>
                        <div class="invalid-feedback">Father's name field cannot be blank!</div> -->
                          </div>

                          <div class="col-md">
                            <input value="<?php echo $mother; ?>" class="form-control mt-3" type="text" name="mother" placeholder="Mother's Name" novalidate>
                            <!-- <div class="valid-feedback">Mother's name field is valid!</div>
                        <div class="invalid-feedback">Mother's name field cannot be blank!</div> -->
                          </div>

                          <div class="col-md">
                            <input value="<?php echo $guardian; ?>" class="form-control mt-3" type="text" name="guardian" placeholder="Guardian's Name*" required>
                            <div class="valid-feedback">Guardian's name field is valid!</div>
                            <div class="invalid-feedback">Guardian's name field cannot be blank!</div>
                          </div>

                          <hr>
                          <h4 class="mt-3">Contact Information</h4>

                          <div class="col-md">
                            <input value="<?php echo $email; ?>" class="form-control mt-3" type="email" name="email" placeholder="E-mail Address*" required>
                            <div class="valid-feedback">Email field is valid!</div>
                            <div class="invalid-feedback">Email field cannot be blank!</div>
                          </div>

                          <div class="col-md">
                            <input value="<?php echo $mobileNumber; ?>" class="form-control mt-3" type="text" name="mobile_number" placeholder="Mobile Number*" required>
                            <div class="valid-feedback">Mobile number field is valid!</div>
                            <div class="invalid-feedback">Mobile number field cannot be blank!</div>
                          </div>

                          <hr>
                          <h4 class="mt-3">Address</h4>

                          <div class="row">
                            <div class="col-md-3">
                              <input value="<?php echo $permanentProvince; ?>" name="permanent_province" type="text" class="form-control mt-3" placeholder="Permanent Province*" required></input>
                              <div class="valid-feedback">Permanent province field is valid!</div>
                              <div class="invalid-feedback">Permanent province field cannot be blank!</div>
                            </div>
                          
                            <div class="col-md-3">
                              <input value="<?php echo $permanentMunicipality; ?>" name="permanent_municipality" type="text" class="form-control mt-3" placeholder="Permanent Municipality*" required></input>
                              <div class="valid-feedback">Permanent municipality field is valid!</div>
                              <div class="invalid-feedback">Permanent municipality field cannot be blank!</div>
                            </div>
                          
                            <div class="col-md-3">
                              <input value="<?php echo $permanentBarangay; ?>" name="permanent_barangay" type="text" class="form-control mt-3" placeholder="Permanent Barangay*" required></input>
                              <div class="valid-feedback">Permanent barangay field is valid!</div>
                              <div class="invalid-feedback">Permanent barangay field cannot be blank!</div>
                            </div>
                          
                            <div class="col-md-3">
                              <input value="<?php echo $permanentStreet; ?>" name="permanent_street" type="text" class="form-control mt-3" placeholder="Permanent Street*" required></input>
                              <div class="valid-feedback">Permanent street field is valid!</div>
                              <div class="invalid-feedback">Permanent street field cannot be blank!</div>
                            </div>
                          </div>
                          
                          <div class="row">
                            <div class="col-md-3">
                              <input value="<?php echo $temporaryProvince; ?>" name="temporary_province" type="text"class="form-control mt-3" placeholder="Temporary Province"></input>
                              <!-- <div class="valid-feedback">Temporary province field is valid!</div>
                              <div class="invalid-feedback">Temporary province field cannot be blank!</div> -->
                            </div>
                          
                            <div class="col-md-3">
                              <input value="<?php echo $temporaryMunicipality; ?>" name="temporary_municipality" type="text" class="form-control mt-3" placeholder="Temporary Municipality"></input>
                              <!-- <div class="valid-feedback">Temporary municipality field is valid!</div>
                              <div class="invalid-feedback">Temporary municipality field cannot be blank!</div> -->
                            </div>
                          
                            <div class="col-md-3">
                              <input value="<?php echo $temporaryBarangay; ?>" name="temporary_barangay" type="text" class="form-control mt-3" placeholder="Temporary Barangay"></input>
                              <!-- <div class="valid-feedback">Temporary barangay field is valid!</div>
                              <div class="invalid-feedback">Temporary barangay field cannot be blank!</div> -->
                            </div>
                          
                            <div class="col-md-3">
                              <input value="<?php echo $temporaryStreet; ?>" name="temporary_street" type="text" class="form-control mt-3" placeholder="Temporary Street"></input>
                              <!-- <div class="valid-feedback">Temporary street field is valid!</div>
                              <div class="invalid-feedback">Temporary street field cannot be blank!</div> -->
                            </div>
                          </div>
                          
                          <hr>
                          <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" name="agree" required>
                            <label class="form-check-label">I hereby declare that all the
                              above information are correct and assure that I will abide by all the rules.*</label>
                            <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                          </div>

                          <div class="form-button mt-3">
                            <?php if (empty($firstName) && empty($middleName) && empty($lastName)) : ?>
                              <!-- If no data, only the Submit button is enabled -->
                              <button type="submit" name="submit_profile" class="btn btn-primary">Submit</button>
                            <?php else : ?>
                              <!-- If data exists, Update and Delete buttons are enabled -->
                              <button type="submit" name="update_profile" class="btn btn-secondary">Save</button>
                              <button type="submit" name="delete_profile" class="btn btn-danger" onclick="disableValidation()">Reset</button>
                            <?php endif; ?>
                          </div>
                        </form>
                      </div>
                    </div>
                    <!-- </div> -->
                  </div>
                </div>
                <?php if (!empty($firstName) && !empty($lastName)) : ?>
                  <script>
                    $("#feedback").html("<span>Please proceed to <a href=\"./?page=payments\">payments</a></span>.");
                  </script>
                <?php endif; ?>