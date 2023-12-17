<?php 
include "/xampp/htdocs/perpus/admin/config/koneksi.php";
$id_staff = $_GET['id_staff']; // 
// echo $kd_buku; test

{
    mysqli_query($conn, "delete from staff
    where id_staff = '$id_staff'
    ")
    or die (mysqli_connect_error($conn));
    header("location:../../index.php?module=staff"); //
}
?>
<!-- YANG DI KOLOM SIKU ITU VALUES DARI FORM EDIT BUKU -->