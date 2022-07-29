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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script>
        function Fokus() {
            document.getElementById('alamat').focus();
        }
    </script>

</head>

<body id="page-top" onload="Fokus()">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include('navbartiket.php'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h5 class="text-center m-0 font-weight-bold text-primary">Daftar Harga</h5>
                        </div>
                        <div class="card-body">
                            <table class="table text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Tujuan</th>
                                    <th>Harga</th>
                                </tr>
                                <?php
                                include('koneksi.php');
                                $sql = "SELECT * FROM tb_tujuan";
                                $query = mysqli_query($con, $sql);
                                $nomor = 1;
                                foreach ($query as $data) {
                                ?>
                                    <tr>
                                        <td><?= $nomor++ ?></td>
                                        <td><?= $data['dari_tujuan'] ?></td>
                                        <td><?= rupiah($data['harga']) ?></td>
                                    <?php
                                }
                                    ?>
                                    </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-header text-center">
                            <h4 class="m-0 font-weight-bold text-primary">Form Pemesanan Tiket</h4>
                        </div>
                        <div class="card-body">
                            <form action="tiket_proses_tambah2.php" name="myForm" method="post">
                                <div hidden class="mb-3">
                                    <input type="text" name="id" value="<?= $_SESSION['siduser'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                                    <input type="text" name="nama" value="<?= $_SESSION['snama'] ?>" class="form-control" id="nama" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="alamat" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                                    <input type="date" name="tgl" class="form-control" id="exampleInputPassword1">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Mobil</label>
                                    <select name="mobil" class="form-control">
                                        <option selected disabled>- Pilih Mobil -</option>
                                        <?php
                                        include_once("koneksi.php");
                                        $sql    = "SELECT * FROM tb_mobil";
                                        $query    = mysqli_query($con, $sql);
                                        foreach ($query as $mobil) {
                                        ?>

                                            <option value="<?= $mobil['id_mobil'] ?>"><?= $mobil['no_pol'] ?></option>

                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tujuan</label>
                                    <select name="tujuan" class="form-control" id="tujuan" onchange="tuju()">
                                        <option selected disabled>- Pilih Tujuan -</option>
                                        <?php
                                        include("koneksi.php");
                                        $sql    = "SELECT * FROM tb_tujuan";
                                        $query    = mysqli_query($con, $sql);
                                        foreach ($query as $tujuan) {
                                        ?>

                                            <option value="<?= $tujuan['harga'] ?>"><?= $tujuan['dari_tujuan'] ?></option>

                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Harga</label>
                                    <input readonly type="text" name="harga" class="form-control" id="harga">

                                </div>

                                <div hidden class="mb-3">
                                    <input readonly type="text" name="tujuanhid" class="form-control" id="tujuanhid">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">No HP</label>
                                    <input type="text" name="hp" class="form-control" id="exampleInputPassword1">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Total</label>
                                    <input readonly type="text" name="total" class="form-control" id="total">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Jumlah Orang</label>
                                    <!-- <input type="text" name="jumlah" class="form-control" id="jumlah"> -->
                                    <select class="form-control" name="jumlah" id="jumlah" onchange="tes(document.myForm.bangku)">
                                        <option selected disabled> -- Pilih Jumlah Orang -- </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">No Bangku</label>
                                    <div class="form-check">
                                        <div class="row">
                                            <?php
                                            for ($i = 1; $i < 11; $i++) {
                                            ?>
                                                <div class="col-sm-2">
                                                    <input class="check form-check-input" name="bangku" type="checkbox" value="<?= $i ?>" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        <?= $i ?>
                                                    </label>
                                                    <br>
                                                </div>

                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-success btn-round px-4 btn-sm" data-toggle="modal" data-target="#pesantiket">Pesan Tiket</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-black">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Create By Mulyadi</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    </div>

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Modal Pembayaran -->
    <div class="modal fade" tabindex="-1" id="pesantiket">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Kirim Bukti Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="tiket_proses_tambah2.php">
                        <button type="submit" formmethod="post" class="btn btn-primary">Tambah Data</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </form>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <script>
        $('#tujuan').change(function() {
            document.getElementById("harga").value = $(this).find(':selected').val();
            document.getElementById("tujuanhid").value = $(this).find(':selected').text();
        });

        // function tuju() {
        //     var jurus = document.getElementById("tujuan").value;
        //     alert(jurus); 

        // }   

        // if (document.getElementId("tujuan").value == '1') {
        //     document.getElementId("harga").value = "1000";
        // } else {
        //     document.getElementId("harga").value = "2000";
        // }
    </script>

    <?php
    function rupiah($angka) {
        $hasil = "Rp. " . number_format($angka, '0', ',', '.');
        return $hasil;
    }
    ?>

    <script>
        
        function tes(chk) {
            for (i = 0; i < chk.length; i++)
            chk[i].checked = false;

            var checks = document.querySelectorAll(".check");
            var batas = document.getElementById("jumlah").value;
            // alert(batas);

            var hrga = document.getElementById("harga").value;

            var total = parseInt(batas)*parseInt(hrga);

            document.getElementById("total").value = total;

            var max = parseInt(batas);
            for (var i = 0; i < checks.length; i++)
                checks[i].onclick = selectiveCheck;

            function selectiveCheck(event) {
                var checkedChecks = document.querySelectorAll(".check:checked");
                if (checkedChecks.length >= max + 1)
                    return false;
            }
        }
    </script>
</body>

</html>