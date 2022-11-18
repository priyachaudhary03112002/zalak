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
            <h2 class="section-title">Hi, <?php echo $fetch->first_name ?>!</h2>
            <p class="section-lead">
              Meet Your Self
            </p>

            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card profile-widget">
                  <div class="profile-widget-header">                     
                    <img  src="images/upload/<?php echo $fetch->image?>" alt="image"  class="rounded-circle profile-widget-picture img-thumbnail">
                    <div class="profile-widget-items">
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Posts</div>
                        <div class="profile-widget-item-value"></div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Followers</div>
                        <div class="profile-widget-item-value"></div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Following</div>
                        <div class="profile-widget-item-value"></div>
                      </div>
                    </div>
                  </div>
                  <div class="profile-widget-description">
                    <div class="profile-widget-name">Name: <?php echo $fetch->first_name ?> <?php echo $fetch->last_name ?> 
                      <div class="text-muted font-weight-normal">
                        Email: <?php echo $fetch->email ?></div>
                        <div class="text-muted font-weight-normal">
                        Mobile: <?php echo $fetch->mobile ?></div>
                        <div class="text-muted font-weight-normal">
                        Gender: <?php echo $fetch->gender ?></div>
                        <div class="text-muted font-weight-normal">
                        Language: <?php echo $fetch->language ?></div>
                        <div class="text-muted font-weight-normal">
                        Bio: <?php echo $fetch->bio ?></div>
                        </div>
                        
                        </div>
                        <div class="card-footer">
                      <a href="edit_profile?btna_id=<?php echo $fetch->a_id?>" type="submit" class="btn btn-primary btn-lg btn-block" name="edit">Edit Profile</a>
                    </div>

                      </div>
                      <div class="card-footer text-center">
                    <div class="font-weight-bold mb-2">Follow <?php echo $fetch->first_name ?> On</div>
                    <a href="#" class="btn btn-social-icon btn-facebook mr-1" >
                      <i class="fab fa-facebook-f" style="color: black"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-twitter mr-1">
                      <i class="fab fa-twitter" style="color: black"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-github mr-1">
                      <i class="fab fa-github" style="color: black"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-instagram">
                      <i class="fab fa-instagram" style="color: black"></i>
                    </a>
                  </div>
                  </div>
                  
                </div>
              </div>
              
            </div>
          </div>
        </section>
      </div>

      <?php
      include_once('footer.php');
      ?>