<?php
include_once('header.php');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Category</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Category</a></div>
              <div class="breadcrumb-item">Add Category</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Add Category</h2>
            

            <div class="row">
              <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  
                  <div class="card-body">
                    <form class="forms-sample" method="post" action="">
                    <div class="form-group">
                      <label>Category Name</label>
                      <input type="text" class="form-control" name="cate_name">
                    </div>
                  <div class="card-footer">
                    <button class="btn btn-primary mr-1" type="submit" name="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
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