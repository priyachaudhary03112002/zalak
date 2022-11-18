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
              <div class="breadcrumb-item">Manage Book</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Manage Book</h2>
            
            <div class="row">
              <div class="col-12 col-md-6 col-lg-12">
               
                <div class="card">
               
                  <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                       
                        <tr>
                          
                          <th scope="col">Book Id</th>
                          <th scope="col">Category</th>
                          <th scope="col">Book Name</th>
                          <th scope="col">Author</th>
                          <th scope="col">Quantity</th>
                          <th scope="col">Price</th>
                          <th scope="col">Rack No</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                       <?php
                          foreach($book_arr as $data)
                          {
                        ?>
                      <tbody>
                        <tr>
                          <td><?php echo $data->book_id;?></td>
                          <td><?php echo $data->cate_name;?></td>
                          <td><?php echo $data->book_name;?></td>
                          <td><?php echo $data->author;?></td>
                          <td><?php echo $data->qty;?></td>
                          <td><?php echo $data->price;?></td>
                          <td><?php echo $data->rack_no;?></td>
                          <td>
                            <a href="edit_book?btnbook_id=<?php echo $data->book_id?>"class="btn btn-primary mr-1" type="submit">Edit</a>
                            <a href="delete?delbook_id=<?php echo $data->book_id?>" class="btn btn-danger" type="reset">Delete</a>
                          </td>
                          

                        </tr>
                        <?php 
                          }
                        ?>
                      </tbody>
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