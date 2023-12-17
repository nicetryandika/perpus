<?php 
include "/xampp/htdocs/perpus/admin/config/koneksi.php";
$id = $_GET['id_peminjaman']; // 
// echo $id_anggota;

{
    mysqli_query($conn, "delete from peminjaman
    where id_peminjaman = '$id'
    ")
    or die (mysqli_connect_error($conn));
    header("location:../../index.php?module=peminjaman"); //
}
?>
<!-- YANG DI KOLOM SIKU ITU VALUES DARI FORM EDIT BUKU -->