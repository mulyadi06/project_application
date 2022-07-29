<?php
#1. Koneksi
include('koneksi.php');

#2. Ambil Value dari input Form
$nama             = $_POST['nama'];
$tujuan           = $_POST['tujuan'];
$total_bayar      = $_POST['total_bayar'];



#3. Proses Tambah
$sql = "INSERT INTO tb_pembayaran ( nama, tujuan, total_bayar) VALUES ('$nama','$tujuan','$total_bayar')";
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
            alert("Maaf, Data Gagal Ditambah");
            document.location="pembayaran.php";
        </script>
    <?php
}
    ?>