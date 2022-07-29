<?php
#1. Koneksi
include('koneksi.php');

#2. Ambil Value dari input Form
$id_pembayaran     = $_POST['id_pembayaran'];
$nama              = $_POST['nama'];
$tujuan            = $_POST['tujuan'];
$total_bayar       = $_POST['total_bayar'];

#3. Proses Edit
$sql = "UPDATE tb_pembayaran SET nama = '$nama', tujuan = '$tujuan', total_bayar = '$total_bayar', WHERE id_pembayaran = '$id_pembayaran'";

$query = mysqli_query($con,$sql);

#4. Yang terjadi jika proses tambah berhasil atau gagal
if($query){
    ?>
        <script>
           document.location="pembayaran.php";
        </script>
    <?php
}else{
    ?>
        <script>
            alert("Maaf, Data Gagal Diedit");
            document.location="pembayaran.php";
        </script>
    <?php
}
?>