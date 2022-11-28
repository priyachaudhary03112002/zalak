<?php
include_once('header.php');
?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
           <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="container-fluid">
                    <div class="row my-2">
                      <div class="col-sm-6">
                        <h4 class="card-title">Product Table</h4>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="index">Home</a></li>
                          <li class="breadcrumb-item active">Product Table</li>
                        </ol>
                      </div>  
                    </div>
                  </div><!-- /.container-fluid -->
                  <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Product Id.</th>
                          <th>Product Name</th>
                          <th>Product Main Price</th>
                          <th>Product Discount Price</th>
                          <th>Product Image</th>
                          <th>Product Discription</th>
                          <th>Action</th>
                       
                        </tr>
                      </thead>
                      
                      <tbody>
                        <?php
                          foreach($product_arr as $data)
                          {
                      ?>
                        <tr>
                          <td><?php echo $data->prod_id;?></td>
                          <td><?php echo $data->prod_name;?></td>
                          <td><?php echo $data->prod_mainprice;?></td>
                          <td><?php echo $data->prod_discount;?></td>
                          <td><?php echo $data->prod_img;?></td>
                          <td><?php echo $data->prod_description;?></td>
                          <td>
                            <button type="button" class="btn btn-outline-primary btn-sm">
                            <i class="nav-icon fas fa-edit"></i>Edit</button> &nbsp
                            <button type="button" class="btn btn-outline-danger btn-sm">
                            <i class="far fa-trash-alt"></i>Delete</button>
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
        </div>
        <!-- content-wrapper ends -->
<?php
include_once('footer.php');
?>