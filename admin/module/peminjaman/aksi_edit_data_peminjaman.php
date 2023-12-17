<?php 
include "/xampp/htdocs/perpus/admin/config/koneksi.php";

    mysqli_query($conn, "UPDATE peminjaman SET 
    id_anggota='$_POST[idAnggota]',
    id_staff='$_POST[idStaff]',
    tanggal='$_POST[tanggalPinjam]',
    waktu='$_POST[waktuPinjam]'
    WHERE id_peminjaman='$_POST[idPeminjaman]'
    ")
    or die (mysqli_connect_error());
    header("location:../../index.php?module=peminjaman"); //
?>
<!-- YANG DI KOLOM SIKU ITU VALUES DARI FORM EDIT BUKU -->