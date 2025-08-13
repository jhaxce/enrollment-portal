                  <div class="form-body">
                    <div class="row">
                      <!-- <div class="form-holder"> -->
                      <div class="form-content">
                        <div class="form-items">
                          <!-- <h4>Student Information</h4> -->
                          <!-- <p>Fill in the data below.</p> -->
                          <form action="settings.php" method="post" class="requires-validation" enctype="multipart/form-data" novalidate>
                          <h4 class="mt-3">Display Picture</h4>
                            <div class="col-md">
                              <?php if ($profilePicture) { ?>
                                  <!-- Display the profile picture -->
                              <img src="data:image/jpeg;base64,<?php echo base64_encode($profilePicture); ?>" alt="Profile Picture" height="auto" width="150">

                            <!-- Button to update the profile picture -->
                                <input class="form-control mt-3" type="file" name="display_picture" accept="image/*" required>
                                <div class="valid-feedback">Display picture field is valid!</div>
                                <div class="invalid-feedback">Display picture field cannot be blank!</div>
                                <button class="btn btn-primary mt-3" name="update_picture" type="submit">Change Picture</button>

                            <!-- Button to delete the profile picture -->
                                <button class="btn btn-danger mt-3" name="delete_picture" type="submit" onclick="disableValidation()">Remove Picture</button>
                              <?php } else { ?>
                              <!-- Button to upload a new profile picture -->
                                <input class="form-control mt-3" type="file" name="display_picture" accept="image/*" required>
                                <div class="valid-feedback">Display picture field is valid!</div>
                                <div class="invalid-feedback">Display picture field cannot be blank!</div>
                                <button class="btn btn-primary mt-3" name="submit_picture" type="submit">Upload Picture</button>
                              <?php } ?>
                              
                            </div>
                          </form>
                          <!-- <form action="settings.php" method="post" class="requires-validation" novalidate>
                            <hr> 
                            <h4 class="mt-3">Dark Mode</h4>
                              <div class="col-md-12 mt-3"> -->
                                <!-- <label class="mb-3 mr-1" for="name"></label> -->

                                <!-- <input type="radio" class="btn-check" name="dark" id="on" autocomplete="off" required>
                                <label class="btn btn-md btn-outline-secondary" for="on">ON</label>

                                <input type="radio" class="btn-check" name="dark" id="off" autocomplete="off" required>
                                <label class="btn btn-md btn-outline-secondary" for="off">OFF</label>

                                <input type="radio" class="btn-check" name="dark" id="auto" autocomplete="off" required>
                                <label class="btn btn-smdm btn-outline-secondary" for="auto">Auto</label>
                                  <div class="valid-feedback mv-up">You selected a mode!</div>
                                  <div class="invalid-feedback mv-up">Please select a mode!</div>
                              </div>
                              <div class="form-button mt-3">
                                <button id="submit" type="submit" name="update_dark" class="btn btn-primary">Save</button>
                              </div>
                          </form> -->
                        </div>
                      </div>
                    </div>
                  </div>