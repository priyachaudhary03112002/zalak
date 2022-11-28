<?php 
include_once ('header.php');
?>
            
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Registration</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"> Registration </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Contact Us  -->
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-12">   
                </div>
                <div class="col-lg-8 col-sm-12">
                    <div class="contact-form-right">
                        <h2>Welcome...!!!</h2>
                        <p>Sign Up to continue...</p>
                        <form method="post" action="#" enctype="multipart/form-data">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" value="<?php echo $fetch->name?>">
                                        
                                    </div>
                                </div>

                                <div class="col-md-12">
                                   <div class="form-group">
                                        <label>Address</label>
                                        <textarea class="form-control" name="address"><?php echo $fetch->address?></textarea>
                                        
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mobile</label>
                                        <input type="text" class="form-control" name="mobile" value="<?php echo $fetch->mobile?>">
                                        
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email" value="<?php echo $fetch->email?>" readonly>
                                        
                                    </div>
                                </div>

                               <div class="col-md-6">
                                    <div class="form-group">
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
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Language</label><br>
                                        <div class="form-check-inline">
                                          <label class="form-check-label" for="check1">
                                            <input type="checkbox" class="form-check-input"  name="language[]" value="english" 
                                            <?php 
                                                $language=$fetch->language;
                                                $lag_arr=explode(",",$language);
                                                if(in_array("english",$lag_arr))
                                                {
                                                    echo "checked";
                                                }
                                            ?>> English
                                          </label>
                                        </div>
                                        <div class="form-check-inline">
                                          <label class="form-check-label" for="check2">
                                            <input type="checkbox" class="form-check-input"  name="language[]" value="hindi" 
                                            <?php 
                                                $language=$fetch->language;
                                                $lag_arr=explode(",",$language);
                                                if(in_array("hindi",$lag_arr))
                                                {
                                                    echo "checked";
                                                }
                                            ?>>Hindi
                                          </label>
                                        </div>
                                        
                                        <div class="form-check-inline">
                                          <label class="form-check-label" for="check2">
                                            <input type="checkbox" class="form-check-input"  name="language[]" value="gujarati"
                                            <?php 
                                                $language=$fetch->language;
                                                $lag_arr=explode(",",$language);
                                                if(in_array("gujarati",$lag_arr))
                                                {
                                                    echo "checked";
                                                }
                                            ?>>Gujarati
                                        </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    
                                    <label>Image</label>
                                  <input class="form-control" type="file"  name="image">
                                  <img src="images/upload/<?php echo $fetch->image?>" style="width:100px;height:100px" alt="">
                                  
                            </div>

                                <div class="col-md-12">
                                    <div class="submit-button text-center">
                                        <button class="btn hvr-hover" id="submit" type="submit" name="submit">Register</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>  
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart -->

    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-01.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-02.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-03.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-04.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-06.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-07.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-08.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-09.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->
<?php 
include_once ('footer.php');
?>