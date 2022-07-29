<?php
#1. Koneksi
include('koneksi.php');

#2. Ambil Value dari input Form
$kode1    = $_POST['kode1'];
$kode2    = $_POST['kode2'];
$kode    = $kode1.$kode2;

$nama    = $_POST['nama'];
$alamat    = $_POST['alamat'];
$hp      = $_POST['hp'];
$foto    = $_POST['foto'];



#3. Proses Tambah
$sql = "INSERT INTO tb_supir1  (kd_supir1, nm_supir1, alamat, hp_supir1, foto_supir1) VALUES ('$kode',' $nama',' $alamat',' $hp',' $foto')";
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
            alert("Maaf, Data Gagal Ditambah");
            document.location="supir.php";
        </script>
    <?php
}
    ?>