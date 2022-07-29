<?php
    #1. koneksi
    include('koneksi.php');

    #2. ambil id yang terpilih
    $id_pembayaran = $_GET['id_pembayaran'];

    #3. proses hapus
    $sql = "DELETE FROM tb_pembayaran
    WHERE id_pembayaran = '$id_pembayaran'";
    $query = mysqli_query($con,$sql);

    #4. yang terjadi setalah data terhapus
?>
<script>
    document.location="pembayaran.php";
</script>