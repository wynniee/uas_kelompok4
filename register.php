<?php include 'inc/header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Aplikasi Pengaduan Siswa</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<!doctype html>
<html lang="en">
  <head>
  	<title>Sign Up </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
  <body style="background-image:url('https://foto.data.kemdikbud.go.id/getImage/20566286/7.jpg');">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="d-flex">
		      		<div class="w-100">
		      			<h3 class="mb-4 text-center">Sign Up</h3>
		      		</div>
		      	</div>
            <!-- form login -->
            <form class="user" method="post" action="simpan_siswa.php">
                    <div class="form-group">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fas fa-address-card"></span></div>
                      <input type="text" name="nik" class="form-control" placeholder="Masukkan NIS">
                    </div>

                    <div class="form-group">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fas fa-address-book"></span></div>
                      <input type="text" name="nama" class="form-control"  placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fas fa-address-book"></span></div>
                      <input type="text" name="no_induk" class="form-control"  placeholder="Masukkan Nomor Induk">
                    </div>
                    <div class="form-group">
                    <div class="icon d-flex align-items-center justify-content-center"></div>
                      <select name="kelas" id="kelas" class="form-control">
                        <option value="X Rekayasa Perangkat Lunak 1" class="form-control">X Rekayasa Perangkat Lunak 1</option>
                        <option value="X Rekayasa Perangkat Lunak 2" class="form-control">X Rekayasa Perangkat Lunak 2</option>
                        <option value="XI Rekayasa Perangkat Lunak 1" class="form-control">XI Rekayasa Perangkat Lunak 1</option>
                        <option value="XI Rekayasa Perangkat Lunak 2" class="form-control">XI Rekayasa Perangkat Lunak 2</option>
                       
                        <option value="XII Rekayasa Perangkat Lunak 1" class="form-control">XII Rekayasa Perangkat Lunak 1</option>
                        <option value="XII Rekayasa Perangkat Lunak 2" class="form-control">XII Rekayasa Perangkat Lunak 2</option>
                      
                        <option value="X Mekatronika 1" class="form-control">X Mekatronika 1</option>
                        <option value="X Mekatronika 2" class="form-control">X Mekatronika 2</option>
                      
                        <option value="XI Mekatronika 1" class="form-control">XI Mekatronika 1</option>
                        <option value="XI Mekatronika 2" class="form-control">XI Mekatronika 2</option>
                     
                        <option value="XII Mekatronika 1" class="form-control">XII Mekatronika 1</option>
                        <option value="XII Mekatronika 2" class="form-control">XII Mekatronika 2</option>
                      
                      </select>
                    </div>
                    <div class="form-group">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fas fa-user"></span></div>
                      <input type="text" name="username" class="form-control" placeholder="Masukkan Username">
                    </div>

                    <div class="form-group">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fas fa-lock"></span></div>
                      <input type="password" name="password" class="form-control " placeholder="Masukkan Passowrd">
                    </div>
                    
    

                    <div class="form-group">
                    
                    </div>
                    <input type="submit"  class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn " value="Daftar!">
                       
                    <hr>
                  </form>
                  <div class="text-center">
				<a href="index.php" class="text-center">Sudah Punya Akun? Klik Di Sini!</a>
			  </p>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>

<?php include 'inc/footer.php'; ?>