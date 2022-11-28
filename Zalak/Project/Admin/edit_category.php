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
                        <h4 class="card-title">Add Category</h4>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="index">Home</a></li>
                          <li class="breadcrumb-item">Category</li>
                          <li class="breadcrumb-item active">Add Category</li>
                        </ol>
                      </div>  
                    </div>
                  </div><!-- /.container-fluid -->
                  <div class="card-body">
                  <form class="forms-sample" method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="categoryname">Category Name</label>
                      <input type="text" name="cate_name" class="form-control" value="<?php echo $fetch->cate_name?>">
                    </div>            
                     
                     <div class="form-group">
                      <label>Category Image</label>
                      <div class="custom-file mb-3">
                        <input type="file" class="form-control" id="cate_img" name="cate_img"><br>
                        <div>
                        <img src="images/upload/<?php echo $fetch->cate_img?>" style="width:100px;height:100px" alt=""></div>
                        <label class="form-label"  name="cate_img"></label>
                      </div>
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
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