<?php
#1. Koneksi
include('koneksi.php');

#2. Ambil Value dari input Form
$kode     = $_POST['kode'];
$nama     = $_POST['nama'];
$alamat     = $_POST['alamat'];
$hp       = $_POST['hp'];
$foto     = $_POST['foto'];

#3. Proses Edit
$sql = "UPDATE tb_supir1 SET nm_supir1 = '$nama', alamat = '$alamat', hp_supir1 = '$hp', foto_supir1 = '$foto' WHERE kd_supir1 = '$kode'";

$query = mysqli_query($con,$sql);

#4. Yang terjadi jika proses tambah berhasil atau gagal
if($query){
    ?>
        <script>
           document.location="supir.php";
        </script>
    <?php
}else{
    ?>
        <script>
            alert("Maaf, Data Gagal Diedit");
            document.location="supir.php";
        </script>
    <?php
}
?>