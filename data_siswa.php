<?php 
    require 'koneksi.php';
    $query = "SELECT * FROM siswa INNER JOIN user ON siswa.id_user = user.id_user ;"

?>

<body id="page-top">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
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
                      <th>Poin</th>
                      <th>NIS</th>
                      <th>Nama Siswa</th>
                      <th>No Telp</th>
                      <th>Email</th>
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
                      <td><?php echo $data['poin_siswa']; ?></td>
                      <td><?php echo $data['nis']; ?></td>
                      <td><?php echo $data['nama_siswa']; ?></td>
                      <td><?php echo $data['no_telp']; ?></td>
                      <td><?php echo $data['email']; ?></td>
                      <td>
                      <a href="?url=proses_siswa&proses=edit_siswa&id=<?php echo $data['id_siswa']; ?>" class="btn btn-success">
                          <i class="fas fa-edit"></i>
                          Edit
                        </a>
                        <?php if($data['status'] != 'admin'){
                          ?>
                          <a href="?url=proses_siswa&proses=delete_siswa&id=<?php echo $data['id_siswa']; ?>" class="btn btn-danger">
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

