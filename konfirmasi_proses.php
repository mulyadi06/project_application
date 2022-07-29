<?php
#1. Koneksi
include('koneksi.php');

#2. Ambil Value dari input Form
$no_transaksi     = $_GET['id'];

#3. Proses Edit
$sql = "UPDATE tb_transaksi SET confirmed = 1 WHERE no_transaksi = '$no_transaksi'";

$query = mysqli_query($con,$sql);

#4. Yang terjadi jika proses tambah berhasil atau gagal
if($query){
    ?>
        <script>
           document.location="konfirmasi.php";
        </script>
    <?php
}else{
    ?>
        <script>
            alert("Maaf, Data Gagal Dikonfirmasi");
            // document.location="konfirmasi.php";
        </script>
    <?php
}
?>