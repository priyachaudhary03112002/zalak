<?php
include_once('header.php');
?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">            
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="container-fluid">
                    <div class="row my-2">
                      <div class="col-sm-6">
                        <h4 class="card-title">Add Doctor</h4>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="index">Home</a></li>
                          <li class="breadcrumb-item active">Add Doctor</li>
                        </ol>
                      </div>  
                    </div>
                  </div><!-- /.container-fluid -->
                  <div class="card-body">
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="doctorname">Doctor Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Doctor Name">
                    </div>            
                     
                    <div class="form-group">
                      <label for="doctorname">Doctor Speciality</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Doctor Speciality">
                    </div>  

                     <div class="form-group">
                      <label for="doctoremail">Doctor Email</label>
                      <input type="Email" class="form-control" id="exampleInputName1" placeholder="Doctor Email">
                    </div>

                    <div class="form-group">
                      <label for="productdiscountedprice">Doctor Mobile</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Doctor Mobile">
                    </div>

                    <div class="form-group">
                    <label for="productdiscription">Doctor Address</label>
                    <textarea rows="5" class="form-control" id="productname">
                    </textarea> 
                    </div>
                    
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
                </div>
              </div>
            </div>           
          </div>
        </div>
        <!-- content-wrapper ends -->

<?php
include_once('footer.php');
?>