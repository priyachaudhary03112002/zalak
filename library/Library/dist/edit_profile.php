<?php
  include_once('header.php');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">Profile</div>
            </div>
          </div>
          <div class="section-body">
            <h2 class="section-title"></h2>
            <p class="section-lead">
              Change information about yourself
            </p>

            <div class="row mt-sm-4">
              
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <form method="post" class="needs-validation" novalidate="" enctype="multipart/form-data">
                    <div class="card-header">
                      <h4>Edit Profile</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">                               
                          <div class="form-group col-md-6 col-12">
                            <label>First Name</label>
                            <input type="text" class="form-control" value="<?php echo $fetch->first_name?>" required="" name="first_name">
                            <div class="invalid-feedback">
                              Please fill in the first name
                            </div>
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label>Last Name</label>
                            <input type="text" class="form-control" value="<?php echo $fetch->last_name?>" required="" name="last_name">
                            <div class="invalid-feedback">
                              Please fill in the last name
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-6 col-12">
                            <label>Email</label>
                            <input type="email" class="form-control" value="<?php echo $fetch->email?>" required="" name="email" readonly>
                            <div class="invalid-feedback">
                              Please fill in the email
                            </div>
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label>Phone</label>
                            <input type="tel" class="form-control" name="mobile" value="<?php echo $fetch->mobile?>">
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label>Gender</label><br>
                            <div class="form-check-inline">
                                        <label>
                                        <input type="radio" class="form-check-input" id="Male" name="gender" value="male" 
                                        <?php 
                                            $gender=$fetch->gender;
                                            if($gender=="male")
                                            {
                                                echo "checked";
                                            }
                                        ?>>Male
                                      </label>
                                    </div>
                                    <div class="form-check-inline">
                                      <label class="form-check-label" for="radio2">
                                        <input type="radio" class="form-check-input" id="Female" name="gender" value="female" 
                                        <?php 
                                            $gender=$fetch->gender;
                                            if($gender=="female")
                                            {
                                                echo "checked";
                                            }
                                        ?>>Female
                                      </label>
                                    </div>
                            
                          </div>

                          <div class="form-group col-md-6 col-12">
                            <label>Language</label><br>
                            <div class="form-check-inline">
                                          <label class="form-check-label" for="check1">
                                            <input type="checkbox" class="form-check-input"  name="language[]" value="English" 
                                            <?php 
                                                $language=$fetch->language;
                                                $lag_arr=explode(",",$language);
                                                if(in_array("English",$lag_arr))
                                                {
                                                    echo "checked";
                                                }
                                            ?>> English
                                          </label>
                                        </div>
                                        <div class="form-check-inline">
                                          <label class="form-check-label" for="check2">
                                            <input type="checkbox" class="form-check-input"  name="language[]" value="Hindi" 
                                            <?php 
                                                $language=$fetch->language;
                                                $lag_arr=explode(",",$language);
                                                if(in_array("Hindi",$lag_arr))
                                                {
                                                    echo "checked";
                                                }
                                            ?>>Hindi
                                          </label>
                                        </div>
                                        
                                        <div class="form-check-inline">
                                          <label class="form-check-label" for="check2">
                                            <input type="checkbox" class="form-check-input"  name="language[]" value="Gujarati"
                                            <?php 
                                                $language=$fetch->language;
                                                $lag_arr=explode(",",$language);
                                                if(in_array("Gujarati",$lag_arr))
                                                {
                                                    echo "checked";
                                                }
                                            ?>>Gujarati
                                        </label>
                                        </div>
                          </div>

                        </div>

                        <div class="row">
                          <div class="form-group col-12">
                            <label>Image</label>
                                  <input class="form-control" type="file"  name="image">
                                  <img src="images/upload/<?php echo $fetch->image?>" style="width:100px;height:100px" alt="">
                          </div> 
                        </div>

                                                            

                        <div class="row">
                          <div class="form-group col-12">
                            <label>Bio</label>
                            <textarea class="form-control summernote-simple" name="bio"><?php echo $fetch->bio?>
                              
                            </textarea>
                          </div> 
                        </div> 
                    </div>
                      <div class="card-footer">
                        <button class="btn btn-primary" id="submit" type="submit" name="submit">Save Changes</button>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <?php
      include_once('footer.php');
      ?>