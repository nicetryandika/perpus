<?php 
include "/xampp/htdocs/perpus/admin/config/koneksi.php";
$id_anggota = $_GET['id_anggota']; // 
// echo $kd_buku; test

{
    mysqli_query($conn, "delete from anggota
    where id_anggota = '$id_anggota'
    ")
    or die (mysqli_connect_error($conn));
    header("location:../../index.php?module=anggota"); //
}
?>
<!-- YANG DI KOLOM SIKU ITU VALUES DARI FORM EDIT BUKU -->