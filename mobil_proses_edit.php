<?php
#1. Koneksi
include('koneksi.php');

#2. Ambil Value dari input Form
$id     = $_POST['id'];
$jenis  = $_POST['jenis'];
$stnk   = $_POST['stnk'];
$mesin  = $_POST['mesin'];
$pajak  = $_POST['pajak'];
$nopol  = $_POST['nopol'];
$kursi  = $_POST['kursi'];

#3. Proses Edit
$sql = "UPDATE tb_mobil SET 
jenis_mobil         = '$jenis',
no_stnk             = '$stnk',
no_mesin            = '$mesin',
tgl_berakhir_pjk    = '$pajak',
no_pol              = '$nopol',
kursi               = '$kursi'
WHERE id_mobil = '$id'";

$query = mysqli_query($con,$sql);

#4. Yang terjadi jika proses tambah berhasil atau gagal
if($query){
    ?>
        <script>
           document.location="mobil.php";
        </script>
    <?php
}else{
    ?>
        <script>
            alert("Maaf, Data Gagal Diedit");
            document.location="mobil.php";
        </script>
    <?php
}
?>