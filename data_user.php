<?php 
    require 'koneksi.php';
    $query = "SELECT * FROM user ;"

?>

<body id="page-top">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-11">
                            <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
                        </div>
                        <div class="col-md-1">
                            <a href="?url=proses_user&proses=tambah_user" class="btn btn-primary"> Tambah</a>
                        </div>
                    </div>
                </div>
             
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Status</th>
                      <th>aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  

                  $sql=mysqli_query($koneksi, $query);
                  $no = 1;
                  while ($data = mysqli_fetch_array($sql)){
                  ?>
                  
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $data['username']; ?></td>
                      <td><?php echo $data['password']; ?></td>
                      <td><?php echo $data['status']; ?></td>
                      <td>
                      <a href="?url=proses_user&proses=edit_user&id_user=<?php echo $data['id_user']; ?>" class="btn btn-success">
                          <i class="fas fa-edit"></i>
                          Edit
                        </a>
                        <?php if($data['status'] != 'admin'){
                          ?>
                          <a href="?url=proses_user&proses=delete_user&id_user=<?php echo $data['id_user']; ?>" class="btn btn-danger">
                          <i class="fas fa-trash"></i>
                          Delete
                        </a>
                          <?php
                        } ?>
                        
                      </td>
                    </tr>

                  <?php } ?>
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

