<?php   include 'inc/header.php'; ?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Login </title>
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
						  <h3 class= "text-black text-center font-weight-bold"> Pengaduan Siswa</h3>
		      			<h2 class="mb-4 text-center">Sign in</h2>
		      		</div>
		      	</div>
            <form class="user" method="post" action="cek_login.php">
                    <div class="form-group">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                      <input type="text" name="username" class="form-control" placeholder="Masukkan Username">
                    </div>
                    <div class="form-group">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                      <input type="password" name="password" class="form-control"  placeholder="Password">
                    </div>
                    <div class="form-group">
                    </div>
                    <input type="submit"  class="btn btn-primary btn-user btn-block" value="LOGIN">
                      
                    <hr>
                  </form>
                  <div class="text-center">
				<a href="register.php" class="text-center">Belum Punya Akun? Klik Di Sini!</a>
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
<?php   include 'inc/footer.php'; ?>