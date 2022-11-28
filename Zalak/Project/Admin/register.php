<?php
include_once('header1.php');
?>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="images/logo2.png" alt="logo">
              </div>
              <h4>Welcome!!</h4>
              <h6 class="fw-light">Sign Up to continue.</h6>
              <form class="pt-3" method="post" action="">

                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="user_name" placeholder="User Name">
                </div>

                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="email" placeholder="E-mail">
                </div>

                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" placeholder="Enter Password">
                </div>

                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"  name="adminsignup" type="submit">SIGN UP</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                 <a href="forgrtpassword.php" class="auth-link text-black">Forgot password?</a>
                </div>
                
                <div class="text-center mt-4 fw-light">
                  Already have an Account!   <a href="login" class="text-primary">Sing In</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <?php
include_once('footer1.php');
?>