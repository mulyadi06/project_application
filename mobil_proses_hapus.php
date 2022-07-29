<?php
    #1. koneksi
    include('koneksi.php');

    #2. ambil id yang terpilih
    $id = $_GET['id'];

    #3. proses hapus
    $sql = "DELETE FROM tb_mobil
    WHERE id_mobil = '$id'";
    $query = mysqli_query($con,$sql);

    #4. yang terjadi setalah data terhapus
?>
<script>
    document.location="mobil.php";
</script>