<?php

include_once('header1.php');

?>
<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="assets/img/lms.png" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Registration</h4></div>

              <div class="card-body">
                <form method="POST" action="">
                  
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">First Name</label>
                      <input id="first_name" type="text" class="form-control" name="first_name" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Last Name</label>
                      <input id="last_name" type="text" class="form-control" name="last_name">
                    </div>
                  </div>

                    <div class="form-group ">
                      <label for="mobile">Mobile</label>
                      <input id="mobile" type="text" class="form-control" name="mobile" autofocus>
                    </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email">
                    <div class="invalid-feedback">
                    </div>
                  </div>


                    <div class="form-group ">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>

                    <div class="row">
                    <div class="form-group col-6">
                      <label for="gender">Gender</label><br>
                        <div class="form-check-inline">
                          <label class="form-check-label" for="radio1">
                            <input type="radio" class="form-check-input" id="radio1" name="gender" value="male">Male
                          </label>
                        </div>
                        <div class="form-check-inline">
                          <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="radio2" name="gender" value="female">Female
                          </label>
                        </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Language</label><br>
                      <div class="form-check-inline">
                        <label class="form-check-label" for="check1">
                          <input type="checkbox" class="form-check-input" id="check1" name="language[]" value="English">English
                        </label>
                      </div>
                      <div class="form-check-inline">
                        <label class="form-check-label" for="check2">
                          <input type="checkbox" class="form-check-input" id="check2" name="language[]" value="Hindi">Hindi
                        </label>
                      </div>
                      <div class="form-check-inline">
                        <label class="form-check-label" for="check2">
                          <input type="checkbox" class="form-check-input" id="check2" name="language[]" value="Gujarati">Gujarati
                        </label>
                      </div>
                    </div>
                  </div>


                    

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="register">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Already have an account? <a href="login">Login here</a>
            </div>
            <div class="simple-footer">
              Copyright &copy; Library 2022
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

</body>
</html>