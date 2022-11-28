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
                        <h4 class="card-title">Add Blog</h4>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="index">Home</a></li>
                          <li class="breadcrumb-item active">Add Blog</li>
                        </ol>
                      </div>  
                    </div>
                  </div><!-- /.container-fluid -->
                  <div class="card-body">
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="categoryname">Blog Title</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Blog Title">
                    </div>            
                     
                     <div class="form-group">
                      <label for="categoryimage">Blog Image</label>
                      <div class="custom-file col-xs-12">
                        <input type="file"class="custom-file-input" id="customFile" name="filename">  <label class="custom-file-label" for="customFile">Choose file</label>
                      </div>
                    </div>

                    <div class="form-group">
                    <label for="blogdiscription">Blog Discription</label>
                    <textarea rows="5" class="form-control" id="blogdiscrition">
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