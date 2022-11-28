<?php
include_once('header.php');

?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Report</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Report</a></div>
              <div class="breadcrumb-item">Book Report</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Book Report</h2>
            
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>All Book Details</h4>
                    <div class="card-header-form">
                      <form>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search">
                          <div class="input-group-btn">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="thead-dark">
                        
                        <tr>
                        
                          <th scope="col">Book Id</th>
                          <th scope="col">Category</th>
                          <th scope="col">Book Name</th>
                          <th scope="col">Author</th>
                          <th scope="col">Quantity</th>
                          <th scope="col">Price</th>
                          <th scope="col">Rack No</th>
                        </tr>
                      </thead>
                        <?php
                          foreach($book_arr as $data)
                          {
                        ?>
                        <tr>
                          
                          <td><?php echo $data->book_id;?></td>
                          <td><?php echo $data->cate_name;?></td>
                          <td><?php echo $data->book_name;?></td>
                          <td><?php echo $data->author;?></td>
                          <td><?php echo $data->qty;?></td>
                          <td><?php echo $data->price;?></td>
                          <td><?php echo $data->rack_no;?></td>
                        </tr>                      
                        
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