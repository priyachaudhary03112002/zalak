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
              <div class="breadcrumb-item">Manage Category</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Manage Category</h2>
            
            <div class="row">
              <div class="col-12 col-md-6 col-lg-12">
               
                <div class="card">
               
                  <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-hover">
                      
                      <thead>
                        <tr>
                          
                          <th scope="col">Cate_id</th>
                          <th scope="col">Cate_name</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <?php
                          foreach($category_arr as $data)
                          {
                      ?>
                      <tbody>
                        <tr>
                          
                          <td><?php echo $data->cate_id;?></td>
                          <td><?php echo $data->cate_name;?></td>
                          <td>
                            <a href="edit_category?btncate_id=<?php echo $data->cate_id?>" class="btn btn-primary" type="submit" name="submit">Edit</a>
                            <a href="delete?delcate_id=<?php echo $data->cate_id?>" class="btn btn-danger" type="reset">Delete</a>
                          </td>
                        </tr>                        
                      </tbody>
                      <?php 
                          }
                        ?>
                    </table>
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