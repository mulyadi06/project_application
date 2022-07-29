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

                    

                    <!-- DataTales Example -->
 <form action="jadwal_proses_tambah.php" method="POST">
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Kode</label>
        <input type="text" name="kode" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Tanggal Berangkat</label>
        <input type="date" name="tgl" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Jam</label>
        <select name="jam" class="form-control">
            <option selected disabled>-- Pilih Waktu --</option>
            <option>18:30</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Tujuan</label>
        <select name="tujuan" class="form-control">
            <option selected disabled>-- Pilih Tujuan --</option>
            <?php
                include_once("koneksi.php");
                $sql    = "SELECT * FROM tb_tujuan";
                $query  = mysqli_query($con, $sql);
                foreach($query as $tujuan) {
                    ?>

                    <option value="<?=$tujuan['id_tujuan']?>"><?=$tujuan['dari_tujuan']?></option>

                    <?php
                }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Mobil</label>
        <select name="mobil" class="form-control">
            <option selected disabled>-- Pilih Mobil --</option>
            <?php
                include_once("koneksi.php");
                $sql    = "SELECT * FROM tb_mobil";
                $query  = mysqli_query($con, $sql);
                foreach($query as $mobil) {
                    ?>

                    <option value="<?=$mobil['id_mobil']?>"><?=$mobil['no_pol']?></option>

                    <?php
                }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Supir</label>
        <select name="supir" class="form-control">
            <option selected disabled>-- Pilih Supir --</option>
            <?php
                include_once("koneksi.php");
                $sql    = "SELECT * FROM tb_supir1";
                $query  = mysqli_query($con, $sql);
                foreach($query as $supir1) {
                    ?>

                    <option value="<?=$supir1['id_supir1']?>"><?=$supir1['nm_supir1']?></option>

                    <?php
                }
            ?>
        </select>
    </div>
    <button type="submit" class="btn btn-success btn-round px-4 btn-sm ">Tambah Jadwal</button>
        <a href="jadwal.php" class="btn btn-danger btn-round px-5 btn-sm">Batal</a>
    </form>
                           
                               
            <!-- End of Main Content -->

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
                    <a class="btn btn-primary" href="logout.php">Logout</a>
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