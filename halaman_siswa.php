<?php
if (isset($_GET['url']))
{
    $url=$_GET['url'];
    
    switch($url)
    {
        case'tulis_pengaduan';
        include 'tulis_pengaduan.php';
        break;
        case'lihat_pengaduan';
        include 'lihat_pengaduan.php';
        break;
        case'detail_pengaduan';
        include 'detail_pengaduan.php';
        break;
        case'data_user';
        include 'data_user.php';
        break;
        case'data_siswa';
        include 'data_siswa.php';
        break;
        case'proses_user';
        include 'proses_user.php';
        break;
        case'proses_siswa';
        include 'proses_siswa.php';
        break;
         case'ubah_status';
        include 'ubah_status.php';
        break;
        case "data_pelanggaran":
        include 'pelanggaran.php';
        break;
        case "proses_pelanggaran":
        include 'proses_pelanggaran.php';
        break;
    }
}
else
{

if($_SESSION['status'] == "admin"){
require "koneksi.php";
$query = mysqli_query($koneksi,"SELECT COUNT(*) as data_user FROM user;");
$query1 = mysqli_query($koneksi,"SELECT COUNT(*) as data_laporan FROM pengaduan;");


?>
 <div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-4 col-md-6 mb-4">
  <div class="card border-left-primary shadow h-100 py-2">
    <div class="card-body">
        <a href="?url=data_user">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data User</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo mysqli_fetch_assoc($query)['data_user']; ?></div>
        </div>
        <div class="col-auto">
          <i class="fas fa-user fa-2x text-gray-300"></i>
        </div>
      </div>
      </a>
    </div>
  </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-4 col-md-6 mb-4">
  <div class="card border-left-success shadow h-100 py-2">
    <div class="card-body">
        <a href="?url=lihat_pengaduan">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> Laporan </div>
          <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo mysqli_fetch_assoc($query1)['data_laporan']; ?></div>
        </div>
        <div class="col-auto">
          <i class="fas fa-copy fa-2x text-gray-300"></i>
        </div>
      </div>
      </a>
    </div>
  </div>
</div>

<?php } ?>

<div class="row">
    <div class="col-lg-12 mb-4">
    <div class="card shadow mb-4">
                
                
                 
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
                  </div>
                  <h3 class= "text-primary text-center "> WELCOME TO APLIKASI PENGADUAN SMAS BINA BAKTI</h3>
                  <h2 class = "text-primary text-center font-weight-bold" > INOVASI RAIH PRESTASI</h2>
                  <p>Pengaduan siswa merupakan suatu bentuk partisipasi siswa agar penyedia layanan siswa di SMAS BINA BAKTI yang dapat menampung pengaduan dari siswa dan guru. Pengaduan yang disampaikan siswa dapat berupa pengaduan pelanggaran tata tertib sekolah. Pelayanan pengaduan tersebut dilakukan dengan tujuan agar guru dapat memperhatikan apa yang dilanggar oleh siswa.</p>

                </div>
    </div>
    </div>
</div>
<?php 
}
?>