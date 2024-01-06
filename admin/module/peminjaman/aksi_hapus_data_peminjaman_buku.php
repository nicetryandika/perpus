<?php
include "/xampp/htdocs/perpus/admin/config/koneksi.php";

$id = $_GET['id_buku'];

mysqli_query($conn, "DELETE FROM detail_peminjaman WHERE id_buku = '$id'")
    or die(mysqli_connect_error($conn));

// Data berhasil dihapus
echo "<script>alert('Data Berhasil Dihapus!'); window.location.href='../../index.php?module=peminjaman';</script>";
?>
