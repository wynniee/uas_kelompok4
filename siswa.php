<?php
date_default_timezone_set("Asia/Bangkok");
session_start();
if(!isset($_SESSION['nama']))
{
  die("anda belum login");
}
include 'inc/header.php';

?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="siswa.php">
        <div class="sidebar-brand-icon rotate-n-0">
       <img src="img/SMAS1.png" width="55" height="55">
        </div>
        <div class="sidebar-brand-text mx-3">SMAS BINA BAKTI</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="siswa.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <?php 
        if($_SESSION['status'] == "siswa" || $_SESSION['status'] == "guru"){
          ?>
           <!-- Nav Item - tulis laporan -->
      <li class="nav-item">
        <a class="nav-link" href="?url=tulis_pengaduan">
          <i class="fas fa-edit"></i>
          <span>Tulis Pengaduan</span></a>
      </li>
          <?php
        }
      ?>
      <?php
        if($_SESSION['status'] == "admin"){
          ?>
          <li class="nav-item">
        <a class="nav-link" href="?url=data_user">
          <i class="fas fa-user"></i>
          <span>Data User</span></a>
      </li>
<?php
        }
      ?>
      <?php
        if($_SESSION['status'] == "admin"){
          ?>
          <li class="nav-item">
        <a class="nav-link" href="?url=data_siswa">
          <i class="fas fa-address-book"></i>
          <span>Data Siswa</span></a>
      </li>
<?php
        }
      ?>
       <?php
        if($_SESSION['status'] == "admin" || $_SESSION['status'] == "petugas"){
          ?>

          <?php
        }
      ?>
     

      <!-- Nav Item - lihat laporan -->
      <li class="nav-item">
        <a class="nav-link" href="?url=lihat_pengaduan">
          <i class="fas fa-search"></i>
          <span>Lihat Laporan</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

        <!-- Nav Item - keluar/sign out-->
      <li class="nav-item">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-sign-out-alt"></i>
          <span>keluar</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
        
        <h1>Aplikasi Pengaduan Siswa</h1>
        
        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
                 </button>

                 <!-- Topbar Navbar -->
                 <ul class="navbar-nav ml-auto">
 
                 <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                 <li class="nav-item dropdown no-arrow d-sm-none">
                 <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <i class="fas fa-search fa-fw"></i>
                 </a>

                 <!-- profile navbar -->
                 <div class="topbar-divider d-none d-sm-block"></div>

                  <!-- Nav Item - User Information -->
                  <li class="nav-item dropdown no-arrow">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-primary  bold-small"><?php echo $_SESSION['nama']?></span>
                  <img class="img-profile rounded-circle"
                  src="img/ari.png">
                  </a>
                  <!-- Dropdown - User - profile  -->
                  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in">
                
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                  
                  </a>
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <?php include 'halaman_siswa.php'; ?>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     
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

<?php include 'inc/footer.php'; ?>