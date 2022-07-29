<?php
#1. Koneksi
include('koneksi.php');

#2. Ambil Value dari input Form
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];
$tujuan = $_POST['tujuan'];
$mobil= $_POST['mobil'];
$tgl= $_POST['tgl'];
$bangku= $_POST['bangku'];
$jumlah= $_POST['jumlah'];

#3. Proses Edit
$sql = "UPDATE tb_transaksi SET nm_pelanggan='$nama', no_hp='$hp', alamat='$alamat', id_tujuan='$tujuan', id_mobil='$mobil', tanggal='$tgl', no_bangku='$bangku', jumlah_orang='$jumlah' WHERE no_transaksi='$id'";

$query = mysqli_query($con,$sql);

#4. Yang terjadi jika proses tambah berhasil atau gagal
if($query){
    ?>
        <script>
           document.location="tiket_data.php";
        </script>
    <?php
}else{
    ?>
        <script>
            alert("Maaf, Data Gagal Diedit");
            document.location="tiket_data.php";
        </script>
    <?php
}
?>