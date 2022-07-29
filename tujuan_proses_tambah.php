<?php
#1. Koneksi
include('koneksi.php');

#2. Ambil Value dari input Form
$kd_tujuan    = $_POST['kd_tujuan'];
$dari_tujuan  = $_POST['dari_tujuan'];
$harga        = $_POST['harga'];



#3. Proses Tambah
$sql = "INSERT INTO tb_tujuan  (kd_tujuan, dari_tujuan, harga) VALUES ('$kd_tujuan', '$dari_tujuan','$harga')";
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
            alert("Maaf, Data Gagal Ditambah");
            document.location="tujuan.php";
        </script>
    <?php
}
    ?>