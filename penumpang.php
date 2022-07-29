<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>muls</title>

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

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php
            include('navbar.php');
        ?>
        

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <div class="card">
            <div class="card-header text-center">
                <h3><b>PENUMPANG</b></h3>
            </div>
            <div class="card-body">
                <form action="penumpang.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                        <input type="date" name="tgl" class="form-control" id="exampleInputPassword1">
                    </div>

                    <div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Mobil</label>
						<select name="mobil" class="form-control">
						    <option>- Pilih Mobil -</option>
						    <?php
						    	include_once("koneksi.php");
						    	$sql	= "SELECT * FROM tb_mobil";
						    	$query	= mysqli_query($con, $sql);
						    	foreach ($query as $mobil) {
						    ?>

						    <option value="<?=$mobil['id_mobil']?>"><?=$mobil['no_pol']?></option>

						    <?php
						    	}
						    ?>
						</select>
					</div>

                    <div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Tujuan</label>
						<select name="tujuan" class="form-control">
						    <option>- Pilih Tujuan -</option>
						    <?php
						    	include_once("koneksi.php");
						    	$sql	= "SELECT * FROM tb_tujuan";
						    	$query	= mysqli_query($con, $sql);
						    	foreach ($query as $tujuan) {
						    ?>

						    <option value="<?=$tujuan['id_tujuan']?>"><?=$tujuan['dari_tujuan']?></option>

						    <?php
						    	}
						    ?>
						</select>
					</div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">No HP</label>
                        <input type="text" name="hp" class="form-control" id="exampleInputPassword1">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Jumlah Orang</label>
                        <input type="text" name="jumlah" class="form-control" id="exampleInputPassword1">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">No Bangku</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bangku" id="bangku" value="1">
                            <label class="form-check-label" for="inlineRadio1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bangku" id="bangku" value="2">
                            <label class="form-check-label" for="inlineRadio2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bangku" id="bangku" value="3">
                            <label class="form-check-label" for="inlineRadio3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bangku" id="bangku" value="4">
                            <label class="form-check-label" for="inlineRadio4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bangku" id="bangku" value="5">
                            <label class="form-check-label" for="inlineRadio5">5</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bangku" id="bangku" value="6">
                            <label class="form-check-label" for="inlineRadio6">6</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bangku" id="bangku" value="7">
                            <label class="form-check-label" for="inlineRadio7">7</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bangku" id="bangku" value="8">
                            <label class="form-check-label" for="inlineRadio8">8</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bangku" id="bangku" value="9">
                            <label class="form-check-label" for="inlineRadio9">9</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bangku" id="bangku" value="10">
                            <label class="form-check-label" for="inlineRadio10">10</label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success btn-round px-4 btn-sm">Penumpang</button>
                </form>
            </div>
        </div>
            
            <!-- DataTales Example -->
            
                           
                               
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span></span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anda Yakin Ingin Keluar ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Jika Anda ingin keluar klik tombol "Logout" Anda harus login kembali jika ingin mengakses laman ini lagi</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logoutuser.php">Logout</a>
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