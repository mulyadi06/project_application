<?php
#1. Koneksi
include('koneksi.php');

#2. Ambil Value dari input Form
$nama       = $_POST['nama'];
$email      = $_POST['email'];
$password   = $_POST['password'];


#3. Proses Tambah
$sql = "INSERT INTO tb_akun (nm_pelanggan, email, password) 
VALUES ('$nama','$email','$password')";
$query = mysqli_query($con,$sql);

#4. Yang terjadi jika proses tambah berhasil atau gagal
if($query){
    ?>
        <script>
            alert("Akun Berhasil di Daftar, Silahkan Login");
            document.location="login_user.php";
        </script>
    <?php
}else{
    ?>
        <script>
            alert("Maaf, Gagal Daftar ! Mohon periksa kembali Data yang anda input");
            document.location="login_user.php";
        </script>
    <?php
}
    ?>