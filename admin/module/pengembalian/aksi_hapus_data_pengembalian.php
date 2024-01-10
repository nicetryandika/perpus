<?php 
include "/xampp/htdocs/perpus/admin/config/koneksi.php";
$id = $_GET['id_pengembalian']; // 
// echo $id_anggota;

{
    mysqli_query($conn, "delete from pengembalian
    where id_pengembalian = '$id'
    ")
    or die (mysqli_connect_error($conn));
    header("location:../../index.php?module=pengembalian"); //
}
?>
<!-- YANG DI KOLOM SIKU ITU VALUES DARI FORM EDIT BUKU -->