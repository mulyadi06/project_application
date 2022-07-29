<?php
#1. Koneksi
include('koneksi.php');

#2. Ambil Value dari input Form
$kode     = $_POST['kode'];
$tgl  = $_POST['tgl'];
$jam  = $_POST['jam'];
$tujuan  = $_POST['tujuan'];
$mobil  = $_POST['mobil'];
$supir  = $_POST['supir'];

#3. Proses Edit
$sql = "UPDATE tb_jadwal SET tgl_berangkat = '$tgl', jam_berangkat = '$jam', id_tujuan = '$tujuan', id_mobil = '$mobil', id_supir1 = '$supir' WHERE kd_jadwal = '$kode'";

$query = mysqli_query($con,$sql);

#4. Yang terjadi jika proses tambah berhasil atau gagal
if($query){
    ?>
        <script>
           document.location="jadwal.php";
        </script>
    <?php
}else{
    ?>
        <script>
            alert("Maaf, Data Gagal Diedit");
            document.location="jadwal.php";
        </script>
    <?php
}
?>