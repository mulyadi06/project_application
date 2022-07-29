<?php
#1. Koneksi
include('koneksi.php');

#2. Ambil Value dari input Form
$kd_tujuan = $_POST['kd_tujuan'];
$dari_tujuan = $_POST['dari_tujuan'];
$harga = $_POST['harga'];

#3. Proses Edit
$sql = "UPDATE tb_tujuan SET harga = '$harga' WHERE kd_tujuan = '$kd_tujuan'";

$query = mysqli_query($con,$sql);

#4. Yang terjadi jika proses tambah berhasil atau gagal
if($query){
    ?>
        <script>
           document.location="tujuan.php";
        </script>
    <?php
}else{
    ?>
        <script>
            alert("Maaf, Data Gagal Diedit");
            document.location="tujuan.php";
        </script>
    <?php
}
?>