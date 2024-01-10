<?php 
include "/xampp/htdocs/perpus/admin/config/koneksi.php";
$kd_buku = $_GET['kd_buku']; // 
// echo $kd_buku; test

{
    mysqli_query($conn, "delete from buku
    where kd_buku = '$kd_buku'
    ")
    or die (mysqli_connect_error($conn));
    header("location:../../index.php?module=buku"); //
}
?>
<!-- YANG DI KOLOM SIKU ITU VALUES DARI FORM EDIT BUKU -->