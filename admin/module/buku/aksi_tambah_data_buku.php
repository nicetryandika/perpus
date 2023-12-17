<?php 
include "/xampp/htdocs/perpus/admin/config/koneksi.php";
{
    mysqli_query($conn, "insert INTO buku set
    kd_buku='$_POST[kodeBuku]', 
    judul_buku='$_POST[judulBuku]',
    penulis='$_POST[penulisBuku]',
    penerbit='$_POST[penerbitBuku]',
    stok='$_POST[stokBuku]'")
    or die (mysqli_connect_error($conn));
    header('location:../../index.php?module=buku');
}
?>
<!-- YANG DI KOLOM SIKU ITU VALUES DARI FORM TAMBAH BUKU -->