<?php
include_once('header.php');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Book</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Book</a></div>
              <div class="breadcrumb-item">Edit Book</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Edit Book</h2>
            <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  
                  <div class="card-body">
                    
                    <div class="form-group">
                      <label>Category Name</label>
                      <select name="cate_id" class="form-control">
                        <option>Select Category</option>
                        <?php
                          foreach($category as $c)
                          {
                            if($c->cate_id==$fetch->cate_id)
                            {
                          ?>
                          <option value="<?php echo $c->cate_id?>" selected>
                                  <?php echo $c->cate_name?>
                          </option>
                          <?php   
                          }
                          else
                      {
                    ?>
                      <option value="<?php echo $c->cate_id?>">
                              <?php echo $c->cate_name?>
                      </option>
                    <?php                   
                      }
                    }
                    ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Book Name</label>
                      <input type="text" class="form-control" name="book_name" value="<?php echo $fetch->book_name?>">
                    </div>

                    <div class="form-group">
                      <label>Author</label>
                      <input type="text" class="form-control" name="author" value="<?php echo $fetch->author?>">
                    </div>
                    
                    <div class="form-group">
                      <label>Quantity</label>
                      <input type="text" class="form-control" name="qty" value="<?php echo $fetch->qty?>">
                    </div>

                    <div class="form-group">
                      <label>Price</label>
                      <input type="text" class="form-control" name="price" value="<?php echo $fetch->price?>">
                    </div>

                    <div class="form-group">
                      <label>Rack No</label>
                      <input type="text" class="form-control" name="rack_no" value="<?php echo $fetch->rack_no?>">
                    </div>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-primary mr-1" type="submit" name="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                </div>
              </div>
              
            </div>
          </form>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>