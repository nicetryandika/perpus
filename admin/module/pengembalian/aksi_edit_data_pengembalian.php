<?php 
include "/xampp/htdocs/perpus/admin/config/koneksi.php";

    mysqli_query($conn, "UPDATE pengembalian SET 
    id_anggota='$_POST[idAnggota]',
    id_staff='$_POST[idStaff]',
    tanggal='$_POST[tanggalKembali]',
    waktu='$_POST[waktuKembali]'
    WHERE id_pengembalian='$_POST[idPengembalian]'
    ")
    or die (mysqli_connect_error());
    header("location:../../index.php?module=pengembalian"); //
?>
<!-- YANG DI KOLOM SIKU ITU VALUES DARI FORM EDIT BUKU -->