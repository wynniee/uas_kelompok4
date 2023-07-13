<?php 
require 'koneksi.php';
$query = "SELECT * FROM pengaduan INNER JOIN user ON user.id_user = pengaduan.id_user ";

switch ($_SESSION['status']) {
  case 'admin':
  case 'petugas':
  case 'guru':
    $query = $query;
    break;
  case 'siswa':
      $query .= " WHERE user.status = 'siswa'";
    break;
}
$query .= " ORDER BY id_pengaduan DESC";

 ?>

<body id="page-top">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <div class="container">
                <div class="row">
                  <div class="col-md-11">
                  <h6 class="m-0 font-weight-bold text-primary">Data pengaduan</h6>
                  </div>
                  <div class="col-md-1">
                    <?php
                    if($_SESSION['status'] == "admin" || $_SESSION['status'] == "petugas"){
                      ?>
                      <a href="cetak.php" class="btn btn-primary" target="_blank">Cetak</a>
                      <?php
                    }
                    ?>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>Nama Pelapor</th>
                      <th>Isi laporan</th>
                      <th width = "100">Foto</th>
                      <th>Status</th>
                      <th>Aksi</th>
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
                      <td><?php echo $data['tanggal']; ?></td>
                      <td><?php echo $data['username']; ?></td>
                      <td><?php echo $data['deskripsi']; ?></td>
                      <td>
                        <?php 
                          if($data['foto'] != null || !empty($data['foto'])){
                            ?>
                                <img src="foto/<?php echo $data['foto']; ?>" style="width: 30%;height: 30%;" >
                            <?php
                          }else{
                            ?>
                              <p>Tidak Ada Foto</p>
                            <?php
                          }
                         ?>
                      </td>
                      <td> <?php
                            echo getStatus($data['status_pengaduan']); ?></td>
                      <td>
                            <!-- Buttons -->
                      <a href="?url=detail_pengaduan&id=<?php echo $data['id_pengaduan']; ?>
                      " class="btn btn-info btn-icon-split">
                        <span class="icon text-white-50">
                        <i class="fas fa-info"></i>
                        </span>
                        <span class="text">detail</span>
                        </a>
                        <?php 
                          if($_SESSION['status'] == "admin" || $_SESSION['status'] == "petugas" ){
                            ?>
                          <a href="?url=ubah_status&id_pengaduan=<?php echo $data['id_pengaduan']; ?>&status=1" class="btn btn-success">
                          <i class="fas fa-check-square"> selesai</i>
                        </a>
                        <a href="?url=ubah_status&id_pengaduan=<?php echo $data['id_pengaduan']; ?>&status=0" class="btn btn-danger">
                          <i class="fas fa-window-close"> belum</i>
                        </a>
                            <?php
                          }

                         ?>
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
