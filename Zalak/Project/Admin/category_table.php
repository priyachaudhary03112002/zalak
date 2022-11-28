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
                        <h4 class="card-title">Category Table</h4>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="index">Home</a></li>
                          <li class="breadcrumb-item active">Category Table</li>
                        </ol>
                      </div>  
                    </div>
                  </div><!-- /.container-fluid -->
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Category Id.</th>
                          <th>Category Name</th>
                          <th>Caegory Image</th>
                          <th>Action</th>
                       
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Jacob</td>
                          <td><label class="badge badge-danger">Pending</label></td>
                          <td>
                            <button type="button" class="btn btn-outline-primary btn-sm">
                            <i class="nav-icon fas fa-edit"></i>Edit</button> &nbsp
                            <button type="button" class="btn btn-outline-danger btn-sm">
                            <i class="far fa-trash-alt"></i>Delete</button>
                          </td>
                        </tr>

                        <tr>
                          <td>2</td>
                          <td>Messsy</td>
                          <td><label class="badge badge-warning">In progress</label></td>
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
                          <td><label class="badge badge-info">Fixed</label></td>
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
                          <td><label class="badge badge-success">Completed</label></td>
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
                          <td><label class="badge badge-warning">In progress</label></td>
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
        <!-- content-wrapper ends -->
<?php
include_once('footer.php');
?>