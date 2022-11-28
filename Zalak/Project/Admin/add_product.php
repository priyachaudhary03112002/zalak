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
                        <h4 class="card-title">Add Product</h4>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="index">Home</a></li>
                          <li class="breadcrumb-item active">Add Product</li>
                        </ol>
                      </div>  
                    </div>
                  </div><!-- /.container-fluid -->
                  <div class="card-body">
                  <form class="forms-sample" method="post" action="" enctype="multipart/form-data">

                    <div class="form-group">
                      <label for="productname">Category Name</label>
                      <input type="dropdown" class="form-control"  name="cate_name" placeholder="Product Name">
                    </div>

                    <div class="form-group">
                      <label for="productname">Product Name</label>
                      <input type="text" class="form-control"  name="prod_name" placeholder="Product Name">
                    </div>            
                     
                     <div class="form-group">
                      <label for="productmainprice">Product Main Price</label>
                      <input type="text" class="form-control" name="prod_mainprice" placeholder=" Product Main Price">
                    </div>

                    <div class="form-group">
                      <label for="productdiscountedprice">Product Discounted Price</label>
                      <input type="text" class="form-control" name="prod_discount" placeholder="Product Discounted Price">
                    </div>

                     <div class="form-group">
                      <label for="productimage">Product Image</label>
                      <div class="custom-file col-xs-12">
                        <input type="file"class="form-control" name="prod_img">  <label class="form-label" for="customFile"></label>
                      </div>
                     </div>

                    <div class="form-group">
                    <label for="productdiscription">Product Discription</label>
                    <textarea rows="5" class="form-control" name="prod_discription">
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