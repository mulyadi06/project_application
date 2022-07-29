<?php
#1. Koneksi
include('koneksi.php');

#2. Ambil Value dari input Form
$jenis    = $_POST['jenis'];
$stnk     = $_POST['stnk'];
$nomesin  = $_POST['nomesin'];
$pajak    = $_POST['pajak'];
$nopol    = $_POST['nopol'];
$kursi    = $_POST['kursi'];

#3. Proses Tambah
$sql = "INSERT INTO tb_mobil (jenis_mobil, no_stnk, no_mesin, tgl_berakhir_pjk, no_pol, kursi) 
VALUES ('$jenis', '$stnk', '$nomesin', '$pajak', '$nopol', '$kursi')";
$query = mysqli_query($con,$sql);

$sql = "SELECT id_mobil FROM tb_mobil WHERE no_pol='$nopol'";
    $query1 = mysqli_query($con,$sql)
    ;
    // $idmobil = $query1[0]['id_mobil'];
 foreach ($query1 as $item) {
     $mobilid = $item['id_mobil'];
 }

  
for ($i=1; $i <= $kursi ; $i++) { 
    $sql = "INSERT INTO tb_kursi (id_mobil, no_kursi) 
    VALUES ('$mobilid', '$i')";
    $query2 = mysqli_query($con,$sql);
    
}
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
            alert("Maaf, Data Gagal Ditambah");
            document.location="mobil.php";
        </script>
    <?php
}
    ?>