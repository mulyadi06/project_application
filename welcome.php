<?php
	session_start();
	$message	= "";

	if(isset($_POST['login_btn'])){
		$email	= $_POST['email'];
		$password	= $_POST['password'];

		include("koneksi.php");
		$sql	= "SELECT * FROM tb_pelanggan WHERE email = '$email' AND password = '$password'";
		$query	= mysqli_query($con, $sql);
		$cek 	= mysqli_num_rows($query);

		if($cek == 0){
			//Jika Login Gagal
			$message	= '<div class="alert alert-danger" role="alert">
  				Maaf, Login Gagal !
			</div>';
		}else{
			//Jika Login Berhasil
			#1. Mengambil seluruh data di tabel dari hasil login
			$ambil	    = mysqli_fetch_array($query);
			$id 	    = $ambil['id_pelanggan'];
			$nama 	    = $ambil['nm_pelanggan'];
			$email 	    = $ambil['email'];
			$password   = $ambil['password'];

			#2. Buatkan Session
			$_SESSION['siduser']	= $id;
			$_SESSION['snama']	    = $nama;
			$_SESSION['semail']	    = $email;
			$_SESSION['spassword']	= $password;

			#3. Update Last Log
			$sql_update		= "UPDATE tb_pelanggan SET last_log = now() WHERE id = '$id'";
			$query_update	= mysqli_query($con, $sql_update);

			#4. Pengalihan Halaman
			header("location:index.php");
			die();
		}
	}

	if(isset($_SESSION['siduser'])){
		header("location:index.php");
		die();
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mulyadi</title>
    <!-- plugins:css -->
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-center mb-3">Selamat Datang Di Aplikasi Pemesanan Tiket</h3>
                  <div class="text-center">
                    <a href="login_user.php">
                        <button type="button" class="btn btn-primary btn-block enter-btn">Login</button>
                    </a>
                    <a href="daftaruser.php">
                        <button type="button" class="btn btn-primary btn-block enter-btn">Daftar Sekarang</button>
                    </a>
                  </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>