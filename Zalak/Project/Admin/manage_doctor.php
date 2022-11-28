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
                        <h4 class="card-title">Doctor Table</h4>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="index">Home</a></li>
                          <li class="breadcrumb-item active">Doctor Table</li>
                        </ol>
                      </div>  
                    </div>
                  </div><!-- /.container-fluid -->
                  <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Doctor Id.</th>
                          <th>Doctor Name</th>
                          <th>Doctor Speciality</th>
                          <th>Doctor Mobile</th>
                          <th>Doctor Email</th>
                          <th>Doctor Address</th>                          
                          <th>Action</th>
                       
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                            foreach($doctor_arr as $data)
                          {
                          ?>
                        <tr>
                          <td><?php echo $data->doc_id;?></td>
                          <td><?php echo $data->doc_name;?></td>
                          <td><?php echo $data->doc_speciality;?></td>
                          <td><?php echo $data->doc_mobile;?></td>
                          <td><?php echo $data->doc_email;?></td>
                          <td><?php echo $data->doc_address;?></td>
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
                        <tr>
                          <td>2</td>
                          <td>Messsy</td>
                          <td>messy@gmail.com</td>
                          <td>9876543210</td>
                          <td>abc def ghi jkl mno pqr</td>
                          <td>
                            <button type="button" class="btn btn-outline-primary btn-sm">
                            <i class="nav-icon fas fa-edit"></i>Edit</button> &nbsp
                            <button type="button" class="btn btn-outline-danger btn-sm">
                            <i class="far fa-trash-alt"></i>Delete</button>
                          </td>
                        </tr>

                        <tr>
                          <td>3</td>
                          <td>John</td>
                          <td>john@gmail.com</td>
                          <td>9876543210</td>
                          <td>abc def ghi jkl mno pqr</td>
                          <td>
                            <button type="button" class="btn btn-outline-primary btn-sm">
                            <i class="nav-icon fas fa-edit"></i>Edit</button> &nbsp
                            <button type="button" class="btn btn-outline-danger btn-sm">
                            <i class="far fa-trash-alt"></i>Delete</button>
                          </td>

                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Peter</td>
                          <td>peter@gmail.com</td>
                          <td>98765432110</td>
                          <td>abc def ghi jkl mno pqr</td> 
                          <td>
                            <button type="button" class="btn btn-outline-primary btn-sm">
                            <i class="nav-icon fas fa-edit"></i>Edit</button> &nbsp
                            <button type="button" class="btn btn-outline-danger btn-sm">
                            <i class="far fa-trash-alt"></i>Delete</button>
                          </td>
                        </tr>

                        <tr>
                          <td>5</td>
                          <td>Dave</td>
                          <td>dave@gmail.com</td>
                          <td>9876543210</td>                          
                          <td>abc def ghi jkl mno pqr</td> 
                          <td>
                            <button type="button" class="btn btn-outline-primary btn-sm">
                            <i class="nav-icon fas fa-edit"></i>Edit</button> &nbsp
                            <button type="button" class="btn btn-outline-danger btn-sm">
                            <i class="far fa-trash-alt"></i>Delete</button>
                          </td>
                        </tr>
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