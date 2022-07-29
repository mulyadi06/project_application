<?php
#1. Koneksi
include('koneksi.php');

#2. Ambil Value dari input Form
$kode    = $_POST['kode'];
$tgl    = $_POST['tgl'];
$jam    = $_POST['jam'];
$tujuan    = $_POST['tujuan'];
$mobil    = $_POST['mobil'];
$supir    = $_POST['supir'];


#3. Proses Tambah
$sql = "INSERT INTO tb_jadwal (kd_jadwal, tgl_berangkat, jam_berangkat, id_tujuan, id_mobil, id_supir1) 
VALUES ('$kode','$tgl','$jam','$tujuan','$mobil','$supir')";
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
            alert("Maaf, Data Gagal Ditambah");
            document.location="jadwal.php";
        </script>
    <?php
}
    ?>