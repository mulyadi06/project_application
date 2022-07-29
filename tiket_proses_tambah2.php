<?php
#1. Koneksi
include('koneksi.php');

#2. Ambil Value dari input Form
// $bangku      = $_POST['bangku'];

// foreach ($bangku as $item) {
//     echo $item ;
// }

// return $bangku;
$id         = $_POST['id'];
$nama       = $_POST['nama'];
$alamat     = $_POST['alamat'];
$tgl        = $_POST['tgl'];
$mobil      = $_POST['mobil'];
$harga      = $_POST['harga'];
$tujuan     = $_POST['tujuanhid'];
$hp         = $_POST['hp'];
$jumlah     = $_POST['jumlah'];
$bangku      = $_POST['bangku'];


#3. Proses Tambah
$sql = "INSERT INTO tb_transaksi (id_pelanggan, nm_pemesan, alamat, tanggal, id_mobil, tujuan, harga, no_hp, jumlah_orang, no_bangku) VALUES ('$id','$nama','$alamat','$tgl','$mobil','$tujuan','$harga','$hp','$jumlah','$bangku')";
$query = mysqli_query($con,$sql);

#4. Yang terjadi jika proses tambah berhasil atau gagal
if($query){
    ?>
        
        <script>
            document.location="index.php";
        </script>
    <?php
}else{
    ?>
        <script>
            alert("Maaf, Data Gagal Ditambah");
            document.location="index.php";
        </script>
    <?php
}
    ?>