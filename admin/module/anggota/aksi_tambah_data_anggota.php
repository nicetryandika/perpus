<?php 
include "/xampp/htdocs/perpus/admin/config/koneksi.php";
{
    mysqli_query($conn, "insert INTO anggota set
    id_anggota='$_POST[idAnggota]', 
    nama_anggota='$_POST[namaAnggota]',
    username_anggota='$_POST[usernameAnggota]',
    password_anggota='$_POST[passwordAnggota]',
    jeniskelamin_anggota='$_POST[jeniskelaminAnggota]',
    foto_anggota='$_POST[fotoAnggota]'")
    or die (mysqli_connect_error($conn));
    header("location:../../index.php?module=anggota");
}
?>
<!-- YANG DI KOLOM SIKU ITU VALUES(name) DARI FORM TAMBAH BUKU -->