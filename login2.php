<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mulyadi</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="card">
					<?=$message?>
				  	<div class="card-header text-light bg-dark" >
				    	Login
				  	</div>
				  	<div class="card-body">
				    	<form action="login.php" method="post">

						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Nama</label>
						    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						  </div>

						  <div class="mb-3">
						    <label class="form-label">Password</label>
						    <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						  </div>

						  <button type="submit" name="login_btn" class="btn btn-success">Log In</button>
						  
						</form>
				  	</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>