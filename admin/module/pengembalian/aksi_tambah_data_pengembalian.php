<?php 
include "/xampp/htdocs/perpus/admin/config/koneksi.php";

mysqli_query($conn, "INSERT INTO pengembalian (id_anggota, id_staff, tanggal, waktu) 
VALUES ('$_POST[idAnggota]', '$_POST[idStaff]', '$_POST[tanggalKembali]', '$_POST[waktuKembali]')")
or die(mysqli_error($conn));

header("location:../../index.php?module=pengembalian");
?>

<!-- <?php 
// include "/xampp/htdocs/perpus/admin/config/koneksi.php";
// {
//     mysqli_query($conn, "insert INTO peminjaman set id_peminjaman
//     id_anggota='$_POST[idAnggota]', 
//     id_staff='$_POST[idStaff]',
//     tanggal='$_POST[tanggalPinjam]',
//     waktu='$_POST[waktuPinjam]")
//     or die (mysqli_connect_error($conn));
//     header("location:../../index.php?module=peminjaman");
// }
// ?>
YANG DI KOLOM SIKU ITU VALUES DARI FORM TAMBAH BUKU -->