<?php 
include "/xampp/htdocs/perpus/admin/config/koneksi.php";
{
    mysqli_query($conn, "update staff set
    id_staff='$_POST[idStaff]',
    nama_staff='$_POST[namaStaff]',
    username_staff='$_POST[usernameStaff]',
    password_staff='$_POST[passwordStaff]',
    jeniskelamin_staff='$_POST[jeniskelaminStaff]',
    foto_staff='$_POST[fotoStaff]'
    where id_staff = '$_POST[idStaff]'")
    or die (mysqli_connect_error($conn));
    header("location:../../index.php?module=staff"); //
}
?>
<!-- YANG DI KOLOM SIKU ITU VALUES DARI FORM EDIT BUKU -->