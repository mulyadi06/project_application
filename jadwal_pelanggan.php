
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

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->

        <?php
            include('navbartiket.php');
        ?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                <div class="card text-center">
                <div class="card-header">
                    <h4 class="m-0 font-weight-bold text-primary">Jadwal Berangkat</h4>
                </div>
                <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Berangkat</th>
                            <th>Jam</th>
                            <th>Tujuan</th>
                            <th>Mobil</th>
                            <th>Supir</th>
                         </tr>
                        </thead>
                        <?php
                 #1. koneksi
                include('koneksi.php');

                #2. proses tampilkan data
                $sql = "SELECT * FROM tb_jadwal INNER JOIN tb_mobil ON tb_jadwal.id_mobil=tb_mobil.id_mobil 
                INNER JOIN tb_tujuan ON .tb_jadwal.id_tujuan=tb_tujuan.id_tujuan 
                INNER JOIN tb_supir1 ON .tb_jadwal.id_supir1=tb_supir1.id_supir1";
                $query = mysqli_query($con,$sql);

                #3. lakukan looping data
                $nomor = 1;
                foreach($query as $data){
                ?>
                <tr>
                    <td><?=$nomor++?></td>
                    <td><?=$data['tgl_berangkat']?></td>
                    <td><?=$data['jam_berangkat']?></td>
                    <td><?=$data['dari_tujuan']?></td>
                    <td><?=$data['no_pol']?></td>
                    <td><?=$data['nm_supir1']?></td>
                </tr>
                </tbody>
                <?php
                }
                ?>
                    </table>
                    </div>
                </div>
                    
                </div>
        <div class="card-body">
                           
                           
                           
                               
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